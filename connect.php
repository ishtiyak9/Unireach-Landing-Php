<!DOCTYPE html>
<html lang="en" class="h-full">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Connect | Unireach Consultancy</title>
    <meta name="description" content="Connect with Unireach Consultancy through WhatsApp, consultation booking, website, and social channels." />
    <link rel="preconnect" href="https://cdn.tailwindcss.com" />
    <link rel="preconnect" href="https://unpkg.com" />
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#020617",
              accent: "#D1A751",
              "accent-dark": "#9e6d28",
              "text-light": "#F4F1EC",
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

      html, body {
        min-height: 100%;
      }

      body {
        background:
          radial-gradient(circle at top left, rgba(209, 167, 81, 0.16), transparent 30%),
          linear-gradient(135deg, #020617 0%, #031327 100%);
        color: #f4f1ec;
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
      }

      .bio-shell {
        max-width: 480px;
        width: 100%;
      }

      .bio-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(209, 167, 81, 0.2);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
      }

      .link-btn {
        min-height: 64px;
        touch-action: manipulation;
        transition: all 0.2s ease;
      }

      .link-btn:active {
        transform: scale(0.98);
      }

      .text-accent-gradient {
        background: linear-gradient(135deg, #d1a751 0%, #f8efd9 50%, #9e6d28 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
    </style>
  </head>
  <body class="min-h-screen px-3 py-4 text-text-light selection:bg-accent selection:text-primary sm:px-4 sm:py-6">
    <div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center px-1 py-2 sm:px-4">
      <div class="bio-shell">
        <div class="bio-card rounded-[28px] p-4 sm:p-6">
          <div class="text-center">
            <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-accent/30 bg-accent/10 shadow-lg shadow-accent/10">
              <img src="/images/logo.png" alt="Unireach logo" class="h-10 w-auto object-contain brightness-0 invert" />
            </div>

            <p class="mb-2 text-[10px] font-semibold uppercase tracking-[0.35em] text-accent">Official Link In Bio</p>
            <h1 class="text-2xl font-black tracking-[-0.02em] text-white sm:text-3xl">
              Unireach <span class="text-accent-gradient">Consultancy</span>
            </h1>
            <p class="mx-auto mt-2 max-w-xs text-sm leading-7 text-text-light/70">
              Premium guidance for study abroad, visa support, and migration success.
            </p>
          </div>

          <div class="mt-5 flex flex-col gap-3">
            <a href="https://wa.me/8801898796091" target="_blank" class="link-btn flex items-center justify-between rounded-2xl bg-accent px-4 py-3 text-left text-primary shadow-lg shadow-accent/20">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-whatsapp-logo text-xl"></i>
                <div>
                  <div class="font-semibold">Chat on WhatsApp</div>
                  <div class="text-xs opacity-80">Fast replies for urgent questions</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg"></i>
            </a>

            <a href="/contact" class="link-btn flex items-center justify-between rounded-2xl border border-accent/25 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-calendar-check text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Book a Free Consultation</div>
                  <div class="text-xs text-text-light/60">Personalized guidance for your journey</div>
                </div>
              </div>
              <i class="ph ph-caret-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://maps.app.goo.gl/BL54SGWyuViJconD6" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-map-pin text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Visit Our Office</div>
                  <div class="text-xs text-text-light/60">Find us on Google Maps</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://unireachbd.com" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-browser text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Visit Our Website</div>
                  <div class="text-xs text-text-light/60">Explore services and insights</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://www.facebook.com/unireachbd" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-facebook-logo text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Follow on Facebook</div>
                  <div class="text-xs text-text-light/60">Updates, stories, and success moments</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://www.linkedin.com/company/unireachbd" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-linkedin-logo text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Connect on LinkedIn</div>
                  <div class="text-xs text-text-light/60">Professional updates and partnerships</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://forms.swisscare.com/#/isie?icd=3179" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <div class="flex h-8 w-8 items-center justify-center rounded-xl bg-accent/10 text-accent">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path d="M12 21s-6.75-4.35-8.85-8.07A5.31 5.31 0 0 1 7.29 4.5a5.23 5.23 0 0 1 4.71 2.76A5.23 5.23 0 0 1 16.71 4.5a5.31 5.31 0 0 1 4.14 8.43C18.75 16.65 12 21 12 21Z" />
                  </svg>
                </div>
                <div>
                  <div class="font-semibold">Health Insurance</div>
                  <div class="text-xs text-text-light/60">Explore insurance support and protection plans</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>

            <a href="https://www.youtube.com/@unireachbd" target="_blank" class="link-btn flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-left text-white">
              <div class="flex items-center gap-3">
                <i class="ph-fill ph-youtube-logo text-xl text-accent"></i>
                <div>
                  <div class="font-semibold">Watch on YouTube</div>
                  <div class="text-xs text-text-light/60">Guidance videos and expert insights</div>
                </div>
              </div>
              <i class="ph ph-arrow-up-right text-lg text-text-light/50"></i>
            </a>
          </div>

          <div class="mt-6 rounded-2xl border border-accent/20 bg-accent/10 p-3 text-center text-sm text-text-light/80">
            Trusted by ambitious students and families for premium support and clear next steps.
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
