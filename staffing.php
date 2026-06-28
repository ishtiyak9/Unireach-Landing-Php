<?php
// Page-specific variables
$page_title = 'Enterprise Staffing | Global Talent & European Precision';
$meta_description = 'Unireach Consultancy: Engineering scalable workforce pipelines connecting South Asian professionals with leading European staffing agencies.';
$nav_type = 'transparent';

// Include the head
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>

<main id="main-content">
  <!-- HERO SECTION -->
  <section id="staffing-hero" class="relative overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1600" width="1600" height="1000" loading="eager" decoding="async" class="w-full h-full object-cover object-center opacity-30" alt="Corporate Office" />
      <div class="absolute inset-0 bg-gradient-to-br from-primary/95 via-primary/80 to-primary/60"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(209,167,81,0.18),_transparent_35%)]"></div>
    </div>

    <div class="container-max relative z-10 py-28 lg:py-36">
      <div class="grid items-center gap-12 lg:grid-cols-12">
        <div class="lg:col-span-7">
          <span class="section-tag">Enterprise Staffing</span>
          <h1 class="font-display text-4xl md:text-5xl xl:text-6xl font-bold text-white leading-tight mt-6">
            Global Talent. <br />
            <span class="text-accent italic font-quote">European Precision.</span>
          </h1>
          <p class="text-text-light/70 mt-6 max-w-3xl text-lg md:text-xl leading-relaxed font-quote">
            We architect exclusive workforce pipelines to place South Asian professionals into high-impact European roles with speed, compliance, and cultural alignment.
          </p>

          <div class="mt-10 flex flex-col sm:flex-row gap-4">
            <a href="#pipeline" class="btn-accent px-10 py-4 text-sm font-bold tracking-widest uppercase">View Pipeline Strategy</a>
            <a href="contact" class="btn-ghost px-10 py-4 text-sm font-bold tracking-widest uppercase">Request Partnership</a>
          </div>

          <div class="mt-12 grid gap-4 sm:grid-cols-2">
            <div class="rounded-3xl border border-accent/15 bg-card-dark/80 p-6 shadow-[0_30px_80px_rgba(0,0,0,0.18)]">
              <span class="text-sm uppercase tracking-[0.35em] text-accent font-bold">Trusted Pipeline</span>
              <p class="mt-4 text-white text-3xl font-bold">15,000+</p>
              <p class="mt-2 text-text-light/60 text-sm">pre-vetted talent and ready-to-deploy candidates.</p>
            </div>
            <div class="rounded-3xl border border-accent/15 bg-card-dark/80 p-6 shadow-[0_30px_80px_rgba(0,0,0,0.18)]">
              <span class="text-sm uppercase tracking-[0.35em] text-accent font-bold">Guaranteed Stability</span>
              <p class="mt-4 text-white text-3xl font-bold">90%</p>
              <p class="mt-2 text-text-light/60 text-sm">candidate retention in the first 90 days.</p>
            </div>
          </div>
        </div>

        <div class="lg:col-span-5 relative hidden lg:block">
          <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-br from-[#111827]/90 via-[#0b1321]/80 to-transparent blur-2xl"></div>
          <div class="relative overflow-hidden rounded-[2.5rem] border border-white/10 bg-[#07101f]/90 shadow-[0_40px_120px_rgba(0,0,0,0.35)]">
            <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-accent/30 to-transparent"></div>
            <div class="p-8">
              <span class="text-accent text-sm uppercase tracking-[0.35em] font-bold">Premium Workforce</span>
              <h2 class="mt-4 text-3xl font-bold text-white">European-grade teams with local execution.</h2>
              <p class="mt-4 text-text-light/60 text-sm leading-relaxed">From visa compliance to onboarding readiness, our candidates arrive job-ready and aligned with your hiring standards.</p>
            </div>
            <div class="grid gap-4 p-8 border-t border-white/10">
              <div class="rounded-3xl bg-[#081421] p-5">
                <p class="text-text-light/60 text-sm">Average candidate onboarding</p>
                <p class="mt-2 text-white text-3xl font-bold">21 Days</p>
              </div>
              <div class="rounded-3xl bg-[#081421] p-5">
                <p class="text-text-light/60 text-sm">GDPR and EU compliance</p>
                <p class="mt-2 text-white text-3xl font-bold">100%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS STRIP -->
  <section id="stats" class="border-y border-border-dark bg-[#040d1e] py-16">
    <div class="container-max">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
        <?php 
        $stats = [
          ["15000", "+", "Active Talent Pool"],
          ["90", "%", "90-Day Retention"],
          ["21", " Days", "Average Lead Time"],
          ["100", "%", "GDPR Compliant"]
        ];
        foreach($stats as $index => $stat): ?>
        <div class="reveal reveal-delay-<?php echo $index; ?>">
          <div class="stat-counter font-display font-black text-4xl text-accent mb-2" data-target="<?php echo $stat[0]; ?>" data-suffix="<?php echo $stat[1]; ?>">0</div>
          <p class="text-[11px] font-bold uppercase tracking-widest text-text-light/40"><?php echo $stat[2]; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PIPELINE STRATEGY SECTION -->
  <section id="pipeline" class="section-py relative bg-primary overflow-hidden">
    <div class="container-max">
      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <span class="section-tag">Our Methodology</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white">The Workforce <span class="text-accent italic font-quote">Pipeline</span></h2>
        <p class="text-text-light/60 text-lg">A rigorous 5-stage transition model designed to minimize risk and maximize integration for European employers.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-5 gap-4 relative">
        <div class="hidden md:block absolute top-12 left-0 w-full h-[2px] bg-gradient-to-r from-accent/50 via-accent/20 to-accent/50 z-0"></div>
        
        <?php 
        $pipeline_steps = [
          ["01", "Deep Sourcing", "Tapping into the top 10% of South Asian technical & skilled talent.", true],
          ["02", "Vetting Rigor", "Multi-stage technical and behavioral screening via our proprietary portal.", false],
          ["03", "The Academy", "Intensive linguistic & cultural grooming for seamless EU integration.", false],
          ["04", "Compliance", "End-to-end work visa processing and GDPR-compliant data transfer.", false],
          ["05", "Deployment", "On-ground support and housing assistance to ensure long-term retention.", true]
        ];
        foreach($pipeline_steps as $index => $step): ?>
        <div class="relative z-10 reveal reveal-delay-<?php echo $index; ?> text-center">
          <div class="w-16 h-16 rounded-full <?php echo $step[3] ? 'bg-accent text-primary shadow-lg shadow-accent/20' : 'bg-card-dark text-accent border-accent/30'; ?> flex items-center justify-center font-black text-xl mb-6 mx-auto border-4 border-primary"><?php echo $step[0]; ?></div>
          <h3 class="text-white font-bold mb-3"><?php echo $step[1]; ?></h3>
          <p class="text-text-light/50 text-[13px] leading-relaxed"><?php echo $step[2]; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- STRATEGIC TALENT STREAMS -->
  <section id="sectors" class="section-py bg-[#040a16] relative overflow-hidden">
    <div class="container-max">
      <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-8 reveal">
        <div class="max-w-2xl">
          <span class="section-tag">High-Demand Sectors</span>
          <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 text-white">Targeting the EU <br /><span class="text-accent italic font-quote">Workforce Gap</span></h2>
        </div>
        <p class="text-text-light/50 max-w-sm pb-2">We provide specialized talent funnels for the sectors currently facing critical shortages in the European labor market.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php 
        $sectors = [
          ["ph-fill ph-truck", "Logistics & Supply Chain", "Supporting the Dutch 'Gateway' with skilled warehouse managers, coordinators, and logistics technicians.", "High Shortage"],
          ["ph-fill ph-wrench", "Technical & Engineering", "Supplying specialized mechanics, CNC operators, and renewable energy technicians for EU industry.", "Critical Demand"],
          ["ph-fill ph-first-aid", "Healthcare & Care", "Language-vetted (OET/IELTS) nursing professionals and caregivers groomed for European standards.", "Top Priority"],
          ["ph-fill ph-cpu", "Digital & Tech", "Connecting EU tech hubs with high-level software developers, data scientists, and AI specialists.", "Strategic Pool"]
        ];
        foreach($sectors as $index => $sector): ?>
        <div class="group p-8 rounded-3xl bg-card-dark border border-border-dark hover:border-accent transition-all duration-500 reveal reveal-delay-<?php echo $index; ?>">
          <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent mb-6 group-hover:bg-accent group-hover:text-primary transition-all">
            <i class="<?php echo $sector[0]; ?> text-3xl"></i>
          </div>
          <h3 class="text-white font-bold text-xl mb-4 tracking-tight"><?php echo $sector[1]; ?></h3>
          <p class="text-text-light/50 text-sm leading-relaxed mb-6"><?php echo $sector[2]; ?></p>
          <div class="text-[10px] font-black tracking-widest text-accent uppercase py-1 px-3 bg-accent/10 inline-block rounded-full"><?php echo $sector[3]; ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- DE-RISKING SECTION -->
  <section class="section-py bg-[#060e1f] border-y border-border-dark">
    <div class="container-max">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <div class="lg:col-span-7 bg-card-dark rounded-3xl border border-border-dark p-12 relative overflow-hidden group reveal">
          <div class="absolute -top-24 -right-24 w-64 h-64 bg-accent/5 rounded-full blur-[100px] group-hover:bg-accent/10 transition-all"></div>
          <div class="relative z-10">
            <span class="text-accent text-[11px] font-black tracking-widest uppercase mb-4 block">The Unireach Promise</span>
            <h2 class="text-white text-4xl font-bold mb-6 leading-tight">90-Day Candidate <br /><span class="text-accent italic font-quote">Stability Guarantee</span></h2>
            <p class="text-text-light/60 text-lg mb-8 leading-relaxed max-w-lg">
              We de-risk your recruitment. If a candidate is not the right fit or leaves within the first 90 days, we provide a pre-vetted replacement at zero additional sourcing cost.
            </p>
            <ul class="space-y-4 mb-10 text-text-light/80">
              <li class="flex items-center gap-3"><i class="ph-bold ph-check text-accent"></i> Pre-vetted backup pool</li>
              <li class="flex items-center gap-3"><i class="ph-bold ph-check text-accent"></i> Zero replacement fee</li>
              <li class="flex items-center gap-3"><i class="ph-bold ph-check text-accent"></i> Retention focused grooming</li>
            </ul>
            <a href="contact" class="btn-accent px-8 py-3 text-sm font-bold tracking-widest uppercase">Become a Partner</a>
          </div>
        </div>

        <div class="lg:col-span-5 flex flex-col gap-6">
          <div class="flex-1 bg-card-dark rounded-3xl border border-border-dark p-8 group reveal">
            <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-6 group-hover:bg-accent group-hover:text-primary transition-all">
              <i class="ph-fill ph-lock-key text-2xl"></i>
            </div>
            <h3 class="text-white font-bold text-xl mb-3">GDPR Compliant Data</h3>
            <p class="text-text-light/50 text-sm">Every candidate record is handled through our secure, 256-bit encrypted pipeline to meet EU data standards.</p>
          </div>
          <div class="flex-1 bg-card-dark rounded-3xl border border-border-dark p-8 group reveal">
            <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-6 group-hover:bg-accent group-hover:text-primary transition-all">
              <i class="ph-fill ph-house-line text-2xl"></i>
            </div>
            <h3 class="text-white font-bold text-xl mb-3">Logistics Support</h3>
            <p class="text-text-light/50 text-sm">We handle the "arrival friction" including housing and local legal registration to ensure a happy first day.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WIN-WIN PARTNERSHIP MODELS -->
  <section class="section-py bg-primary relative">
    <div class="container-max">
      <div class="text-center max-w-3xl mx-auto mb-20 reveal">
        <span class="section-tag">Collaborative Prosperity</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white">How We Grow <br /><span class="text-accent italic font-quote">Together</span></h2>
        <p class="text-text-light/60 text-lg">We don't just supply talent; we provide a full-stack partnership framework designed to scale your agency's operations.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <?php 
        $models = [
          ["White-Label Supply", "Your Brand, Our Pipeline.", "Utilize our entire South Asian infrastructure as your own offshore sourcing desk. We provide co-branded candidate profiles and dashboards.", ["Co-branded Portals", "Exclusive Talent Rights"], false],
          ["Direct Managed Pipeline", "Seamless Integration.", "We integrate with your CRM to provide a live feed of vetted candidates, handling all documentation, visa filing, and pre-arrival cultural grooming.", ["CRM Integration", "End-to-End Compliance"], true],
          ["Last-Mile Execution", "Zero-Friction Arrival.", "Focus on client acquisition while we handle the arrival logistics in Europe—including housing, BSN registration, and bank account setups.", ["Housing Assistance", "Local Legal Onboarding"], false]
        ];
        foreach($models as $index => $model): ?>
        <div class="p-10 rounded-3xl <?php echo $model[4] ? 'bg-card-dark border-2 border-accent/30 hover:border-accent' : 'bg-card-dark/30 border border-border-dark hover:bg-card-dark'; ?> transition-all relative reveal reveal-delay-<?php echo $index; ?>">
          <?php if($model[4]): ?>
          <div class="absolute top-0 right-10 -translate-y-1/2 bg-accent text-primary px-4 py-1 rounded-full text-[10px] font-black tracking-widest uppercase">Most Preferred</div>
          <?php endif; ?>
          <h4 class="text-accent font-black tracking-[0.2em] uppercase text-xs mb-6"><?php echo $model[0]; ?></h4>
          <p class="text-white text-xl font-bold mb-6 tracking-tight"><?php echo $model[1]; ?></p>
          <p class="text-text-light/50 text-sm leading-relaxed mb-8"><?php echo $model[2]; ?></p>
          <ul class="space-y-3">
            <?php foreach($model[3] as $feat): ?>
            <li class="flex items-center gap-3 text-xs text-text-light/70"><i class="ph-bold ph-check text-accent"></i> <?php echo $feat; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PARTNER CTA -->
  <section class="section-py bg-primary relative overflow-hidden">
    <div class="container-max text-center reveal">
      <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-8 text-center">Ready to Scale Your <br /><span class="text-accent italic font-quote">Workforce?</span></h2>
      <p class="text-text-light/60 text-lg mb-12 max-w-2xl mx-auto leading-relaxed text-center">
        Contact our Global Partnership desk today to receive our full corporate proposal and talent pipeline projections for Q3 & Q4.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-6">
        <a href="contact" class="btn-accent px-12 py-5 text-sm uppercase tracking-widest font-black">Request Partnership</a>
        <a href="mailto:partners@unireachbd.com" class="btn-ghost px-12 py-5 text-sm uppercase tracking-widest font-black">Email Business Desk</a>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
