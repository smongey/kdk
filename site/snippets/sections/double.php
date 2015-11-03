
	<div class="full two">
		<?php 
			$img1 = $pages->find('projects')->image($section->image1());
			$xs1 = thumb($img1, array('width' => 130,'height' => 170, 'crop' => true));
			$s1 = thumb($img1, array('width' => 260,'height' => 345, 'crop' => true));
			$m1 = thumb($img1, array('width' => 330,'height' => 450, 'crop' => true));
			$l1 = thumb($img1, array('width' => 660,'height' => 890, 'crop' => true));
			$xl1 = thumb($img1, array('width' => 760,'height' => 1013, 'crop' => true));
			$xxl1 = thumb($img1, array('width' => 1500,'height' => 2000, 'crop' => true));

			$img2 = $pages->find('projects')->image($section->image2());
			$xs2 = thumb($img2, array('width' => 130,'height' => 170, 'crop' => true));
			$s2 = thumb($img2, array('width' => 260,'height' => 345, 'crop' => true));
			$m2 = thumb($img2, array('width' => 330,'height' => 450, 'crop' => true));
			$l2 = thumb($img2, array('width' => 660,'height' => 890, 'crop' => true));
			$xl2 = thumb($img2, array('width' => 760,'height' => 1013, 'crop' => true));
			$xxl2 = thumb($img2, array('width' => 1500,'height' => 2000, 'crop' => true));
		?>
		
		<div class="half view">
			<picture>
				<source media="(max-width: 480px)" srcset="<?php echo $xs1->url() ?> 1x, <?php echo $s1->url() ?> 2x">
				<source media="(max-width: 800px)" srcset="<?php echo $m1->url() ?> 1x, <?php echo $l1->url() ?> 2x">
				<source media="(max-width: 1200px)" srcset="<?php echo $xl1->url() ?>, <?php echo $xxl1->url() ?> 2x">
				<img data-slide="3" src="<?php echo $xl1->url() ?>" alt="<?php echo $section->caption() ?>">
			</picture>
		</div>
		
		<div class="half view">
			<picture>
				<source media="(max-width: 480px)" srcset="<?php echo $xs2->url() ?> 1x, <?php echo $s2->url() ?> 2x">
				<source media="(max-width: 800px)" srcset="<?php echo $m2->url() ?> 1x, <?php echo $l2->url() ?> 2x">
				<source media="(max-width: 1200px)" srcset="<?php echo $xl2->url() ?>, <?php echo $xxl2->url() ?> 2x">
				<img data-slide="3" src="<?php echo $xl2->url() ?>" alt="<?php echo $section->caption() ?>">
			</picture>
		</div>
	</div>