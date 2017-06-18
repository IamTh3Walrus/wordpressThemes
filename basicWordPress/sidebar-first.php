<div id="firstSidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Left Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

	<div class="leftContainer">

		<div class="bannerTitle"> <h4>WHO WE ARE</h4></div>

		<p class="sidebarExcerpt"><img src="<?php bloginfo('template_directory'); ?>/images/cindy.png" alt="Cindy" width="73px" height="73px" id="cindy" /><br /><br />Our mission is to increase our clientâ��s presence in the market place by implementing the latest trends and technologies in Local / Social / Mobile marketing.<br /><br />Check out our blogs, videos and our select affiliate products and be sure to contact us to get help navigating all of the new trends and technologies that are emerging in the world of marketing.  <a href="http://socialvoicemarketing.com/contact-us/" class="clickForMore"> Contact Me</a></p><br />

	</div> <!-- End of leftContainer -->

	<div class="featured">

		<div class="bannerTitle"><h4>VIDEOS</h4></div>

	<!-- To issue queries I need to hijack $wp_query. So, I can use it later
on the page I'm saving it to a temporary variable -->
<?php
$tempWPQuery = $wp_query;
$wp_query = null;

// Create a new WP_Query Object
$wp_query = new WP_Query();

// Issue a query that returns 4 posts
$wp_query->query('posts_per_page=4&offset=4&category_name=Video');

// Cycle through all of the posts
while ($wp_query->have_posts()):
	$wp_query->the_post();
?>

<div class="eachArticle">

<div class="articleTitle"><b><a href="<?php the_permalink(); ?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 30); ?></a></b></div>

<p class="articleExcerpt"><?php $ntt_the_excerpt = $post->post_excerpt; echo substr($ntt_the_excerpt, 0, 60); ?>
<a href="<?php the_permalink(); ?>" class="clickForMore">More</a></p>

<div class="horzRule"></div>

</div> <!-- End of eachArticle -->

<?php
endwhile;

// Reset wp_query to the default
$wp_query = null;
$wp_query = $tempWPQuery;
?>

</div> <!-- End of featured -->

<!-- Create the Article part of the left sidebar -->

<div class="featured">

		<div class="bannerTitle"><h4>ARTICLES</h4></div>

<!-- To issue queries I need to hijack $wp_query. So, I can use it later
on the page I'm saving it to a temporary variable -->
<?php
$tempWPQuery = $wp_query;
$wp_query = null;

// Create a new WP_Query Object
$wp_query = new WP_Query();

// Issue a query that returns 4 posts
$wp_query->query('posts_per_page=4&offset=4&category_name=Article');

// Cycle through all of the posts
while ($wp_query->have_posts()):
	$wp_query->the_post();
?>

<div class="eachArticle">

<div class="articleTitle"><b><a href="<?php the_permalink(); ?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 30); ?></a></b></div>

<p class="articleExcerpt"><?php $ntt_the_excerpt = $post->post_excerpt; echo substr($ntt_the_excerpt, 0, 60); ?>
<a href="<?php the_permalink(); ?>" class="clickForMore">More</a></p>

<div class="horzRule"></div>

</div> <!-- End of eachArticle -->

<?php
endwhile;

// Reset wp_query to the default
$wp_query = null;
$wp_query = $tempWPQuery;
?>

<?php endif; ?>

</div> <!-- End of featured -->


</div> <!-- End of firstSidebar -->
