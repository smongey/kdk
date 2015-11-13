
	</div>

    <footer>
	<div class="full">
		<ul>
			<li class="third insta"><a href="<?php echo $pages->find('home')->instagram(); ?>">Follow us on instagram</a></li>
			<li class="third top"><a class="totop" href="#">To the top</a></li>
			<li class="third face"><a href="<?php echo $pages->find('home')->facebook(); ?>">Follow us on facebook</a></li>
		</ul>
	</div>
	</footer>

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    
    <div class="grid">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
    </div>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="<?php echo url() ?>/dist/scripts/vendor.js"></script>

        <script src="<?php echo url() ?>/dist/scripts/main.js"></script>
</body>
</html>
