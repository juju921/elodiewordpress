<?php

/*-----------------------------------------------------------------------------------*/
/* Load Theme JavaScript */
/*-----------------------------------------------------------------------------------*/

if (!is_admin()) {
	add_action('wp_enqueue_scripts', 'theme_js');
}

/* Load frontend javascripts */
function theme_js() {

	// Load javascript
	wp_enqueue_script('jquery');

    //wp_enqueue_script('jquery-ui-core');




    wp_enqueue_script('shadowbox', get_template_directory_uri().'/js/shadowbox/shadowbox.js', array('jquery'));
	wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.js', array('jquery'));
	wp_enqueue_script('theme-js', get_template_directory_uri().'/js/theme.js', array('jquery'));
	wp_enqueue_script('mobile-menu', get_template_directory_uri().'/js/mobile.menu.js', array('jquery'));
    wp_enqueue_script('masonry', get_template_directory_uri().'/js/jquery.masonry.min.js', array('jquery'));
    wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr-2.5.3.min.js', array('jquery'));

    wp_enqueue_script('jquery-infinitescroll',get_template_directory_uri().'/js/jquery.infinitescroll.min.js', array('jquery'));
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'));


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Load javascript related styles
	wp_enqueue_style('shadowbox', get_template_directory_uri().'/js/shadowbox/shadowbox.css');
}

?>