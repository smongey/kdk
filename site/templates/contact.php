
<?php snippet('header') ?>

	<section class="contact out">
		<div class="full">

			<?php foreach($page->builder()->toStructure() as $section): ?>
				<?php snippet('sections/' . $section->_fieldset(), array('section' => $section)); ?>
			<?php endforeach ?>

		</div>
	</section>

<?php snippet('footer') ?>
