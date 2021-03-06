<?php

/**
 * @file field.tpl.php
 * Requires javascript inside main.js to create a slideshow
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<?php if (!$label_hidden): ?>
	    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
	<?php endif; ?>
	<div class="field <?php print $field_name_css ?>"<?php print $content_attributes; ?>>
		<?php foreach ($items as $delta => $item): ?>
			<div class="field-item slide-item"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
		<?php endforeach; ?>
	</div>
</div>
 