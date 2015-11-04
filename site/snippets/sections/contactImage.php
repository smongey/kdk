		<div class="half image">
		<?php 
			$img = $page->image($section->image());
			$xs = thumb($page->image($section->image()), array('width' => 130,'height' => 170, 'crop' => true));
			$s = thumb($page->image($section->image()), array('width' => 260,'height' => 345, 'crop' => true));
			$m = thumb($page->image($section->image()), array('width' => 330,'height' => 450, 'crop' => true));
			$l = thumb($page->image($section->image()), array('width' => 660,'height' => 890, 'crop' => true));
			$xl = thumb($page->image($section->image()), array('width' => 760,'height' => 1000, 'crop' => true));
			$xxl = thumb($page->image($section->image()), array('width' => 1500,'height' => 2000, 'crop' => true)); 
		?>
		    <picture>
		      <source media="(max-width: 480px)" srcset="<?php echo $xs->url() ?> 1x, <?php echo $s->url() ?> 2x">
		      <source media="(max-width: 800px)" srcset="<?php echo $m->url() ?> 1x, <?php echo $l->url() ?> 2x">
		      <source media="(max-width: 1200px)" srcset="<?php echo $xl->url() ?>, <?php echo $xxl->url() ?> 2x">
		      <img src="<?php echo $xl->url() ?>" alt="<?php echo $section->caption() ?>">
		    </picture>
		    <p class="caption">
			<?php echo $section->caption() ?>
		  	</p>
		</div>  