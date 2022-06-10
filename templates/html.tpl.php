<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single Drupal page.
 */ ?>
<!doctype html>
<html class="no-js" lang="nl-NL">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <?php
    /**
     * Only load tracking html elements, such as facebook 'pixel', when user consent is given.
     * When caching is enabled for the site, use the cookie_aware_page_cache module to cache variants
     * Depending on the value of the sp_tc (tracking consent) cookie
     */
    if(isset($_COOKIE['sp_tc']) && $_COOKIE['sp_tc'] == 2) :?>
    <!-- Only load tracking when consent is given -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WNRCRS6');</script>
    <!-- End Google Tag Manager -->
    <?php endif; /* End tracking consent */ ?>

  </head>
  <body class="layout-body <?php print $classes; ?>" <?php print $attributes;?>>
    <?php
    /**
     * Only load tracking html elements, such as facebook 'pixel', when user consent is given.
     * When caching is enabled for the site, use the cookie_aware_page_cache module to cache variants
     * Depending on the value of the sp_tc (tracking consent) cookie
     */
    if(isset($_COOKIE['sp_tc']) && $_COOKIE['sp_tc'] == 2) :?>
    <!-- Only load tracking when consent is given -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNRCRS6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; /* End tracking consent */ ?>
    <!--[if lt IE 9]>
      <p class="browser-upgrade">Je gebruikt <strong>een hele oude</strong> browser. Op <a href="http://browsehappy.com/">browsehappy.com</a> vind je veilige en moderne browsers.</p>
    <![endif]-->
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

  </body>
</html>
