<?php
?>
<div class="layout-page page-wrapper">


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


</div>
