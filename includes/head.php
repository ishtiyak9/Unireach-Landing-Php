<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once __DIR__ . '/error-handler.php';
    // Dynamic Canonical URL logic
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $canonical_url = isset($canonical_url) ? $canonical_url : $current_url;
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? $page_title : 'Unireach Consultancy | Expert Global Education & Migration Consultants'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Unireach Consultancy: Your trusted partner for international education, student visas, and skilled migration. Architecting your global future.'; ?>" />
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : 'global education, migration consultants, student visa, study abroad, skilled migration, PR consultancy, Unireach Consultancy, Bangladesh, Italy'; ?>" />
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Unireach Consultancy" />
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Unireach Consultancy | Expert Global Education & Migration Consultants'; ?>" />
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Architecting your global future. Specializing in international admissions, visa processing, and skilled migration.'; ?>" />
    <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : 'https://unireachbd.com/images/og-image.jpg'; ?>" />
    <meta property="og:url" content="<?php echo $canonical_url; ?>" />
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Unireach Consultancy | Expert Global Education & Migration Consultants'; ?>" />
    <meta name="twitter:description" content="<?php echo isset($meta_description) ? $meta_description : 'Architecting your global future.'; ?>" />
    <meta name="twitter:image" content="<?php echo isset($og_image) ? $og_image : 'https://unireachbd.com/images/og-image.jpg'; ?>" />
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />

    <?php if (!empty($preload_image)): ?>
      <link rel="preload" as="image" href="<?php echo htmlspecialchars($preload_image, ENT_QUOTES, 'UTF-8'); ?>" />
    <?php endif; ?>

    <link rel="preconnect" href="https://cdn.tailwindcss.com" />
    <link rel="preconnect" href="https://unpkg.com" />
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin />

    <!-- Robots -->
    <meta name="robots" content="<?php echo isset($meta_robots) ? $meta_robots : 'index, follow'; ?>" />

    <!-- Theme color for mobile browsers -->
    <meta name="theme-color" content="#020617" />

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Unireach Consultancy",
      "url": "https://unireachbd.com",
      "logo": "https://unireachbd.com/images/logo.png",
      "sameAs": [
        "https://www.facebook.com/unireachbd",
        "https://www.instagram.com/unireachbd/"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+8801898796091",
        "contactType": "customer service",
        "areaServed": ["BD", "IT"],
        "availableLanguage": ["en", "bn", "it"]
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
      "name": "<?php echo isset($page_title) ? addslashes($page_title) : 'Unireach Consultancy'; ?>",
      "description": "<?php echo isset($meta_description) ? addslashes($meta_description) : 'Unireach Consultancy: Your trusted partner.'; ?>",
      "inLanguage": "en-US",
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "<?php echo isset($og_image) ? $og_image : 'https://unireachbd.com/images/og-image.jpg'; ?>"
      }
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Phosphor Icons -->
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Tailwind Config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#020617",
              secondary: "#F4F5F7",
              accent: "#D1A751",
              "accent-dark": "#b8873a",
              "accent-light": "#e8c07a",
              "text-dark": "#0F1C2F",
              "text-light": "#EFEBE7",
              alert: "#B55B42",
              "card-dark": "#0a1628",
              "border-dark": "rgba(209,167,81,0.15)",
            },
            fontFamily: {
              sans: ["Inter", "sans-serif"],
              display: ["Playfair Display", "serif"],
              quote: ["Lora", "serif"],
              outfit: ["Outfit", "sans-serif"],
            },
          },
        },
      };
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="main.css" />
    
    <?php if (isset($extra_styles)) echo $extra_styles; ?>
</head>
<body class="bg-primary text-text-light antialiased <?php echo isset($body_class) ? $body_class : ''; ?>">
    <!-- Skip to main content -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
