<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
?>
<article class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($content['field_banner']); ?>
  <section class="article-content"<?php print $content_attributes; ?>>
    <div class="layout-content-container">
      <div class="positie-en-rol">
        <div class="positie">
          <?php print render($content['field_positie']); ?>
        </div>
        <div class="rol">
          <?php print render($content['field_rol']); ?>
        </div>
      </div>
      <header>
        <h1 class="title" <?php print $title_attributes; ?>>
          <?php print $title; ?>
        </h1>
      </header>
      <?php print render($content['field_intro']); ?>
    </div>
    <div>
      <?php print render($content['field_paragraphs']); ?>
    </div>
    <div class="layout-content-container">
      <div class="persoon">
        <div class="portret">
          <?php print render($content['field_afbeelding']); ?>
        </div>
        <div class="info">
          <div class="naam"><?php print $title; ?></div>
          <?php print render($content['field_huidige_rol']); ?>
          <div class="inline"><?php print render($content['field_woonplaats']); ?>-<?php print render($content['field_provincie']); ?>-<?php print render($content['field_leeftijd']); ?> jaar</div>
        </div>
      </div>
    </div>
  </section>
  <?php print render($content['links']); ?>
</article>
