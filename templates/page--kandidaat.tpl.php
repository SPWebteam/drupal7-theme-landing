<?php
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
    <div class="content">
      <?php print render($page['content']); ?>
    </div>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  </div>


  <footer class="layout-site-footer site-footer" id="site-footer">
    <?php print render($page['footer']); ?>
  </footer>


</div>
