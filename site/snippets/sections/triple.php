	<div class="full three">

		<?php 
			$img1 = $pages->find('projects')->image($section->image1());
			$s1 = thumb($img1, array('width' => 320,'height' => 430, 'crop' => true));
			$m1 = thumb($img1, array('width' => 480,'height' => 640, 'crop' => true));

			$img2 = $pages->find('projects')->image($section->image2());
			$s2 = thumb($img2, array('width' => 320,'height' => 430, 'crop' => true));
			$m2 = thumb($img2, array('width' => 480,'height' => 640, 'crop' => true));

			$img3 = $pages->find('projects')->image($section->image3());
			$s3 = thumb($img3, array('width' => 320,'height' => 430, 'crop' => true));
			$m3 = thumb($img3, array('width' => 480,'height' => 640, 'crop' => true));	
		?>

		<div class="third view">
            <picture>
              <!-- <source media="(max-width: 480px)" srcset="<?php echo $s1->url() ?> 1x, <?php echo $m1->url() ?> 2x">
              <source media="(max-width: 1200px)" srcset="<?php echo $m1->url() ?>"> -->
              <img data-slide="0" src="assets/images/bg.png" data-src="<?php echo $m1->url() ?>" alt="<?php echo $section->caption1() ?>">
            </picture>
		</div>
		
		<div class="third view">
            <picture>
              <!-- <source media="(max-width: 480px)" srcset="<?php echo $s2->url() ?> 1x, <?php echo $m2->url() ?> 2x">
              <source media="(max-width: 1200px)" srcset="<?php echo $m2->url() ?>"> -->
              <img data-slide="0" src="assets/images/bg.png" data-src="<?php echo $m2->url() ?>" alt="<?php echo $section->caption2() ?>">
            </picture>
		</div>
		
		<div class="third view">
            <picture>
              <!-- <source media="(max-width: 480px)" srcset="<?php echo $s3->url() ?> 1x, <?php echo $m3->url() ?> 2x">
              <source media="(max-width: 1200px)" srcset="<?php echo $m3->url() ?>"> -->
              <img data-slide="0" src="assets/images/bg.png" data-src="<?php echo $m3->url() ?>" alt="<?php echo $section->caption3() ?>">
            </picture>
		</div>

	</div>