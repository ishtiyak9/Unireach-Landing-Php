<?php
// Page-specific variables
$page_title = 'Contact Us | Start Your Global Journey';
$meta_description = 'Reach out to Unireach Consultancy. Our experts are ready to assist you with international education, migration, and visas. Book your free consultation today.';
$nav_type = 'transparent';

// Include the head
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>

<main id="main-content">
  <!-- CONTACT HERO -->
  <section class="relative pt-36 pb-16 bg-primary overflow-hidden border-b border-white/5">
    <div class="absolute inset-0 bg-grid-pattern opacity-10 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent/5 to-transparent z-0 pointer-events-none"></div>
    <div class="container-max relative z-10 text-center reveal">
      <span class="section-tag inline-block mb-4">Contact Us</span>
      <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
        Let's Plan Your
        <span class="text-accent italic font-lora">Journey</span>
      </h1>
      <p class="text-text-light/70 text-lg max-w-2xl mx-auto font-lora">
        Our global education and migration experts are ready to assist you. Visit our office or reach out via phone or email to start your free consultation.
      </p>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section class="section-py relative z-10 bg-primary">
    <div class="container-max relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-start">
        <!-- Contact Information -->
        <div class="reveal">
          <div class="space-y-6">
            <!-- Contact Locations -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <?php 
              $offices = [
                ["Bangladesh Office", "571 Begum Rokeya Avenue, Dhaka 1216"],
                ["Italy Office", "Via Pola 11, 20124 Milan, Italy"]
              ];
              foreach($offices as $office): ?>
              <div class="flex flex-col p-5 rounded-2xl border border-border-dark bg-[#0a1424] hover:border-accent/40 transition-colors">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                    <i class="ph-fill ph-map-pin text-xl"></i>
                  </div>
                  <h4 class="text-white font-bold text-base"><?php echo $office[0]; ?></h4>
                </div>
                <p class="text-text-light/60 text-sm leading-relaxed"><?php echo $office[1]; ?></p>
              </div>
              <?php endforeach; ?>
            </div>

            <!-- Contact Item: Phone -->
            <div class="flex items-start gap-5 p-5 rounded-2xl border border-border-dark bg-[#0a1424] hover:border-accent/40 transition-colors">
              <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                <i class="ph-fill ph-phone-call text-2xl"></i>
              </div>
              <div>
                <h4 class="text-white font-bold text-lg mb-1">Direct Lines</h4>
                <div class="flex flex-col gap-1">
                  <a href="tel:+8801898796091" class="text-text-light/60 text-sm hover:text-accent transition-colors">+8801898796091</a>
                  <!-- <a href="tel:+393668257736" class="text-text-light/60 text-sm hover:text-accent transition-colors">+393668257736</a> -->
                </div>
              </div>
            </div>

            <!-- Contact Item: Email & Hours -->
            <div class="flex items-start gap-5 p-5 rounded-2xl border border-border-dark bg-[#0a1424] hover:border-accent/40 transition-colors">
              <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                <i class="ph-fill ph-envelope-open text-2xl"></i>
              </div>
              <div class="w-full flex justify-between items-center pr-2">
                <div>
                  <h4 class="text-white font-bold text-lg mb-1">Email Us</h4>
                  <a href="mailto:info@unireachbd.com" class="text-text-light/60 text-sm hover:text-accent transition-colors">info@unireachbd.com</a>
                </div>
                <div class="text-right border-l border-border-dark pl-5">
                  <span class="block text-xs uppercase tracking-wider text-text-light/40 mb-1 font-bold">Office Hours</span>
                  <span class="block text-sm text-text-light/80 font-semibold">Sat - Thu</span>
                  <span class="block text-xs text-text-light/60">10:00 AM - 7:00 PM</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Socials & WhatsApp -->
          <div class="flex flex-wrap items-center gap-6 mt-10">
            <a href="https://wa.me/8801898796091" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366]/10 text-[#25D366] px-6 py-3 rounded-full font-bold hover:bg-[#25D366] hover:text-white transition-all duration-300 border border-[#25D366]/20">
              <i class="ph-fill ph-whatsapp text-xl"></i> Chat on WhatsApp
            </a>

            <div class="flex items-center gap-3">
              <a href="https://www.facebook.com/unireachbd" target="_blank" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-accent hover:border-accent transition-colors">
                <i class="ph-fill ph-facebook-logo text-lg"></i>
              </a>
              <a href="https://www.instagram.com/unireachbd/" target="_blank" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-accent hover:border-accent transition-colors">
                <i class="ph-fill ph-instagram-logo text-lg"></i>
              </a>
              <a href="#" class="w-10 h-10 rounded-full border border-border-dark flex items-center justify-center text-text-light/60 hover:text-accent hover:border-accent transition-colors">
                <i class="ph-fill ph-linkedin-logo text-lg"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Map Container -->
        <div class="relative reveal reveal-right h-[600px]">
          <div class="absolute -inset-4 bg-gradient-to-tr from-accent/20 to-transparent rounded-3xl blur-2xl z-0"></div>
          <div class="relative z-10 w-full h-full rounded-3xl overflow-hidden border border-border-dark shadow-2xl bg-[#040a15] p-2">
            <div class="w-full h-full rounded-2xl overflow-hidden relative">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.58833167416!2d90.3728299!3d23.797669499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c700532a6935%3A0x958a56f3b605ea00!2sUnireach%20Consultancy!5e0!3m2!1sen!2sbd!4v1778358716584!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="absolute inset-0 border-2 border-white/5 rounded-2xl pointer-events-none mix-blend-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
