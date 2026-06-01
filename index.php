<?php
// Page-specific variables
$page_title = 'Unireach Consultancy | Expert Global Education & Migration Consultants';
$meta_description = 'Unireach Consultancy: Your trusted partner for international education, student visas, and skilled migration. Architecting your global future.';
$nav_type = 'transparent';

// Include the head
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>

<main id="main-content">
  <!-- HERO SECTION -->
  <section id="hero" class="relative min-h-screen flex items-center overflow-hidden hero-dot-pattern">
    <div class="container-max w-full grid lg:grid-cols-12 gap-12 items-center relative z-10 pt-36 pb-20">
      <!-- Text Content (60%) -->
      <div class="lg:col-span-7 flex flex-col gap-8 reveal">
        <!-- Trust Badges -->
        <div class="flex flex-wrap items-center gap-3 text-sm font-medium text-accent">
          <span class="flex items-center gap-1.5 bg-accent/10 px-3 py-1.5 rounded-full border border-accent/20">
            <i class="ph-fill ph-certificate"></i> Authorized University Partners
          </span>
          <span class="flex items-center gap-1.5 bg-accent/10 px-3 py-1.5 rounded-full border border-accent/20">
            <i class="ph-fill ph-medal"></i> Top Rated Consultancy
          </span>
        </div>

        <div class="flex flex-col gap-4">
          <h1 class="font-display text-4xl md:text-5xl lg:text-6xl/tight font-bold text-white">
            Your Gateway to <span class="text-accent-gradient">Global Education</span> & New Beginnings
          </h1>
          <p class="text-lg md:text-xl text-text-light/80 max-w-2xl font-lora">
            We simplify complex migration and university admission processes, turning your international dreams into reality with expert guidance.
          </p>
        </div>

        <!-- Dual CTAs -->
        <div class="flex flex-wrap items-center gap-4 mt-2">
          <a href="contact" class="btn-accent px-8 py-4 text-base flex items-center gap-2">
            Start Your Journey <i class="ph-bold ph-arrow-right"></i>
          </a>
          <a href="#video-story" class="btn-ghost px-8 py-4 text-base flex items-center gap-2 group">
            <i class="ph-fill ph-play-circle text-xl group-hover:text-accent transition-colors"></i>
            Watch Our Story
          </a>
        </div>
      </div>

      <!-- Image/Graphic (40%) -->
      <div class="lg:col-span-5 relative reveal-right">
        <div class="relative w-full aspect-[4/5] rounded-2xl overflow-hidden border border-border-dark shadow-[0_0_40px_rgba(209,167,81,0.15)] group">
          <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent z-10 pointer-events-none"></div>
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Unireach Consultancy Education Consultants helping students with university admissions" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

          <!-- Floating Highlight Card -->
          <div class="absolute bottom-6 left-6 right-6 bg-card-dark/85 backdrop-blur-md border border-border-dark p-4 rounded-xl z-20 flex items-center gap-4 transition-transform duration-300 group-hover:-translate-y-2">
            <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent text-2xl flex-shrink-0">
              <i class="ph-fill ph-airplane-tilt"></i>
            </div>
            <div>
              <h4 class="font-bold text-white leading-tight">Next Intake Open</h4>
              <p class="text-sm text-text-light/70 mt-0.5">Apply for Fall Semester</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <a href="#stats" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-text-light/50 hover:text-accent transition-colors z-20 animate-bounce">
      <span class="text-xs uppercase tracking-widest font-semibold">Scroll</span>
      <i class="ph ph-caret-down text-xl"></i>
    </a>
  </section>

  <!-- UNIVERSITY PARTNERS SECTION -->
  <section class="py-16 bg-primary border-b border-border-dark relative z-10 overflow-hidden">
    <div class="container-max">
      <div class="text-center mb-10 reveal">
        <span class="text-[10px] uppercase tracking-[0.3em] text-accent font-bold mb-2 block">Our Trusted Network</span>
        <h3 class="text-white/60 text-sm font-medium">Partnering with 200+ prestigious universities and institutions worldwide</h3>
      </div>
      <div class="partners-container reveal">
        <div class="partners-track py-4">
          <!-- Partners Marquee -->
          <?php 
          $universities = ["University of Oxford", "University of Cambridge", "ETH Zurich", "University of Munich", "University of Melbourne", "Australian National University", "University of Amsterdam", "Sorbonne University", "University of Bologna", "Heidelberg University", "Imperial College London", "University of Sydney", "University of Auckland", "KU Leuven", "Lund University", "University of Vienna", "University of Copenhagen", "University of Helsinki", "University of Oslo", "Sapienza University of Rome", "University of Barcelona", "University of Lisbon", "Eötvös Loránd University", "University of Warsaw", "University of Tartu", "Vilnius University", "Trinity College Dublin", "Delft University of Technology", "Monash University", "University of Malta"];
          foreach(array_merge($universities, $universities) as $uni): ?>
            <span class="text-white/40 text-lg font-display uppercase tracking-widest px-8 border-r border-white/10"><?php echo $uni; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS STRIP SECTION -->
  <section id="stats" class="py-12 relative z-20">
    <div class="container-max">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 text-center divide-x-0 md:divide-x divide-border-dark">
        <div class="flex flex-col items-center gap-2 reveal reveal-delay-1">
          <div class="text-3xl text-accent/80 mb-1"><i class="ph-fill ph-graduation-cap"></i></div>
          <div class="stat-counter font-bold text-4xl" data-target="250" data-suffix="+">0</div>
          <p class="text-sm text-text-light/70 uppercase tracking-widest font-medium">Students Placed</p>
        </div>
        <div class="flex flex-col items-center gap-2 reveal reveal-delay-2">
          <div class="text-3xl text-accent/80 mb-1"><i class="ph-fill ph-globe-hemisphere-west"></i></div>
          <div class="stat-counter font-bold text-4xl" data-target="22" data-suffix="+">0</div>
          <p class="text-sm text-text-light/70 uppercase tracking-widest font-medium">Countries Covered</p>
        </div>
        <div class="flex flex-col items-center gap-2 reveal reveal-delay-3">
          <div class="text-3xl text-accent/80 mb-1"><i class="ph-fill ph-seal-check"></i></div>
          <div class="stat-counter font-bold text-4xl" data-target="83" data-suffix="%">0</div>
          <p class="text-sm text-text-light/70 uppercase tracking-widest font-medium">Visa Success Rate</p>
        </div>
        <div class="flex flex-col items-center gap-2 reveal reveal-delay-4">
          <div class="text-3xl text-accent/80 mb-1"><i class="ph-fill ph-star"></i></div>
          <div class="stat-counter font-bold text-4xl" data-target="4.9" data-decimal="true" data-suffix="">0.0</div>
          <p class="text-sm text-text-light/70 uppercase tracking-widest font-medium">Google Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="services" class="section-py relative z-10">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
      <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-accent/5 rounded-full blur-[100px]"></div>
    </div>
    <div class="container-max relative z-10">
      <div class="text-center max-w-2xl mx-auto mb-16 reveal">
        <span class="section-tag">Our Services</span>
        <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6 text-white">Comprehensive Solutions for Your Global Journey</h2>
        <p class="text-text-light/70 text-lg font-lora">From university selection to visa approval and beyond, our expert team provides tailored support at every step of your international transition.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service Items -->
        <?php 
        $services = [
          ["University Admissions", "ph-fill ph-student", "Expert counselling to help you choose the right course and university, ensuring your application stands out to admission committees."],
          ["Student Visa Processing", "ph-fill ph-books", "Hassle-free student visa assistance. We guide you through financial documentation, SOPs, and embassy interview preparation."],
          ["Skilled Migration & PR", "ph-fill ph-briefcase", "Navigate complex points-based systems with confidence. We handle skill assessments, expressions of interest, and permanent residency."],
          ["Family Reunification", "ph-fill ph-users-three", "Bring your loved ones closer. We specialize in spouse, parent, and dependent child visas with a focus on meticulous documentation."],
          ["Tourist & Business Visa", "ph-fill ph-airplane-in-flight", "Fast and reliable processing for short-term visits, whether for holidays, conferences, or exploring international business opportunities."],
          ["Document Attestation", "ph-fill ph-file-text", "Secure legalization and apostille services for educational and personal documents required by international embassies and institutions."]
        ];
        $delay = 1;
        foreach($services as $s): ?>
        <div class="card-dark p-8 group reveal reveal-delay-<?php echo $delay++; ?> flex flex-col h-full">
          <div class="service-icon mb-6"><i class="<?php echo $s[1]; ?> text-3xl text-accent"></i></div>
          <h3 class="text-xl font-bold mb-3 text-white"><?php echo $s[0]; ?></h3>
          <p class="text-text-light/70 text-sm leading-relaxed mb-8 flex-grow"><?php echo $s[2]; ?></p>
          <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-accent group-hover:text-accent-light transition-colors mt-auto w-fit">
            Learn More <i class="ph-bold ph-arrow-right transition-transform group-hover:translate-x-1"></i>
          </a>
        </div>
        <?php endforeach; ?>

        <!-- Featured Service -->
        <div class="card-dark p-8 group reveal reveal-delay-1 flex flex-col h-full lg:col-span-3 lg:flex-row lg:items-center lg:gap-8 bg-gradient-to-br from-[#0a1628] to-[#0f1c2f] border-accent/20">
          <div class="service-icon mb-6 lg:mb-0">
            <div class="w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center text-accent">
              <i class="ph-fill ph-briefcase-metal text-4xl"></i>
            </div>
          </div>
          <div class="flex-grow">
            <h3 class="text-2xl font-bold mb-3 text-white">Global Recruitment & Career Paths</h3>
            <p class="text-text-light/70 text-base leading-relaxed mb-4">We bridge the gap between South Asian talent and Schengen recruitment partners. Dedicated manpower supply for diverse professional sectors.</p>
            <a href="staffing" class="inline-flex items-center gap-2 text-sm font-semibold text-accent group-hover:text-accent-light transition-colors w-fit">
              Explore Careers <i class="ph-bold ph-arrow-right transition-transform group-hover:translate-x-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DESTINATIONS SECTION -->
  <section id="countries" class="section-py relative z-10 bg-[#040a15] border-y border-border-dark">
    <div class="container-max">
      <div class="text-center max-w-2xl mx-auto mb-16 reveal">
        <span class="section-tag">Explore Opportunities</span>
        <h2 class="font-display text-3xl md:text-4xl font-bold mt-4 mb-4 text-white">Global Destinations & Top Disciplines</h2>
        <p class="text-text-light/70 text-lg font-lora">Discover world-class education hubs and highly sought-after academic programs that align with your career goals.</p>
      </div>

      <!-- Countries Marquee -->
      <div class="mb-24 reveal reveal-delay-1">
        <h3 class="text-xl font-bold text-white mb-8 text-center">Top Study Destinations</h3>
        <div class="overflow-hidden relative w-full py-4 country-marquee-mask">
          <div class="countries-track">
            <?php 
            $countries = [
              ["Austria", "at"], ["Belgium", "be"], ["Bulgaria", "bg"], ["Croatia", "hr"], ["Cyprus", "cy"], 
              ["Denmark", "dk"], ["Estonia", "ee"], ["Finland", "fi"], ["France", "fr"], ["Germany", "de"], 
              ["Greece", "gr"], ["Hungary", "hu"], ["Italy", "it"], ["Lithuania", "lt"], ["Luxembourg", "lu"], 
              ["Malta", "mt"], ["Netherlands", "nl"], ["Norway", "no"], ["Poland", "pl"], ["Portugal", "pt"], 
              ["Romania", "ro"], ["Spain", "es"], ["Sweden", "se"], ["Switzerland", "ch"], ["Australia", "au"], 
              ["New Zealand", "nz"], ["United Kingdom", "gb"]
            ];
            foreach(array_merge($countries, $countries) as $c): ?>
            <div class="country-card flex items-center gap-3">
              <img src="https://flagcdn.com/w40/<?php echo $c[1]; ?>.png" alt="<?php echo $c[0]; ?>" class="w-8 rounded-sm shadow-sm" />
              <span class="font-semibold text-white whitespace-nowrap"><?php echo $c[0]; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Disciplines Grid -->
      <div class="reveal reveal-delay-2">
        <h3 class="text-xl font-bold text-white mb-8 text-center">Popular Academic Disciplines</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          <?php 
          $disciplines = [
            ["Engineering & Tech", "ph-fill ph-cpu"],
            ["Business & MBA", "ph-fill ph-chart-line-up"],
            ["Medicine & Health", "ph-fill ph-heartbeat"],
            ["Data Science & AI", "ph-fill ph-database"],
            ["Arts & Design", "ph-fill ph-palette"],
            ["Law & Public Policy", "ph-fill ph-scales"],
            ["Life Sciences", "ph-fill ph-microscope"],
            ["Architecture", "ph-fill ph-buildings"]
          ];
          foreach($disciplines as $d): ?>
          <div class="card-dark p-6 flex flex-col items-center text-center group cursor-pointer border-border-dark/50 hover:border-accent">
            <i class="<?php echo $d[1]; ?> text-3xl text-accent mb-3 group-hover:scale-110 transition-transform duration-300"></i>
            <h4 class="font-semibold text-white text-sm"><?php echo $d[0]; ?></h4>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SCHOLARSHIPS SECTION -->
  <section id="scholarships" class="section-py relative z-10 overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="container-max relative z-10">
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-16 reveal">
        <div class="max-w-2xl">
          <span class="section-tag">Financial Support</span>
          <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white leading-tight">
            Empowering Your Ambition with <br />
            <span class="text-accent-gradient italic font-lora">Scholarships & Grants</span>
          </h2>
          <p class="text-text-light/70 text-lg font-lora">We bridge the financial gap with expert guidance on securing merit-based scholarships, government grants, and institutional funding.</p>
        </div>
        <div class="hidden lg:block pb-2">
          <div class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-border-dark backdrop-blur-sm">
            <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent"><i class="ph-fill ph-hand-coins text-2xl"></i></div>
            <div>
              <div class="text-white font-bold text-lg">$2.4M+</div>
              <div class="text-text-light/50 text-[10px] uppercase tracking-widest font-semibold">Total Aid Secured</div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Scholarship Cards -->
        <?php 
        $scholarships = [
          ["Elite Excellence Scholarship", "ph-fill ph-student", "Merit Based", "Available for high-achieving students with a GPA above 3.8. Covers up to 100% tuition in top-tier UK & AU universities.", "Up to 100%", "Tuition Waiver"],
          ["Schengen Global Grants", "ph-fill ph-bank", "EU Government", "Grants for South Asian students targeting Germany, Italy, and Hungary. Includes stipends and housing support.", "€850 / mo", "Stipend + Housing"],
          ["Early Bird Waiver Program", "ph-fill ph-clock", "Early Admission", "Apply 6 months before intake for automatic fee reductions. Applicable for Canada and New Zealand institutions.", "15% - 25%", "Automatic Rebate"]
        ];
        foreach($scholarships as $index => $sch): ?>
        <div class="card-dark p-8 group reveal reveal-delay-<?php echo $index+1; ?> border-border-dark/50 hover:border-accent relative overflow-hidden">
          <div class="absolute -top-12 -right-12 w-24 h-24 bg-accent/10 rounded-full blur-2xl group-hover:bg-accent/20 transition-all"></div>
          <div class="flex justify-between items-start mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-500">
              <i class="<?php echo $sch[1]; ?> text-3xl"></i>
            </div>
            <span class="px-3 py-1 rounded-full bg-accent/10 text-accent text-[10px] font-bold uppercase tracking-widest border border-accent/20"><?php echo $sch[2]; ?></span>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4"><?php echo $sch[0]; ?></h3>
          <p class="text-text-light/60 text-sm leading-relaxed mb-8"><?php echo $sch[3]; ?></p>
          <div class="flex items-center justify-between pt-6 border-t border-border-dark mt-auto">
            <div>
              <div class="text-accent font-bold text-xl"><?php echo $sch[4]; ?></div>
              <div class="text-text-light/40 text-[10px] uppercase font-bold tracking-wider"><?php echo $sch[5]; ?></div>
            </div>
            <a href="contact" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-accent hover:text-primary transition-all">
              <i class="ph-bold ph-arrow-up-right"></i>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-16 reveal">
        <p class="text-text-light/50 text-sm mb-6">Want to check your specific eligibility for these scholarships?</p>
        <a href="contact" class="btn-accent px-10 py-4 flex items-center gap-2 mx-auto w-fit">
          Check My Eligibility <i class="ph-bold ph-seal-check text-xl"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- CAREER SECTION -->
  <section id="career" class="section-py relative z-10 overflow-hidden bg-primary">
    <div class="absolute inset-0 bg-grid-pattern opacity-5 pointer-events-none"></div>
    <div class="container-max relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal">
          <span class="section-tag">Global Recruitment</span>
          <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6 text-white">Bridging Talent with <span class="text-accent italic font-lora">Schengen</span> Opportunities</h2>
          <p class="text-text-light/70 text-lg mb-8 font-lora">Beyond education, Unireach serves as a specialized manpower provider, connecting skilled professionals from South Asia with prestigious recruitment partners across Schengen countries.</p>

          <div class="space-y-6 mb-10">
            <?php 
            $career_items = [
              ["Recruitment Partnerships", "ph-fill ph-handshake", "Direct links with established European employers and recruitment agencies for seamless job placement."],
              ["Career-Led Migration", "ph-fill ph-briefcase-metal", "Specialized Work Permit processing for skilled sectors including hospitality, tech, and healthcare."],
              ["Manpower Supply Solutions", "ph-fill ph-users-four", "Large-scale recruitment solutions for South Asian talent seeking professional growth in the Schengen zone."]
            ];
            foreach($career_items as $item): ?>
            <div class="flex items-start gap-4 p-4 rounded-xl border border-border-dark bg-[#0a1424]/50 hover:bg-[#0a1424] transition-colors group">
              <div class="w-12 h-12 rounded-lg bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-primary transition-all duration-300">
                <i class="<?php echo $item[1]; ?> text-2xl"></i>
              </div>
              <div>
                <h4 class="text-white font-bold text-lg mb-1"><?php echo $item[0]; ?></h4>
                <p class="text-text-light/60 text-sm"><?php echo $item[2]; ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <a href="staffing" class="inline-flex items-center gap-3 bg-accent text-primary px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg shadow-accent/10">
            Explore Career Paths <i class="ph-bold ph-arrow-right"></i>
          </a>
        </div>

        <div class="relative reveal reveal-right">
          <div class="absolute -inset-4 bg-accent/5 rounded-3xl blur-2xl z-0"></div>
          <div class="relative z-10 rounded-2xl overflow-hidden border border-border-dark shadow-2xl">
            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Professional recruitment" class="w-full h-auto object-cover grayscale hover:grayscale-0 transition-all duration-700 scale-105 hover:scale-100" />
            <div class="absolute bottom-6 left-6 right-6 p-6 bg-primary/80 backdrop-blur-md border border-white/10 rounded-xl">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <span class="block text-accent font-bold text-2xl">50+</span>
                  <span class="block text-text-light/60 text-xs uppercase tracking-wider">Hiring Partners</span>
                </div>
                <div class="border-l border-white/10 pl-4">
                  <span class="block text-accent font-bold text-2xl">12+</span>
                  <span class="block text-text-light/60 text-xs uppercase tracking-wider">Schengen States</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  <section id="process" class="section-py relative z-10 bg-primary">
    <div class="container-max">
      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <span class="section-tag">How It Works</span>
        <h2 class="font-display text-3xl md:text-4xl font-bold mt-4 mb-4 text-white">Our 6-Step Proven Process</h2>
        <p class="text-text-light/70 text-lg font-lora">A transparent, seamless journey from your very first consultation to your successful arrival abroad.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-y-16 md:gap-y-12 md:gap-x-8 lg:gap-x-4 relative">
        <?php 
        $steps = [
          ["Free Assessment", "Profile evaluation & course mapping."],
          ["University Selection", "Shortlisting the best-fit institutions."],
          ["Application & SOP", "Document prep and submission."],
          ["Offer Letter", "Securing unconditional admission."],
          ["Visa Processing", "Financials and visa application."],
          ["Pre-Departure", "Briefing and travel support."]
        ];
        foreach($steps as $i => $step): ?>
        <div class="process-step relative text-center px-2 reveal reveal-delay-<?php echo $i+1; ?>">
          <?php if($i < 5): ?>
          <div class="hidden lg:block absolute top-[28px] left-[50%] w-full h-[2px] bg-gradient-to-r from-accent/<?php echo ($i==0)?'100':'30'; ?> to-accent/30 z-0"></div>
          <div class="block md:hidden absolute top-[56px] left-[50%] -translate-x-1/2 w-[2px] h-[calc(100%+4rem)] bg-gradient-to-b from-accent to-transparent z-0"></div>
          <?php endif; ?>
          <div class="step-number mx-auto mb-5 relative z-10" <?php if($i>0 && $i<5) echo 'style="background: linear-gradient(135deg, #1e293b, var(--primary)); border: 2px solid var(--accent); color: var(--accent);"'; ?>><?php echo $i+1; ?></div>
          <h3 class="font-bold text-white mb-2 text-base"><?php echo $step[0]; ?></h3>
          <p class="text-text-light/60 text-sm leading-relaxed"><?php echo $step[1]; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ACADEMY SECTION -->
  <section id="academy" class="section-py relative z-10 bg-primary overflow-hidden">
    <div class="container-max">
      <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-5/12 reveal reveal-left">
          <div class="relative">
            <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-accent/40 rounded-tl-3xl"></div>
            <div class="absolute -bottom-4 -right-4 w-24 h-24 border-b-2 border-r-2 border-accent/40 rounded-br-3xl"></div>
            <div class="rounded-3xl overflow-hidden border border-border-dark shadow-2xl relative">
              <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Training Session" class="w-full h-auto grayscale hover:grayscale-0 transition-all duration-700" />
              <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-card-dark/80 backdrop-blur-md border border-accent/20">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent"><i class="ph-bold ph-trend-up text-2xl"></i></div>
                  <div>
                    <p class="text-white font-bold text-sm">98% Success Rate</p>
                    <p class="text-text-light/50 text-[10px] uppercase tracking-wider">Academy Alumni Admissions</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-7/12 reveal reveal-right">
          <span class="section-tag">Empowerment Ecosystem</span>
          <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white leading-tight">The Unireach <span class="text-accent italic font-lora">Academy</span></h2>
          <p class="text-text-light/70 text-lg font-lora mb-10 leading-relaxed">Beyond placement, we believe in empowerment. Our academy is a dedicated grooming ecosystem designed to ensure every candidate is ready to lead on the global stage.</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php 
            $academy_features = [
              ["Linguistic Mastery", "ph-fill ph-translate", "Intensive IELTS, OET, and PTE coaching delivered by certified examiners."],
              ["Global Readiness", "ph-fill ph-globe-hemisphere-west", "Workshops on Western academic integrity and cultural social integration."],
              ["Corporate Grooming", "ph-fill ph-tie", "Soft skills, interview confidence, and professional ethics for top-tier employers."],
              ["Alumni Mentorship", "ph-fill ph-users-four", "Direct access to successful seniors for real-world insights and peer support."]
            ];
            foreach($academy_features as $f): ?>
            <div class="p-6 rounded-2xl bg-card-dark/30 border border-border-dark hover:border-accent/30 transition-all group">
              <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-4 group-hover:bg-accent group-hover:text-primary transition-all"><i class="<?php echo $f[1]; ?> text-2xl"></i></div>
              <h4 class="text-white font-bold mb-2"><?php echo $f[0]; ?></h4>
              <p class="text-text-light/50 text-sm leading-relaxed"><?php echo $f[2]; ?></p>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-10 flex items-center gap-6">
            <a href="contact" class="btn-accent px-8 py-3 text-sm">Join the Academy</a>
            <a href="about" class="text-accent font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">Learn Our Methodology <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section id="testimonials" class="section-py relative z-10 bg-primary bg-grid-pattern">
    <div class="container-max relative z-10">
      <div class="text-center max-w-2xl mx-auto mb-16 reveal">
        <span class="section-tag">Client Reviews</span>
        <h2 class="font-display text-3xl md:text-4xl font-bold mt-4 mb-4 text-white">What Our Students Say</h2>
        <p class="text-text-light/70 text-lg font-lora">Real experiences from students who trusted Unireach to guide their international education journey.</p>
      </div>
      <div class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar gap-6 pb-12 reveal reveal-delay-1" style="scrollbar-width: none">
        <?php 
        $testimonials = [
          ["Ayesha S.", "AS", "gb", "University of Leeds", "Unireach made my dream of studying in the UK a reality. From university selection to the final visa interview, their support was incredibly professional."],
          ["Rahul K.", "RK", "ca", "Humber College", "The visa process for Canada seemed overwhelming, but the team handled everything flawlessly. I received my permit much faster than I expected!"],
          ["Maria N.", "MN", "au", "Monash University", "I highly recommend Unireach for honest and transparent immigration advice. They helped me map out my pathway to PR in Australia seamlessly."],
          ["Faisal A.", "FA", "de", "TU Munich", "Excellent consultants with deep knowledge of European universities. They guided me through the entire Germany blocked account process without any hiccups."]
        ];
        foreach($testimonials as $t): ?>
        <div class="snap-center min-w-[85vw] md:min-w-[400px] max-w-[450px] card-dark p-8 flex flex-col justify-between border border-border-dark/30 hover:border-accent/30 transition-colors">
          <div>
            <div class="flex gap-1 text-accent mb-6"><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i></div>
            <p class="text-text-light/90 font-lora italic text-lg leading-relaxed mb-8 relative z-10">
              <i class="ph-fill ph-quotes text-4xl text-white/5 absolute -top-4 -left-4 -z-10"></i>
              "<?php echo $t[4]; ?>"
            </p>
          </div>
          <div class="flex items-center gap-4 mt-auto">
            <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent font-bold text-lg border border-accent/20"><?php echo $t[1]; ?></div>
            <div>
              <h4 class="text-white font-bold"><?php echo $t[0]; ?></h4>
              <div class="flex items-center gap-2 text-text-light/60 text-sm mt-1">
                <img src="https://flagcdn.com/w20/<?php echo $t[2]; ?>.png" class="w-4 rounded-sm opacity-90" alt="<?php echo $t[2]; ?>" />
                <span><?php echo $t[3]; ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WHY US SECTION -->
  <section id="why-us" class="section-py relative z-10 bg-[#040a15] border-t border-border-dark overflow-hidden">
    <div class="container-max relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
        <div class="lg:col-span-7 reveal">
          <span class="section-tag">Why Choose Us</span>
          <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white leading-tight">Expert Guidance for Your <span class="text-accent-gradient">Global Ambitions</span></h2>
          <p class="text-text-light/70 text-lg font-lora mb-10 leading-relaxed max-w-2xl">We don't just process applications; we architect careers. Our dedicated team of experts ensures a smooth, transparent, and highly successful transition to your dream destination.</p>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
            <?php 
            $reasons = [
              ["Licensed Experts", "ph-fill ph-certificate", "Working with authorized representatives ensures complete compliance."],
              ["Tailored Pathways", "ph-fill ph-compass", "Course and university selection mapped exactly to your profile."],
              ["100% Documentation", "ph-fill ph-files", "Meticulous preparation of SOPs and visa applications."],
              ["Post-Arrival Help", "ph-fill ph-airplane-tilt", "Our support continues with accommodation and networking."]
            ];
            foreach($reasons as $r): ?>
            <div class="card-dark p-6 border border-border-dark/50 hover:border-accent/50 group transition-all duration-300 hover:-translate-y-1">
              <i class="<?php echo $r[1]; ?> text-3xl text-accent mb-4 block group-hover:scale-110 transition-transform origin-left"></i>
              <h4 class="text-white font-bold text-base mb-2"><?php echo $r[0]; ?></h4>
              <p class="text-text-light/60 text-sm"><?php echo $r[2]; ?></p>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="flex flex-wrap items-center gap-6">
            <a href="contact" class="btn-accent px-10 py-4 flex items-center gap-2">Talk to an Expert <i class="ph-bold ph-arrow-right"></i></a>
            <div class="flex items-center gap-3">
              <div class="flex -space-x-4">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" class="w-12 h-12 rounded-full border-2 border-[#040a15] object-cover" />
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" class="w-12 h-12 rounded-full border-2 border-[#040a15] object-cover" />
                <div class="w-12 h-12 rounded-full border-2 border-[#040a15] bg-accent text-primary flex items-center justify-center font-bold text-xs">+12k</div>
              </div>
              <div class="flex flex-col">
                <div class="flex text-accent text-sm"><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i></div>
                <span class="text-xs font-semibold text-text-light/60 uppercase tracking-wider mt-1">Trusted Students</span>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-5 relative reveal reveal-right hidden lg:block">
          <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl border border-white/5 ml-12">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Consultants Meeting" class="w-full h-[600px] object-cover scale-105 hover:scale-110 transition-transform duration-1000" />
          </div>
          <div class="absolute bottom-16 -left-16 bg-primary/95 backdrop-blur-xl border border-accent/30 text-white p-5 rounded-2xl shadow-2xl flex items-center gap-4 z-30 transform hover:-translate-y-2 transition-transform duration-300 group">
            <div class="w-14 h-14 bg-accent/20 text-accent rounded-full flex items-center justify-center group-hover:bg-accent group-hover:text-primary transition-colors"><i class="ph-fill ph-check-circle text-3xl"></i></div>
            <div>
              <div class="font-display font-bold text-3xl text-accent group-hover:text-white transition-colors">98%</div>
              <div class="text-xs font-bold opacity-80 uppercase tracking-widest text-text-light/70 mt-1">Visa Success</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section id="faq" class="section-py relative z-10 bg-[#040a15]">
    <div class="container-max">
      <div class="grid lg:grid-cols-12 gap-16">
        <div class="lg:col-span-5 reveal">
          <span class="section-tag">Got Questions?</span>
          <h2 class="font-display text-3xl md:text-5xl font-bold mt-4 mb-6 text-white leading-tight">Frequently Asked <span class="text-accent italic font-lora">Inquiries</span></h2>
          <p class="text-text-light/70 text-lg font-lora mb-8">We've compiled answers to the most common questions about studying abroad, visa processes, and migration paths to help you get started.</p>
          <div class="p-8 rounded-3xl border border-border-dark bg-gradient-to-br from-white/5 to-transparent backdrop-blur-sm">
            <h4 class="text-white font-bold text-xl mb-4">Still need help?</h4>
            <p class="text-text-light/60 text-sm mb-6">Our consultants are available for a one-on-one session to discuss your specific case.</p>
            <a href="contact" class="inline-flex items-center gap-2 text-accent font-bold hover:gap-3 transition-all">Contact our Experts <i class="ph-bold ph-arrow-right"></i></a>
          </div>
        </div>
        <div class="lg:col-span-7 reveal reveal-right">
          <div class="space-y-2">
            <?php 
            $faqs = [
              ["How long does the student visa process take?", "Process times vary by country. Typically, European student visas take 4-8 weeks, while Australia and UK can take 3-6 weeks. Start at least 4-6 months before intake."],
              ["Do I need to have an IELTS score before applying?", "Most universities require IELTS/PTE. However, some European universities offer waivers if your previous education was in English."],
              ["What are the job prospects after graduation in Schengen?", "Schengen countries offer post-study work permits (12-24 months). Our Global Recruitment wing actively connects graduates with hiring partners."],
              ["Does Unireach assist with scholarship applications?", "Yes! We help identify merit-based and need-based scholarships and guide you in drafting a compelling SOP."],
              ["How do I start my skilled migration process?", "The first step is a Skills Assessment. We evaluate your credentials against target country requirements to provide a clear roadmap."]
            ];
            foreach($faqs as $f): ?>
            <div class="faq-item">
              <button class="faq-trigger group">
                <span class="faq-title text-lg md:text-xl font-bold text-white transition-colors"><?php echo $f[0]; ?></span>
                <i class="ph ph-caret-down faq-icon text-accent text-xl"></i>
              </button>
              <div class="faq-content"><p class="faq-answer"><?php echo $f[1]; ?></p></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
  $cta_title = 'Ready to Study or <br class="hidden md:block" /> Migrate Abroad?';
  include 'includes/cta-banner.php'; 
  ?>
</main>

<?php include 'includes/footer.php'; ?>
