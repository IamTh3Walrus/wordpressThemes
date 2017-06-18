<?php get_header(); ?>

<?php get_sidebar('first'); ?>

<div class="archiveColumn">

	<div class="archiveContainer">

	<div class="archiveTitle"><h4>ARCHIVES</h4></div>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>

			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>

			<div class="middleContainer">

<?php if ( in_category('87') ) { ?>
           <div class="middleTitle"><h4>VIDEO</h4></div>
<?php } else { ?>
           <div class="middleTitle"><h4>ARTICLE</h4></div>
<?php } ?>

 <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="260px" height="142px" class="featuredImage" />

 <div class="middleArtTitle"><b><b><a href="<?php the_permalink(); ?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 50); ?></a></b></div>

 <div class="middleArtDate"><b><?php the_time('F jS, Y') ?></b></div>

 <div class="horzMidRule"></div>

 <p class="middleExcerpt"><?php $ntt_the_excerpt = $post->post_excerpt; echo substr($ntt_the_excerpt, 0, 194); ?>
<a href="<?php the_permalink(); ?>" class="clickForMore">More</a></p>

</div> <!-- End of middleContainer -->

			<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			</div> <!-- End of contentContainer -->

			</div> <!-- End of contentColumn -->



<?php else : ?>

		<h2>Nothing found</h2>

<?php endif; ?>

</div> <!-- End of contentWrapper -->

<?php get_footer(); ?>
