<?php
// Page-specific variables
$page_title = 'Unireach Concierge | White-Glove Post-Arrival Excellence';
$meta_description = 'Experience a seamless transition to Europe. Our concierge services include housing placement, bank onboarding, and airport pick-up for a first-class arrival.';
$nav_type = 'transparent';

// Include the head
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>

<main id="main-content">
  <!-- LUXURY HERO -->
  <section class="relative min-h-[70vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent z-10"></div>
      <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover opacity-40" alt="Executive Travel" />
    </div>

    <div class="container-max relative z-20 pt-36 pb-20">
      <div class="max-w-4xl mx-auto text-center reveal">
        <span class="section-tag mb-6 inline-block">The White-Glove Standard</span>
        <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-8 leading-[1.1]">
          Beyond the Visa. <br />
          <span class="text-accent italic font-quote font-normal">Beyond the Border.</span>
        </h1>
        <p class="text-text-light/70 text-xl font-quote max-w-2xl mx-auto leading-relaxed">
          The Unireach Concierge is a specialized wing dedicated to your transition, ensuring that your first 48 hours in Europe are as prestigious as your ambitions.
        </p>
        <div class="mt-12 flex flex-col items-center gap-6">
          <div class="flex -space-x-4">
            <div class="w-12 h-12 rounded-full border-2 border-primary bg-accent/20 flex items-center justify-center text-accent"><i class="ph-fill ph-shield-check"></i></div>
            <div class="w-12 h-12 rounded-full border-2 border-primary bg-accent/20 flex items-center justify-center text-accent"><i class="ph-fill ph-airplane-landing"></i></div>
            <div class="w-12 h-12 rounded-full border-2 border-primary bg-accent/20 flex items-center justify-center text-accent"><i class="ph-fill ph-house-line"></i></div>
          </div>
          <span class="text-xs uppercase tracking-[0.3em] font-black text-accent/60">Comprehensive Transition Architecture</span>
        </div>
      </div>
    </div>
  </section>

  <!-- THE FOUR PILLARS OF ARRIVAL -->
  <section class="section-py bg-primary relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-accent/5 rounded-full blur-[150px] pointer-events-none"></div>
    
    <div class="container-max relative z-10">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
        
        <!-- Pillar 1: Cultural Grooming -->
        <div class="group p-10 rounded-[3rem] bg-card-dark border border-border-dark hover:border-accent transition-all duration-700 reveal">
          <div class="flex justify-between items-start mb-12">
            <div class="w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-500">
              <i class="ph-fill ph-translate text-4xl"></i>
            </div>
            <span class="text-[10px] font-black tracking-widest text-accent/40 uppercase">Phase 01: Pre-Departure</span>
          </div>
          <h3 class="text-3xl font-display font-bold text-white mb-6">Cultural & Social Mastery</h3>
          <p class="text-text-light/60 text-lg leading-relaxed font-quote mb-10 italic">
            "Before you land, you will lead." Our intensive cultural grooming workshops prepare you for European social norms, professional etiquette, and daily life integration.
          </p>
          <ul class="space-y-4">
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Western Academic Integrity Training</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> European Social Etiquette</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Daily Logistics & Public Transport Nav</li>
          </ul>
        </div>

        <!-- Pillar 2: Airport Reception -->
        <div class="group p-10 rounded-[3rem] bg-card-dark border border-border-dark hover:border-accent transition-all duration-700 reveal reveal-delay-1">
          <div class="flex justify-between items-start mb-12">
            <div class="w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-500">
              <i class="ph-fill ph-car text-4xl"></i>
            </div>
            <span class="text-[10px] font-black tracking-widest text-accent/40 uppercase">Phase 02: Arrival</span>
          </div>
          <h3 class="text-3xl font-display font-bold text-white mb-6">Chauffeur-Driven Welcome</h3>
          <p class="text-text-light/60 text-lg leading-relaxed font-quote mb-10 italic">
            Eliminate arrival friction. A Unireach representative will meet you at the gate, handle your luggage, and provide private transport directly to your accommodation.
          </p>
          <ul class="space-y-4">
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Priority Gate Reception</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> 24/7 Emergency Support Line</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Local Welcome Kit & SIM Activation</li>
          </ul>
        </div>

        <!-- Pillar 3: Housing Placement -->
        <div class="group p-10 rounded-[3rem] bg-card-dark border border-border-dark hover:border-accent transition-all duration-700 reveal">
          <div class="flex justify-between items-start mb-12">
            <div class="w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-500">
              <i class="ph-fill ph-buildings text-4xl"></i>
            </div>
            <span class="text-[10px] font-black tracking-widest text-accent/40 uppercase">Phase 03: Settlement</span>
          </div>
          <h3 class="text-3xl font-display font-bold text-white mb-6">Strategic Housing Selection</h3>
          <p class="text-text-light/60 text-lg leading-relaxed font-quote mb-10 italic">
            Avoid the uncertainty of local rental markets. We secure safe, verified, and university-proximate housing before you even board your flight.
          </p>
          <ul class="space-y-4">
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Verified Rental Agreements</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> City Center & Student Hub Locations</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Utility & Internet Pre-Setup</li>
          </ul>
        </div>

        <!-- Pillar 4: Financial Onboarding -->
        <div class="group p-10 rounded-[3rem] bg-card-dark border border-border-dark hover:border-accent transition-all duration-700 reveal reveal-delay-1">
          <div class="flex justify-between items-start mb-12">
            <div class="w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-500">
              <i class="ph-fill ph-bank text-4xl"></i>
            </div>
            <span class="text-[10px] font-black tracking-widest text-accent/40 uppercase">Phase 04: Integration</span>
          </div>
          <h3 class="text-3xl font-display font-bold text-white mb-6">Financial Mobility Setup</h3>
          <p class="text-text-light/60 text-lg leading-relaxed font-quote mb-10 italic">
            We fast-track your European banking and legal identity. From BSN registrations to card issuance, we handle the bureaucracy for you.
          </p>
          <ul class="space-y-4">
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> EU Bank Account Opening</li>
            <li class="ph-bold ph-check text-accent"></i> BSN / Tax Identity Appointments</li>
            <li class="flex items-center gap-3 text-sm text-text-light/80"><i class="ph-bold ph-check text-accent"></i> Health Insurance Activation</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="section-py relative overflow-hidden bg-[#040a16] border-y border-white/5">
    <div class="container-max text-center reveal">
      <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-8">Elevate Your <span class="text-accent italic font-quote">Transition</span></h2>
      <p class="text-text-light/60 text-xl max-w-2xl mx-auto mb-12 font-quote">
        Our Concierge services are exclusive to Unireach students and partners. Secure your white-glove arrival today.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-6">
        <a href="contact" class="btn-accent px-12 py-5 text-sm uppercase tracking-widest font-black">Request Concierge Pack</a>
        <a href="staffing" class="btn-ghost px-12 py-5 text-sm uppercase tracking-widest font-black">Enterprise Solutions</a>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
