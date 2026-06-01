<!-- FOOTER -->
<footer class="relative bg-primary pt-20 pb-8 overflow-hidden border-t border-white/5 mt-1">
  <!-- Decorative Background Grid & Brand Image -->
  <div class="absolute inset-0 bg-grid-pattern opacity-5 pointer-events-none"></div>
  <div class="absolute inset-0 flex items-center justify-center opacity-[0.10] pointer-events-none overflow-hidden">
    <img src="images/fbc2.png" alt="" class="w-full max-w-4xl object-contain" />
  </div>

  <!-- Top Gradient line -->
  <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent/50 to-transparent"></div>

  <div class="container-max relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
      <!-- Column 1: Brand & About -->
      <div class="lg:col-span-4 pr-4">
        <a href="./" class="inline-block mb-8">
          <img src="images/logo.png" alt="Unireach Logo" class="h-12 w-auto object-contain brightness-0 invert" />
        </a>
        <p class="text-text-light/60 text-sm leading-relaxed mb-8 font-lora">
          Your trusted partner in international education and migration. We architect careers by bridging the gap between your ambition and global opportunities.
        </p>
        <!-- Socials -->
        <div class="flex items-center gap-3">
          <a href="https://www.facebook.com/unireachbd" target="_blank" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-primary hover:bg-accent hover:border-accent transition-all duration-300">
            <i class="ph-fill ph-facebook-logo text-lg"></i>
          </a>
          <a href="https://www.instagram.com/unireachbd/" target="_blank" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-primary hover:bg-accent hover:border-accent transition-all duration-300">
            <i class="ph-fill ph-instagram-logo text-lg"></i>
          </a>
          <a href="https://www.youtube.com/@unireachbd" target="_blank" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-primary hover:bg-accent hover:border-accent transition-all duration-300">
            <i class="ph-fill ph-youtube-logo text-lg"></i>
          </a>
          <a href="https://www.linkedin.com/company/unireachbd" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-primary hover:bg-accent hover:border-accent transition-all duration-300">
            <i class="ph-fill ph-linkedin-logo text-lg"></i>
          </a>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="lg:col-span-2 lg:pl-4">
        <h4 class="text-white font-bold text-lg mb-6 tracking-wide">Quick Links</h4>
        <ul class="space-y-4">
          <li><a href="./" class="text-text-light/60 text-sm hover:text-accent transition-colors flex items-center gap-2 group"><i class="ph-bold ph-caret-right text-accent opacity-0 -ml-4 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i> Home</a></li>
          <li><a href="about" class="text-text-light/60 text-sm hover:text-accent transition-colors flex items-center gap-2 group"><i class="ph-bold ph-caret-right text-accent opacity-0 -ml-4 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i> About Us</a></li>
          <li><a href="./#services" class="text-text-light/60 text-sm hover:text-accent transition-colors flex items-center gap-2 group"><i class="ph-bold ph-caret-right text-accent opacity-0 -ml-4 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i> Services</a></li>
          <li><a href="contact" class="text-text-light/60 text-sm hover:text-accent transition-colors flex items-center gap-2 group"><i class="ph-bold ph-caret-right text-accent opacity-0 -ml-4 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i> Contact Us</a></li>
        </ul>
      </div>

      <!-- Column 3: Services -->
      <div class="lg:col-span-3">
        <h4 class="text-white font-bold text-lg mb-6 tracking-wide">Our Services</h4>
        <ul class="space-y-4">
          <li><a href="#" class="text-text-light/60 text-sm hover:text-accent transition-colors">University Admissions</a></li>
          <li><a href="#" class="text-text-light/60 text-sm hover:text-accent transition-colors">Student Visa Processing</a></li>
          <li><a href="#" class="text-text-light/60 text-sm hover:text-accent transition-colors">Skilled Migration & PR</a></li>
          <li><a href="concierge" class="text-text-light/60 text-sm hover:text-accent transition-colors">Concierge & Settlement</a></li>
          <li><a href="#" class="text-text-light/60 text-sm hover:text-accent transition-colors">Document Attestation</a></li>
        </ul>
      </div>

      <!-- Column 4: Newsletter -->
      <div class="lg:col-span-3">
        <h4 class="text-white font-bold text-lg mb-6 tracking-wide">Stay Updated</h4>
        <p class="text-text-light/60 text-sm mb-4">Subscribe to our newsletter for the latest immigration updates and scholarship news.</p>
        <form class="relative group mt-2" onsubmit="event.preventDefault();">
          <input type="email" placeholder="Email address..." class="w-full bg-[#0a1424] border border-border-dark rounded-full py-3 px-5 text-sm text-white placeholder-text-light/40 focus:outline-none focus:border-accent transition-colors" required />
          <button type="submit" class="absolute right-1 top-1 bottom-1 bg-accent text-primary w-10 flex items-center justify-center rounded-full hover:bg-white transition-colors shadow-lg">
            <i class="ph-bold ph-paper-plane-right"></i>
          </button>
        </form>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="pt-8 border-t border-border-dark flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="text-text-light/40 text-xs text-center md:text-left">&copy; <?php echo date('Y'); ?> Unireach Consultancy. All rights reserved.</p>
      <div class="flex items-center gap-6 text-xs text-text-light/40">
        <a href="faq" class="hover:text-accent transition-colors">FAQ</a>
        <a href="privacy.php" class="hover:text-accent transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-accent transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-accent transition-colors">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Button -->
<div class="fixed bottom-8 right-8 z-[100] flex items-center justify-end group">
  <!-- Label -->
  <div class="absolute right-full mr-4 bg-white/5 backdrop-blur-md border border-white/10 px-4 py-2 rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none whitespace-nowrap translate-x-2 group-hover:translate-x-0">
    <span class="text-[10px] uppercase tracking-widest font-bold text-white">Chat with an Expert</span>
  </div>
  <!-- Button -->
  <a href="https://wa.me/8801898796091" target="_blank" class="w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center text-white text-3xl shadow-[0_10px_30px_rgba(37,211,102,0.4)] hover:scale-110 transition-all duration-300 relative">
    <div class="absolute inset-0 bg-[#25D366] rounded-full blur-xl opacity-20 transition-opacity animate-pulse"></div>
    <i class="ph-fill ph-whatsapp-logo relative z-10"></i>
  </a>
</div>

<script src="main.js"></script>
</body>
</html>
