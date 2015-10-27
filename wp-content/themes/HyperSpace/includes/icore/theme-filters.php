<?php

/*-----------------------------------------------------------------------------------*/
/* Theme Filters */
/*-----------------------------------------------------------------------------------*/


// custom excerpt length
function themify_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length' );

//Change Excerpt [...] Symbol
function _theme_excerpt_more($more) {
    return '  <a class="moretag" href="'.get_permalink().'">Lire la suite...</a>';;
}
add_filter('excerpt_more', '_theme_excerpt_more');



function wpc_theme_support() {
    add_theme_support('infinite-scroll', array(
        'type' => 'scroll',
        'container' => ' grid-container',
        'render' => 'wpc_scroll_render',
        'footer' => false,
        'posts_per_page' => 30
    ) );
}
add_action('after_setup_theme','wpc_theme_support');






?>