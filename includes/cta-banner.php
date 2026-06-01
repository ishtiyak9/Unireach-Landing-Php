<!-- CTA BANNER SECTION -->
<section
  id="cta-banner"
  class="relative z-10 py-24 overflow-hidden bg-accent"
>
  <!-- Background texture/gradient -->
  <div
    class="absolute inset-0 bg-gradient-to-br from-[#EED382] via-[#D1A751] to-[#B88E36] z-0"
  ></div>

  <!-- Abstract Shapes -->
  <div
    class="absolute -top-32 -left-32 w-96 h-96 bg-white/30 rounded-full blur-[100px] pointer-events-none z-0"
  ></div>
  <div
    class="absolute -bottom-32 -right-32 w-96 h-96 bg-primary/20 rounded-full blur-[100px] pointer-events-none z-0"
  ></div>

  <!-- Decorative Pattern -->
  <div
    class="absolute inset-0 opacity-10 mix-blend-overlay pointer-events-none z-0"
    style="
      background-image: radial-gradient(#000 1px, transparent 1px);
      background-size: 32px 32px;
    "
  ></div>

  <div class="container-max relative z-10 text-center">
    <div class="max-w-4xl mx-auto reveal">
      <h2
        class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight"
      >
        <?php echo isset($cta_title) ? $cta_title : 'Ready to Study or <br class="hidden md:block" /> Migrate Abroad?'; ?>
      </h2>
      <p
        class="text-primary/80 text-xl font-lora mb-10 max-w-2xl mx-auto"
      >
        <?php echo isset($cta_desc) ? $cta_desc : 'Get a free consultation and personalized action plan from our certified experts. Your global journey starts with a single step.'; ?>
      </p>

      <a
        href="contact"
        class="inline-flex items-center gap-3 bg-primary text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-[#0a1424] hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(2,6,23,0.3)] transition-all duration-300"
      >
        Book Free Consultation <i class="ph-bold ph-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
