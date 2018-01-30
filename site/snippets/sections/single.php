

	<div class="full view">
		<?php 
		$img = $pages->find('projects')->image($section->image());
		$s = thumb($img, array('width' => 280,'height' => 170, 'crop' => true));
		$m = thumb($img, array('width' => 700,'height' => 410, 'crop' => true));
		$l = thumb($img, array('width' => 1300,'height' => 750, 'crop' => true));
		$xl = thumb($img, array('width' => 2600,'height' => 1500, 'crop' => true));
		?>
		
 		<picture>
			<source media="(max-width: 480px)" data-srcset="<?php echo $s->url(); ?> 1x, <?php echo $m->url(); ?> 2x">
			<source media="(max-width: 800px)" data-srcset="<?php echo $m->url(); ?> 1x, <?php echo $l->url(); ?> 2x">
			<source media="(max-width: 1200px)" data-srcset="<?php echo $l->url(); ?>, <?php echo $xl->url(); ?> 2x">
			<img data-slide="0" src="assets/images/loading.gif" class="lazyload" data-src="<?php echo $l->url(); ?>" alt="<?php echo $section->caption(); ?>">
		</picture>
		
	</div>