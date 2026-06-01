/* =========================================================
   UNIREACH — main.js
   Shared logic for navigation, animations, and interactions
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Navigation Logic
    const navbar = document.getElementById('navbar');
    const mainNavInner = document.getElementById('main-nav-inner');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    const navLogo = document.getElementById('nav-logo');

    function handleNavScroll() {
        if (!navbar) return;
        
        if (window.scrollY > 50) {
            navbar.classList.remove('nav-transparent');
            navbar.classList.add('scrolled');
            if (mainNavInner) {
                mainNavInner.classList.add('py-3');
                mainNavInner.classList.remove('py-4', 'py-5');
            }
            if (navLogo) {
                navLogo.classList.remove('brightness-0', 'invert');
            }
        } else {
            // Only make transparent if it has the nav-transparent class originally
            if (navbar.getAttribute('data-nav-type') === 'transparent' || navbar.classList.contains('nav-transparent')) {
                navbar.classList.add('nav-transparent');
                navbar.classList.remove('scrolled');
            }
            if (mainNavInner) {
                mainNavInner.classList.remove('py-3');
                mainNavInner.classList.add(navbar.getAttribute('data-nav-py') || 'py-4');
            }
            if (navLogo && navbar.classList.contains('nav-transparent')) {
                navLogo.classList.add('brightness-0', 'invert');
            }
        }
    }

    if (navbar) {
        window.addEventListener('scroll', handleNavScroll, { passive: true });
        handleNavScroll(); // Run on load
    }

    // 2. Mobile Menu Toggle
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileBtn.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            
            // Toggle body scroll
            if (mobileMenu.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileBtn.classList.remove('open');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // 3. Scroll Reveal Animation Logic
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                entry.target.classList.add('active'); // Supporting both naming conventions
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
        revealObserver.observe(el);
    });

    // Force reveal hero sections immediately for better UX
    setTimeout(() => {
        document.querySelectorAll('.hero-reveal, #hero .reveal').forEach(el => {
            el.classList.add('visible');
            el.classList.add('active');
        });
    }, 150);

    // 4. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-trigger');
        if (trigger) {
            trigger.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                faqItems.forEach(i => i.classList.remove('active'));
                if (!isActive) item.classList.add('active');
            });
        }
    });

    // 5. Stat Counter Animation
    const counters = document.querySelectorAll('.stat-counter');
    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseFloat(counter.getAttribute('data-target'));
                const isDecimal = counter.getAttribute('data-decimal') === 'true';
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = 2000;
                const frameDuration = 1000 / 60;
                const totalFrames = Math.round(duration / frameDuration);
                let frame = 0;

                const updateCount = () => {
                    frame++;
                    const progress = 1 - Math.pow(1 - frame / totalFrames, 4);
                    const currentCount = target * progress;

                    if (frame < totalFrames) {
                        counter.innerText = isDecimal 
                            ? currentCount.toFixed(1) 
                            : Math.ceil(currentCount);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = (isDecimal ? target.toFixed(1) : target) + suffix;
                    }
                };
                requestAnimationFrame(updateCount);
                countObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => countObserver.observe(counter));


});
