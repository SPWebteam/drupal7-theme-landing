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
  <?php if(isset($_COOKIE['sp_tc']) && $_COOKIE['sp_tc'] == 2) :?>
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '454884558037853');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=454884558037853&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
  <?php endif; ?>

  </head>
  <body class="layout-body <?php print $classes; ?>" <?php print $attributes;?>>
    <!--[if lt IE 9]>
      <p class="browser-upgrade">Je gebruikt <strong>een hele oude</strong> browser. Op <a href="http://browsehappy.com/">browsehappy.com</a> vind je veilige en moderne browsers.</p>
    <![endif]-->
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <div class="social-footer">
      <div class="social-bar">
        <div id="social-follow">
          <h2>Volg de SP</h2>
          <ul>
            <li style="margin-bottom:1px;"><a class="btn-social colored facebook" target="_blank" href="https://www.facebook.com/SocialistischePartij">Facebook</a> <a class="btn-social colored twitter" target="_blank" href="https://twitter.com/SPnl">Twitter</a> <a class="btn-social colored instagram" target="_blank" href="https://www.instagram.com/SocialistischePartij">Instagram</a></li>
            <li><a class="btn" target="_blank" href="https://doemee.sp.nl?ref=tk2021">Doe mee</a></li>
            <li><a class="btn" target="_blank" href="https://wordlid.sp.nl?ref=tk2021">Word lid</a></li>
          </ul>
        </div>
        <div id="social-share">
          <h2>Deze pagina delen</h2>
          <ul>
            <li><a class="btn-social colored facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $current_url;?>">Facebook</a></li>
            <li><a class="btn-social colored twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?php print $current_url;?>">Twitter</a></li>
            <li><a class="btn-social colored whatsapp" target="_blank" href="https://wa.me/?text=<?php print urlencode($current_url);?>%20<?php print urlencode($current_title);?>">Whatsapp</a></li>
            <li><a class="btn-social colored linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $current_url;?>&title=<?php print urlencode($current_title);?>&summary=&source=">LinkedIn</a></li>
            <li><a class="btn-social colored email" target="_blank" href="mailto:?subject=<?php print htmlentities($current_title);?>&body=<?php print $current_url;?>">Email</a></li>
          </ul>
        </div>
        <div><button class="btn-invert small" id="follow">Volg de SP</button> <button class="btn-invert small" id="share">Pagina delen</button></div>
      </div>
    </div>
  </body>
</html>
