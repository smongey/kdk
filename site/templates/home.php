<?php snippet('header'); ?>

<section class="home out">

	<?php foreach($pages->find('projects')->builder()->toStructure() as $section): ?>

		<?php snippet( snippet('sections/' . $section->_fieldset(), array('section' => $section)) ); ?>
	
	<?php endforeach ?>

</section>

<div class="slideshow out">
	<ul>
<?php foreach($pages->find('projects')->builder()->toStructure() as $section): ?>
	<?php if ($section->_fieldset() == "single" ) { ?>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image())->url() ?>" alt="<?php echo $section->caption() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption() ?></p>
		</li>
	<?php } elseif ($section->_fieldset() == "double" ) { ?>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image1())->url() ?>" alt="<?php echo $section->caption1() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption1() ?></p>
		</li>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image2())->url() ?>" alt="<?php echo $section->caption2() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption2() ?></p>
		</li>
	<?php } else { ?>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image1())->url() ?>" alt="<?php echo $section->caption1() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption1() ?></p>
		</li>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image2())->url() ?>" alt="<?php echo $section->caption2() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption2() ?></p>
		</li>
		<li>
			<picture>
				<img class="ss" src="assets/images/bg.png" data-src="<?php echo $pages->find('projects')->image($section->image3())->url() ?>" alt="<?php echo $section->caption3() ?>">
		    </picture>
			<p class="caption"><?php echo $section->caption3() ?></p>
		</li>
	<?php } ?>
<?php endforeach ?>
	</ul>
</div>

    </div> <!-- end wrap -->


<?php snippet('footer') ?>