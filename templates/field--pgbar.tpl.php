<?php

/**
 * @file field.tpl.php
 * Removed label for pgbar field.
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="field <?php print $field_name_css ?>"<?php print $content_attributes; ?>>
		<?php foreach ($items as $delta => $item): ?>
			<div class="field-item"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
		<?php endforeach; ?>
	</div>
</div>
 