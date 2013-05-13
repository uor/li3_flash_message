<?php
/**
 * Copy this file to `app/views/elements` to customize the output.
 */
?>
<div <?php echo !empty($class) ? 'class="alert alert-' . $class . '"' : ''; ?>>
	<?=$message; ?>
</div>