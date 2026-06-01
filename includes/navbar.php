<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Header & Navbar -->
<header
  id="navbar"
  data-nav-type="<?php echo isset($nav_type) ? $nav_type : 'transparent'; ?>"
  class="fixed w-full z-50 flex flex-col transition-all duration-300 <?php echo (isset($nav_type) && $nav_type == 'solid') ? 'is-solid' : 'nav-transparent'; ?>"
>
  <div class="w-full py-4 transition-all duration-300" id="main-nav-inner">
    <div class="container-max flex items-center justify-between">
      <!-- Logo -->
      <a
        href="./"
        class="flex items-center gap-3 group relative z-10"
      >
        <img
          id="nav-logo"
          src="images/logo.png"
          alt="Unireach Logo"
          class="h-10 md:h-12 w-auto object-contain brightness-0 invert transition-all duration-500 group-hover:scale-105"
        />
      </a>

      <nav class="hidden lg:flex items-center gap-10">
        <a
          href="about"
          class="nav-link text-sm font-bold tracking-widest uppercase <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"
          >About</a
        >
        <a
          href="./#services"
          class="nav-link text-sm font-bold tracking-widest uppercase"
          >Services</a
        >
        <a
          href="staffing"
          class="nav-link text-sm font-bold tracking-widest uppercase <?php echo ($current_page == 'staffing.php') ? 'active' : ''; ?>"
          >Staffing</a
        >
        <a
          href="concierge"
          class="nav-link text-sm font-bold tracking-widest uppercase <?php echo ($current_page == 'concierge.php') ? 'active' : ''; ?>"
          >Concierge</a
        >
        <a
          href="./#academy"
          class="nav-link text-sm font-bold tracking-widest uppercase"
          >UniAcademy</a
        >
        <a
          href="contact"
          class="btn-accent px-6 py-2.5 text-xs font-bold tracking-[0.2em] uppercase <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"
          >Contact</a
        >
      </nav>

      <!-- Mobile Toggle -->
      <button
        id="mobile-menu-btn"
        class="hamburger lg:hidden relative z-50 w-10 h-10 flex flex-col justify-center items-center gap-1.5 focus:outline-none"
        aria-label="Toggle Menu"
      >
        <span class="w-6 h-0.5 bg-accent rounded-full transition-all duration-300"></span>
        <span class="w-6 h-0.5 bg-accent rounded-full transition-all duration-300"></span>
        <span class="w-6 h-0.5 bg-accent rounded-full transition-all duration-300"></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div
  id="mobile-menu"
  class="fixed inset-0 z-[48] bg-primary/98 backdrop-blur-2xl flex flex-col items-center justify-center"
>
  <div class="flex flex-col items-center gap-8">
    <a
      href="about"
      class="mobile-link text-3xl font-display font-bold <?php echo ($current_page == 'about.php') ? 'text-accent' : 'text-white'; ?> hover:text-accent transition-colors"
      >About</a
    >
    <a
      href="./#services"
      class="mobile-link text-3xl font-display font-bold text-white hover:text-accent transition-colors"
      >Services</a
    >
    <a
      href="staffing"
      class="mobile-link text-3xl font-display font-bold <?php echo ($current_page == 'staffing.php') ? 'text-accent' : 'text-white'; ?> hover:text-accent transition-colors"
      >Staffing</a
    >
    <a
      href="concierge"
      class="mobile-link text-3xl font-display font-bold <?php echo ($current_page == 'concierge.php') ? 'text-accent' : 'text-white'; ?> hover:text-accent transition-colors"
      >Concierge</a
    >
    <a
      href="./#academy"
      class="mobile-link text-3xl font-display font-bold text-white hover:text-accent transition-colors"
      >UniAcademy</a
    >
    <a
      href="contact"
      class="btn-accent px-10 py-4 text-sm font-bold uppercase tracking-widest mt-4"
      >Contact</a
    >
  </div>
</div>
