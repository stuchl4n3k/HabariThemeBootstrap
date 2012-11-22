<li id="<?php echo $block->_area; ?>-block-<?php echo $block->_area_index; ?>" class="well <?php echo $block->css_classes; ?>">
	<?php if ( $block->_show_title ) : ?>
	<h3 class="block-title"><?php echo $block->title; ?></h3>
	<?php endif; ?>
	<div class="block-content"><?php echo $content; ?></div>
</li>
