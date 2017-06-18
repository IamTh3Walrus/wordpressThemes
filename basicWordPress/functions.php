<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Right Widgets',
    		'id'   => 'right-sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div class="rightContainer">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<div class="bannerTitle"><h4>',
    		'after_title'   => '</h4></div>'
    	));
    }

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Left Widgets',
    		'id'   => 'left-sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div class="rightContainer">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<div class="bannerTitle"><h4>',
    		'after_title'   => '</h4></div>'
    	));
    }

    if (function_exists('register_nav_menus')) {

		register_nav_menus(array('main-menu' => 'Main Navigation'));

	}

	// Function that grabs first image in a post
    /* Source:wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it
    */
    function catch_that_image() {
  		global $post, $posts;
  		$first_img = '';
  		ob_start();
  		ob_end_clean();
  		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  		$first_img = $matches [1] [0];

  		if(empty($first_img)){ //Defines a default image
  			$first_img = bloginfo('template_directory');
    		$first_img .= "/images/default.png";
  		}
  		return $first_img;
	}

?>
