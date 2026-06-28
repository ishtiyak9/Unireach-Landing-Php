<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connect | Unireach Consultancy</title>
    <meta
      name="description"
      content="Connect with Unireach. All our official links, social media, and consultation portals in one premium profile."
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Tailwind for Layout -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#020617",
              accent: "#D1A751",
              "accent-dark": "#9e6d28",
              "text-light": "#F4F1EC",
              "border-dark": "rgba(209, 167, 81, 0.15)",
            },
            fontFamily: {
              sans: ["Outfit", "sans-serif"],
              lora: ["Lora", "serif"],
              display: ["Outfit", "sans-serif"],
            },
          },
        },
      };
    </script>

    <style>
      :root {
        --color-primary: #020617;
        --color-accent: #d1a751;
      }

      body {
        background-color: var(--color-primary);
        color: #f4f1ec;
        overflow-x: hidden;
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(209, 167, 81, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .glass-card:hover {
        background: rgba(209, 167, 81, 0.08);
        border-color: rgba(209, 167, 81, 0.4);
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
      }

      .text-accent-gradient {
        background: linear-gradient(
          135deg,
          #d1a751 0%,
          #f4f1ec 50%,
          #9e6d28 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .bg-mesh {
        background-image: radial-gradient(
            at 0% 0%,
            rgba(209, 167, 81, 0.15) 0px,
            transparent 50%
          ),
          radial-gradient(
            at 100% 0%,
            rgba(158, 109, 40, 0.1) 0px,
            transparent 50%
          ),
          radial-gradient(at 50% 100%, rgba(2, 6, 23, 1) 0px, transparent 50%);
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(-10px);
        }
      }

      .animate-float {
        animation: float 6s ease-in-out infinite;
      }

      .link-icon {
        background: linear-gradient(
          135deg,
          rgba(209, 167, 81, 0.1),
          rgba(209, 167, 81, 0.05)
        );
      }

      .nav-dot {
        width: 4px;
        height: 4px;
        background: var(--color-accent);
        border-radius: 50%;
        opacity: 0.3;
      }
    </style>
  </head>
  <body
    class="bg-mesh min-h-screen py-12 px-4 selection:bg-accent selection:text-primary"
  >
    <!-- Background Decor -->
    <div class="fixed inset-0 pointer-events-none z-0">
      <div
        class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-accent/5 rounded-full blur-[120px]"
      ></div>
      <div
        class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-accent-dark/5 rounded-full blur-[120px]"
      ></div>
    </div>

    <div class="max-w-md mx-auto relative z-10">
      <!-- Profile Header -->
      <header class="text-center mb-16 relative pt-4">
        <!-- Decoration Background Rings -->
        <div class="absolute top-[40%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 border border-accent/5 rounded-full pointer-events-none"></div>
        <div class="absolute top-[40%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 border border-accent/10 rounded-full pointer-events-none"></div>

        <div class="relative inline-block mb-8 animate-float">
          <!-- Animated Decorative Ring -->
          <div class="absolute -inset-4 border border-accent/20 rounded-full animate-[spin_12s_linear_infinite] border-dashed"></div>
          
          <div
            class="relative w-28 h-28 mx-auto rounded-full p-[3px] bg-gradient-to-tr from-accent via-accent/40 to-accent shadow-2xl shadow-accent/20"
          >
            <div
              class="w-full h-full bg-primary rounded-full flex items-center justify-center overflow-hidden border border-white/10 relative group"
            >
              <div class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <img
                src="images/logo.png"
                alt="Unireach Logo"
                class="w-18 h-auto object-contain brightness-0 invert scale-110 transition-transform duration-500 group-hover:scale-125"
              />
            </div>
          </div>
        </div>

        <div class="relative z-10">
          <h1
            class="text-4xl font-display font-black text-white mb-3 tracking-tighter"
          >
            <span class="text-accent-gradient drop-shadow-sm">Unireach</span>
            <span class="font-light text-text-light/90 ml-1">Consultancy</span>
          </h1>
          <p class="text-text-light/50 font-lora italic text-sm tracking-wide mb-8">
            "Architecting Careers • Bridging Ambitions"
          </p>

          <!-- Status & Verification Badge -->
          <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/5 border border-accent/20 mb-10 shadow-inner">
            <span class="flex h-1.5 w-1.5 rounded-full bg-accent animate-pulse"></span>
            <span class="text-[9px] uppercase tracking-[0.4em] text-accent font-black">Official Profile</span>
          </div>

          <!-- Premium Glass Social Nav -->
          <div class="flex items-center justify-center gap-1.5 p-1.5 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl max-w-max mx-auto shadow-2xl">
            <a
              href="https://www.facebook.com/unireachbd"
              target="_blank"
              class="w-10 h-10 rounded-xl flex items-center justify-center text-text-light/60 hover:text-white hover:bg-accent transition-all duration-300"
            >
              <i class="ph ph-facebook-logo text-xl"></i>
            </a>
            <a
              href="https://www.instagram.com/unireachbd"
              target="_blank"
              class="w-10 h-10 rounded-xl flex items-center justify-center text-text-light/60 hover:text-white hover:bg-accent transition-all duration-300"
            >
              <i class="ph ph-instagram-logo text-xl"></i>
            </a>
            <a
              href="https://www.youtube.com/@unireachbd"
              target="_blank"
              class="w-10 h-10 rounded-xl flex items-center justify-center text-text-light/60 hover:text-white hover:bg-accent transition-all duration-300"
            >
              <i class="ph ph-youtube-logo text-xl"></i>
            </a>
            <a
              href="https://www.linkedin.com/company/unireachbd"
              target="_blank"
              class="w-10 h-10 rounded-xl flex items-center justify-center text-text-light/60 hover:text-white hover:bg-accent transition-all duration-300"
            >
              <i class="ph ph-linkedin-logo text-xl"></i>
            </a>
          </div>
        </div>
      </header>

      <!-- Main Links Portal -->
      <main class="space-y-4 mb-12">
        <!-- SECTION 1: IMMEDIATE ASSISTANCE (Priority 1) -->
        <div class="mb-8">
          <div class="flex items-center gap-2 mb-4 ml-4">
            <span class="w-1 h-3 bg-accent rounded-full"></span>
            <h2
              class="text-[10px] uppercase tracking-[0.2em] text-text-light/30 font-bold"
            >
              Immediate Assistance
            </h2>
          </div>

          <a
            href="http://wa.me/8801898796091"
            target="_blank"
            class="glass-card flex items-center p-4 rounded-3xl group mb-3 border-accent/30 bg-accent/10"
          >
            <div
              class="w-12 h-12 rounded-2xl bg-accent text-primary flex items-center justify-center mr-4 shadow-lg shadow-accent/20"
            >
              <i class="ph-fill ph-whatsapp-logo text-2xl"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-white font-bold text-sm tracking-wide">
                Direct WhatsApp Support
              </h3>
              <p
                class="text-accent text-[10px] uppercase font-bold tracking-tighter opacity-80"
              >
                Instant Response
              </p>
            </div>
            <div class="flex items-center gap-2">
              <span
                class="flex h-2 w-2 rounded-full bg-accent animate-ping"
              ></span>
              <i
                class="ph ph-caret-right text-accent group-hover:translate-x-1 transition-transform"
              ></i>
            </div>
          </a>

          <a
            href="contact"
            class="glass-card flex items-center p-4 rounded-3xl group"
          >
            <div
              class="w-12 h-12 rounded-2xl link-icon text-accent flex items-center justify-center mr-4 border border-accent/10"
            >
              <i class="ph-fill ph-calendar-check text-2xl"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-white font-bold text-sm tracking-wide">
                Book Free Consultation
              </h3>
              <p
                class="text-text-light/40 text-[10px] uppercase font-bold tracking-tighter"
              >
                One-on-One Expert Session
              </p>
            </div>
            <i
              class="ph ph-caret-right text-text-light/20 group-hover:translate-x-1 transition-transform"
            ></i>
          </a>

          <a
            href="https://maps.app.goo.gl/BL54SGWyuViJconD6"
            target="_blank"
            class="glass-card flex items-center p-4 rounded-3xl group mt-3"
          >
            <div
              class="w-12 h-12 rounded-2xl link-icon text-accent flex items-center justify-center mr-4 border border-accent/10"
            >
              <i class="ph-fill ph-map-pin text-2xl"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-white font-bold text-sm tracking-wide">
                Find Our Office
              </h3>
              <p
                class="text-text-light/40 text-[10px] uppercase font-bold tracking-tighter"
              >
                View on Google Maps
              </p>
            </div>
            <i
              class="ph ph-navigation-arrow text-text-light/20 group-hover:text-accent group-hover:translate-x-1 group-hover:-translate-y-1 transition-all"
            ></i>
          </a>
        </div>

        <!-- SECTION 2: PREMIUM SERVICES (Priority 2) -->
        <div class="mb-8">
          <div class="flex items-center gap-2 mb-4 ml-4">
            <span class="w-1 h-3 bg-accent/40 rounded-full"></span>
            <h2
              class="text-[10px] uppercase tracking-[0.2em] text-text-light/30 font-bold"
            >
              Premium Services
            </h2>
          </div>

          <!-- Student Housing (uHomes) -->
          <a
            href="https://en.uhomes.com/?xcode=000f195c7dd140f5bb56"
            target="_blank"
            class="glass-card flex items-center p-4 rounded-3xl group mb-3"
          >
            <div
              class="w-12 h-12 rounded-2xl link-icon text-accent flex items-center justify-center mr-4 border border-accent/10"
            >
              <i class="ph-fill ph-house-line text-2xl"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-white font-bold text-sm tracking-wide">
                Student Accommodation
              </h3>
              <p
                class="text-text-light/40 text-[10px] uppercase font-bold tracking-tighter"
              >
                Powered by uHomes
              </p>
            </div>
            <i
              class="ph ph-arrow-up-right text-text-light/20 group-hover:text-accent transition-all"
            ></i>
          </a>

          <div class="grid grid-cols-2 gap-3">
            <a
              href="/#scholarships"
              class="glass-card p-5 rounded-3xl text-center group"
            >
              <div
                class="w-10 h-10 mx-auto rounded-xl link-icon text-accent flex items-center justify-center mb-3"
              >
                <i class="ph-fill ph-graduation-cap text-xl"></i>
              </div>
              <h3 class="text-white font-bold text-[13px] mb-1">
                Scholarships
              </h3>
              <p class="text-text-light/30 text-[9px] uppercase font-bold">
                Check Aid
              </p>
            </a>
            <a
              href="/#countries"
              class="glass-card p-5 rounded-3xl text-center group"
            >
              <div
                class="w-10 h-10 mx-auto rounded-xl link-icon text-accent flex items-center justify-center mb-3"
              >
                <i class="ph-fill ph-map-trifold text-xl"></i>
              </div>
              <h3 class="text-white font-bold text-[13px] mb-1">
                Destinations
              </h3>
              <p class="text-text-light/30 text-[9px] uppercase font-bold">
                Study Abroad
              </p>
            </a>
          </div>
        </div>

        <!-- SECTION 3: OFFICIAL CHANNELS (Priority 3) -->
        <div class="mb-8">
          <div class="flex items-center gap-2 mb-4 ml-4">
            <span class="w-1 h-3 bg-accent/20 rounded-full"></span>
            <h2
              class="text-[10px] uppercase tracking-[0.2em] text-text-light/30 font-bold"
            >
              Official Portals
            </h2>
          </div>
          <div class="space-y-3">
            <a
              href="https://unireachbd.com"
              target="_blank"
              class="glass-card flex items-center p-4 rounded-3xl group"
            >
              <div
                class="w-10 h-10 rounded-2xl link-icon text-accent flex items-center justify-center mr-4 border border-accent/10"
              >
                <i class="ph-fill ph-browser text-xl"></i>
              </div>
              <h3 class="text-white font-bold text-sm tracking-wide flex-1">
                Unireach Website
              </h3>
              <i
                class="ph ph-arrow-square-out text-text-light/20 group-hover:text-accent transition-colors"
              ></i>
            </a>
            <a
              href="https://www.youtube.com/@unireachbd"
              target="_blank"
              class="glass-card flex items-center p-4 rounded-3xl group border-red-500/10 hover:border-red-500/40"
            >
              <div
                class="w-10 h-10 rounded-2xl link-icon text-red-500 flex items-center justify-center mr-4 border border-red-500/10 bg-red-500/5"
              >
                <i class="ph-fill ph-youtube-logo text-xl"></i>
              </div>
              <h3 class="text-white font-bold text-sm tracking-wide flex-1">
                Official YouTube Channel
              </h3>
              <i
                class="ph ph-play-circle text-text-light/20 group-hover:text-red-500 transition-colors"
              ></i>
            </a>
            <a
              href="/#testimonials"
              class="glass-card flex items-center p-4 rounded-3xl group"
            >
              <div
                class="w-10 h-10 rounded-2xl link-icon text-accent flex items-center justify-center mr-4 border border-accent/10"
              >
                <i class="ph-fill ph-quotes text-xl"></i>
              </div>
              <h3 class="text-white font-bold text-sm tracking-wide flex-1">
                Student Success Stories
              </h3>
              <i
                class="ph ph-caret-right text-text-light/20 group-hover:translate-x-1 transition-transform"
              ></i>
            </a>
          </div>
        </div>
      </main>

      <!-- Social Footprint -->
      <footer class="text-center">
        <!-- Bottom Branding -->
        <div class="flex flex-col items-center gap-2">
          <p
            class="text-[10px] text-text-light/30 uppercase tracking-[0.4em] font-bold"
          >
            Unireach Consultancy
          </p>
          <div class="w-8 h-[1px] bg-accent/20"></div>
          <p class="text-[9px] text-text-light/20 font-medium">
            Dhaka • Rome • London
          </p>
        </div>
      </footer>
    </div>

    <!-- Optional: Floating QR Button (If they scan it in person) -->
    <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50">
      <button
        onclick="alert('Digital Business Card Link Shared!')"
        class="bg-white/5 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full text-[10px] uppercase font-bold tracking-widest text-white/40 hover:text-accent transition-colors"
      >
        Share Profile
      </button>
    </div>
  </body>
</html>
