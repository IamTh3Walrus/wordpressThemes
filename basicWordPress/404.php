<?php get_header(); ?>

<?php get_sidebar('first'); ?>

<div class="contentColumn">

	<div class="contentContainer">

<div style="font-size: 20px;"><?php _e("<br />Sorry I can't find that page?","WhosWho"); ?></div>
<h2><?php $numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
if (0 < $numposts) $numposts = number_format($numposts); ?>
<h2><?php echo 'Check Out the ' .$numposts.' articles below'; ?>
</h2>

<ul id="archive-list">
<?php
$myposts = get_posts('numberposts=-1&');
foreach($myposts as $post) : ?>
<li><?php the_time('m/d/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>

<?php get_sidebar('second'); ?>

<?php get_footer(); ?>
