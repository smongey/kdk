<?php snippet('header') ?>

    <section class="home out">

  
    <?php // snippet('projects') ?>


	<?php 
	//$img = $page->image($page->aboutpic3());

	// $small = thumb($page->image($page->aboutpic3()), array('width' => 480,'height' => 480, 'crop' => true));
	// $medium = thumb($page->image($page->aboutpic3()), array('width' => 900,'height' => 900, 'crop' => true)); 
	?>

	<?php foreach($pages->find('projects')->builder()->toStructure() as $section): ?>

		<?php snippet( snippet('sections/' . $section->_fieldset(), array('section' => $section)) ); ?>
	
	<?php endforeach ?>

</section>

<div class="slideshow out">
	<!-- <span class="preloader">
		
	</span> -->
	<ul>
		<li>
			<picture>
				<!-- <source media="(max-width: 480px)" srcset="http://placehold.it/320x430 1x, http://placehold.it/480x640 2x">
				<source media="(max-width: 1200px)" srcset="http://placehold.it/480x640">
				 --><img src="http://placekitten.com/420/600" alt="Some image">
	        </picture>
			<p class="caption">One</p>
		</li>
		<li>
			<picture>
				<!-- <source media="(max-width: 480px)" srcset="http://placehold.it/320x430 1x, http://placehold.it/480x640 2x">
				<source media="(max-width: 1200px)" srcset="http://placehold.it/480x640">
				 --><img src="http://placekitten.com/600/420" alt="Some image">
	        </picture>
			<p class="caption">Two</p>
		</li>
		<li><img src="http://placekitten.com/400/600" alt=""><p class="caption">Three</p></li>
		<li><img src="http://placekitten.com/620/400" alt=""><p class="caption">Four</p></li>
		<li><img src="http://placekitten.com/900/600" alt=""><p class="caption">Five</p></li>
		<li><img src="http://placekitten.com/400/600" alt=""><p class="caption">Six</p></li>
		<li><img src="http://placekitten.com/1000/750" alt=""><p class="caption">Seven</p></li>
		<li><img src="http://placekitten.com/900/800" alt=""><p class="caption">Eight</p></li>
		<li><img src="http://placekitten.com/400/600" alt=""><p class="caption">Nine</p></li>
		<li><img src="http://placekitten.com/1200/750" alt=""><p class="caption">Ten</p></li>
		<li><img src="http://placekitten.com/1500/750" alt=""><p class="caption">Eleven</p></li>
		<li><img src="http://placekitten.com/700/400" alt=""><p class="caption">Twelve</p></li>
		<li><img src="http://placekitten.com/900/700" alt=""><p class="caption">Thirteen</p></li>
		<li><img src="http://placekitten.com/600/500" alt=""><p class="caption">Fourteen</p></li>
		<li><img src="http://placekitten.com/1000/600" alt=""><p class="caption">Fifteen</p></li>
	</ul>
</div>

    </div> <!-- end wrap -->


<?php snippet('footer') ?>