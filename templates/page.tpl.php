<?php
// needs a fix, $base_url is null
// $current_url = $base_url . $base_path;
// if($title){
//   $current_title = $title;  
// }

?>
<div class="layout-page page-wrapper">


  <header class="layout-site-header site-header" id="site-header">
    <div class="site-branding">
    <?php if ($logo): ?>
      <div class="site-logo">
        <a href="<?php print($logo_url);?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <?php include("inc/logo.tpl.php"); ?>
        </a>
      </div>
      <?php endif; ?>
      <?php if ($site_name): ?>
        <h1 class="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span>
            <?php print $site_name; ?></span>
          </a>
        </h1>
    <?php endif; ?>
    </div>
    <?php print render($page['header']); ?>
    <?php if ($main_menu): ?>      
      <div class="menu-toggle"><button><span class="text">Menu</span></button></div>
    <?php endif; ?>
  </header>


  <div class="layout-primary-content primary-content">
    <?php print $messages; ?>
    <div class="content"><?php print render($page['content']); ?></div>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  </div>


  <footer class="layout-site-footer site-footer" id="site-footer">
    <?php print render($page['footer']); ?>
  </footer>


  <?php if ($current_url): ?>
  <div class="social-footer">
    <div class="social-bar">
      <div id="social-follow">
        <h2>Volg de SP</h2>
        <ul>
          <li style="margin-bottom:1px;"><a class="btn-social colored facebook" target="_blank" href="https://www.facebook.com/SocialistischePartij">Facebook</a> <a class="btn-social colored twitter" target="_blank" href="https://twitter.com/SPnl">Twitter</a> <a class="btn-social colored instagram" target="_blank" href="https://www.instagram.com/SocialistischePartij">Instagram</a></li>
          <li><a class="btn" target="_blank" href="https://doemee.sp.nl?ref=<?php print $current_url;?>">Doe mee</a></li>
          <li><a class="btn" target="_blank" href="https://wordlid.sp.nl?ref=<?php print $current_url;?>">Word lid</a></li>
        </ul>
      </div>
      <?php if ($current_url and $current_title): ?>
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
      <?php endif; ?>
      <div>
        <button class="btn-invert small" id="follow">Volg de SP</button>
        <?php if ($current_url and $current_title): ?>
        <button class="btn-invert small" id="share">Pagina delen</button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
