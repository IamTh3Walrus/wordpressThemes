<?php get_header(); ?>

<?php get_sidebar('first'); ?>

<div class="contentColumn">

	<div class="contentContainer">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if ( in_category('87') ) { ?>
           <div class="contentTitle"><h4>VIDEO</h4></div>
<?php } else { ?>
           <div class="contentTitle"><h4>ARTICLE</h4></div>
<?php } ?>

	<div class="contentArtTitle"><b><?php the_title(); ?></b></div>

	<div class="contentArtDate"><b>POSTED BY <?php the_author(); ?> <?php the_time('F jS, Y') ?> IN <?php $category = get_the_category();
echo $category[0]->cat_name;?> : <?php $numComments = get_comments_number(); echo $numComments;?> COMMENTS</b></div>

<div class="horzcontentRule"></div>

			<p class="contentExcerpt">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			<?php comments_template(); ?>

			</p>

			<?php edit_post_link('Edit this entry','','.'); ?>

		</div> <!-- End of contentContainer -->

	</div> <!-- End of contentColumn -->

	<?php endwhile; endif; ?>

<?php get_sidebar('second'); ?>

</div> <!-- End of contentWrapper -->

<?php get_footer(); ?>
