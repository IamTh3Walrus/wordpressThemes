<div id="secondSidebar">

	<div class="socialIcons">

			<a href="http://socialvoicemarketing.com/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/rss_logo.png" alt="RSS Feed" width="30px" height="30px" class="socialNetwork" /></a>

			<a href="http://facebook.com/socialvoicemarketing"><img src="<?php bloginfo('template_directory'); ?>/images/facebook_logo.png" alt="Facebook" width="30px" height="30px" class="socialNetwork" /></a>

			<a href="http://twitter.com/socialvoicemrkt"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_logo.png" alt="Twitter" width="30px" height="30px" class="socialNetwork" /></a>

			<a href="http://www.linkedin.com/in/cindyrack"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin_logo.png" alt="Linkedin" width="30px" height="30px" class="socialNetwork" /></a>

			<a href="http://www.youtube.com/socialvoicemarketing"><img src="<?php bloginfo('template_directory'); ?>/images/youtube_logo.png" alt="YouTube" width="30px" height="30px" class="socialNetwork" /></a>


	</div> <!-- End of socialIcons -->

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->



	<?php endif; ?>

</div> <!-- End of secondSidebar -->
