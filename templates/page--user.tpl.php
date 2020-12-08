<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
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
    <?php if ($main_menu): ?>      
      <nav class="site-navigation">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu primary-menu')), 'heading' => '')); ?>
      </nav>
      <div class="menu-toggle"><button><span class="text">Menu</span></button></div>
    <?php endif; ?>
  </header>


  <div class="layout-primary-content primary-content">
    <a id="primary-content"></a>
    <div class="content">
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php if ($title): ?>
      <header class="content-header">
        <?php print render($title_prefix); ?>
        <h1 class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      </header>
      <?php endif; ?>      
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php print render($page['content']); ?>       
      </div>
  </div>


  <footer class="layout-site-footer site-footer" id="site-footer">
    <?php print render($page['footer']); ?>
  </footer>


</div>
