<!DOCTYPE html>
<html <?php language_attributes();  ?>>

<head>
  <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title> 
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <!-- Primary Meta Tags -->
<meta name="title" content="Modra nit - Agencija je za marketing specijalizirana za vidljivost EU projekata.">
<meta name="description" content="Modra nit - Agencija je za marketing specijalizirana za vidljivost EU projekata.">
<meta name="keywords" content="poduzetništvo, društvo, razvoj, slap, udruga, socijalno podruzetnistvo">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://slap.hr/">
<meta property="og:title" content="Modra nit - Agencija je za marketing specijalizirana za vidljivost EU projekata.">
<meta property="og:description" content="Modra nit - Agencija je za marketing specijalizirana za vidljivost EU projekata.">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header px-1-5 py-1 d-flex">
      <a href="<?php echo site_url() ?>" class="logo">
        <h1 class="screen-reader-text">modra nit</h1>
        <img src="<?php echo get_theme_file_uri('/assets/assets/icons/modranit-logo.svg') ?>" alt="logo" />
      </a>
      <nav
        class="nav d-grid"
        id="nav-menu"
        aria-hidden="true"
        aria-label="Main navigation"
      >
        <ul class="nav__list d-grid">
          <li class="nav__item flex-row-center">
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/icons/home-icon.svg') ?>"
              class="nav__icon"
              alt="home icon"
            /><a href="<?php echo site_url() ?>" class="nav__link <?php if(is_front_page()) echo 'curr-page'; ?>">naslovna</a>
          </li>
          <li class="nav__item flex-row-center">
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/icons/services-icon.svg') ?>"
              class="nav__icon"
              alt="services icon"
            /><a href="<?php echo site_url('/usluge') ?>" class="nav__link <?php if(is_page('usluge')) echo 'curr-page'; ?>">usluge</a>
          </li>
          <li class="nav__item flex-row-center">
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/icons/news-icon.svg') ?>"
              class="nav__icon"
              alt="contact icon"
            /><a href="<?php echo site_url('blog') ?>" class="nav__link <?php if(is_blog()) echo 'curr-page'; ?>">vijesti</a>
          </li>
          <li class="nav__item flex-row-center">
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/icons/contact-icon.svg') ?>"
              class="nav__icon"
              alt="contact icon"
            /><a href="<?php echo site_url('kontakt') ?>" class="nav__link <?php if(is_page('kontakt')) echo 'curr-page'; ?>">kontakt</a>
          </li>
          <li class="nav__item flex-row-center">
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/icons/projects-icon.svg') ?>"
              class="nav__icon"
              alt="projects icon"
            /><a href="<?php echo site_url('/projekt-krugovi') ?>" class="nav__link <?php if(is_page('projekt-krugovi')) echo 'curr-page'; ?>">projekt krugovi</a>
          </li>
        </ul>
      </nav>
      <button class="search-desktop search-btn" aria-label="search">
        <img
          src="<?php echo get_theme_file_uri('/assets/assets/icons/search.svg') ?>"
          alt="search"
          aria-label="search button"
        />
      </button>
      <div class="search-and-ham-mobile flex-row-center">
        <button class="search-mobile search-btn" aria-label="search">
          <img
            src="<?php echo get_theme_file_uri('/assets/assets/icons/search.svg') ?>"
            alt="search"
            aria-label="search button"
          />
        </button>
        <button
          class="ham grid-center"
          aria-label="Toggle navigation menu"
          aria-expanded="false"
          aria-controls="nav-menu"
        >
          <div class="ham__line"></div>
          <div class="ham__line"></div>
          <div class="ham__line"></div>
        </button>
      </div>
    </header>