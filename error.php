<?php
$error_code = isset($error_code) ? $error_code : 500;
$error_title = isset($error_title) ? $error_title : ($error_code === 404 ? 'Page Not Found' : 'Oops! Something went wrong');
$error_message = isset($error_message) ? $error_message : 'We couldn’t find that page or an unexpected issue occurred. Please try again or contact us for help.';
$meta_description = 'Unireach Consultancy error page. Fast support and a polished recovery experience for any problem.';
$page_title = $error_code === 404 ? '404 - Page Not Found | Unireach Consultancy' : 'Error | Unireach Consultancy';
$nav_type = 'solid';
$body_class = 'min-h-screen';

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/navbar.php';
?>
<main id="main-content" class="relative min-h-screen overflow-hidden bg-[#020617] text-text-light">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(209,167,81,0.16),_transparent_30%),linear-gradient(180deg,_rgba(2,6,23,0.95)_0%,_rgba(2,6,23,0.98)_100%)] pointer-events-none"></div>
  <div class="container-max relative z-10 py-24 lg:py-32">
    <div class="grid gap-12 lg:grid-cols-12 items-center">
      <div class="lg:col-span-6">
        <span class="inline-flex items-center gap-3 rounded-full border border-accent/20 bg-accent/10 px-4 py-2 text-sm font-semibold uppercase tracking-[0.3em] text-accent mb-6">
          <i class="ph-fill ph-warning-circle"></i>
          Error <?php echo $error_code; ?>
        </span>

        <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold text-white leading-tight mb-6">
          <?php echo $error_title; ?>
        </h1>

        <p class="max-w-2xl text-lg text-text-light/80 leading-8 mb-10">
          <?php echo $error_message; ?>
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="./" class="btn-accent px-8 py-4 text-base flex items-center gap-2">
            Back to Home <i class="ph-bold ph-arrow-right"></i>
          </a>
          <a href="contact" class="btn-ghost px-8 py-4 text-base flex items-center gap-2 group">
            Contact Support <i class="ph-bold ph-chat-circle-dots"></i>
          </a>
        </div>

        <div class="mt-14 grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl border border-white/10 bg-[#0a1225] p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
            <p class="text-sm uppercase tracking-[0.3em] text-accent font-bold mb-3">Need immediate help?</p>
            <p class="text-text-light/70 leading-7">Reach out via WhatsApp or our contact page for fast, friendly support.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-[#0a1225] p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
            <p class="text-sm uppercase tracking-[0.3em] text-accent font-bold mb-3">Explore our services</p>
            <p class="text-text-light/70 leading-7">Return to our homepage to see immigration, study-abroad, and migration services crafted for your future.</p>
          </div>
        </div>
      </div>

      <div class="lg:col-span-6">
        <div class="relative overflow-hidden rounded-[36px] border border-white/10 bg-white/5 p-10 shadow-[0_40px_120px_rgba(0,0,0,0.3)]">
          <div class="absolute inset-0 bg-gradient-to-br from-accent/20 via-transparent to-transparent opacity-80"></div>
          <div class="relative flex flex-col gap-8">
            <div class="rounded-3xl bg-[#0b172f] border border-border-dark p-8">
              <p class="text-xs uppercase tracking-[0.35em] text-accent font-semibold mb-2">Recovery plan</p>
              <h2 class="text-2xl font-bold text-white mb-4">What you can do next</h2>
              <ul class="space-y-3 text-text-light/70 text-base">
                <li class="flex gap-3"><span class="text-accent">•</span> Check the URL and try again.</li>
                <li class="flex gap-3"><span class="text-accent">•</span> Visit the homepage for our latest services.</li>
                <li class="flex gap-3"><span class="text-accent">•</span> Use the contact page if you need personal guidance.</li>
              </ul>
            </div>
            <div class="rounded-3xl bg-[#0b172f] border border-border-dark p-8">
              <p class="text-xs uppercase tracking-[0.35em] text-accent font-semibold mb-2">Error details</p>
              <p class="text-text-light/60 text-sm leading-7">
                <?php echo isset($error_details) ? htmlspecialchars($error_details, ENT_QUOTES, 'UTF-8') : 'No additional details are available at this time.'; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
