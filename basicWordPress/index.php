<?php get_header(); ?>

	<?php get_sidebar('first'); ?>

	<div class="middleColumn">

<!-- To issue queries I need to hijack $wp_query. So, I can use it later
on the page I'm saving it to a temporary variable -->
<?php
$tempWPQuery = $wp_query;
$wp_query = null;

// Create a new WP_Query Object
$wp_query = new WP_Query();

// Issue a query that returns 4 posts
$wp_query->query('posts_per_page=4&category_name=Article');

// Cycle through all of the posts
while ($wp_query->have_posts()):
	$wp_query->the_post();
?>

<div class="middleContainer">

           <div class="middleTitle"><h4>ARTICLE</h4></div>

 <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="262px" height="142px" class="featuredImage" />

 <div class="middleArtTitle"><b><b><a href="<?php the_permalink(); ?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 45); ?></a></b></div>

 <div class="middleArtDate"><b><?php the_time('F jS, Y') ?></b></div>

 <div class="horzMidRule"></div>

 <p class="middleExcerpt"><?php $ntt_the_excerpt = $post->post_excerpt; echo substr($ntt_the_excerpt, 0, 157); ?>
<a href="<?php the_permalink(); ?>" class="clickForMore">More</a></p>

</div> <!-- End of middleContainer -->

<?php
endwhile;

// Reset wp_query to the default
$wp_query = null;
$wp_query = $tempWPQuery;
?>

</div> <!-- End of middleColumn -->

<!-- Define the second middleColumn -->

	<div class="middleColumn">

<!-- To issue queries I need to hijack $wp_query. So, I can use it later
on the page I'm saving it to a temporary variable -->
<?php
$tempWPQuery = $wp_query;
$wp_query = null;

// Create a new WP_Query Object
$wp_query = new WP_Query();

// Issue a query that returns 4 posts
$wp_query->query('posts_per_page=4&category_name=Video');

// Cycle through all of the posts
while ($wp_query->have_posts()):
	$wp_query->the_post();
?>

<div class="middleContainer">

           <div class="middleTitle"><h4>VIDEO</h4></div>

 <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="262px" height="142px" class="featuredImage" />

 <div class="middleArtTitle"><b><b><a href="<?php the_permalink(); ?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 45); ?></a></b></div>

 <div class="middleArtDate"><b><?php the_time('F jS, Y') ?></b></div>

 <div class="horzMidRule"></div>

 <p class="middleExcerpt"><?php $ntt_the_excerpt = $post->post_excerpt; echo substr($ntt_the_excerpt, 0, 157); ?>
<a href="<?php the_permalink(); ?>" class="clickForMore">More</a></p>

</div> <!-- End of middleContainer -->

<?php
endwhile;

// Reset wp_query to the default
$wp_query = null;
$wp_query = $tempWPQuery;
?>

</div> <!-- End of middleColumn -->

<?php get_sidebar('second'); ?>

</div> <!-- End of contentWrapper -->

<?php get_footer(); ?>
