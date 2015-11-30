<?php global $shortname, $options; ?>
<?php $options = get_option($shortname . '_options'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="author" content="UFO Themes"/>

    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title('|', true, 'right');

        // Add the blog name.
        bloginfo('name');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }

        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2) {
            echo ' | ' . sprintf(__('Page %s', 'HyperSpace'), max($paged, $page));
        }

        ?></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' src="<?php bloginfo('template_url'); ?>/css/component.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style-ie8.css"/>
    <![endif]-->


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >
<header id="masthead" role="banner">
    <!-- <div id="loader-wrapper">

           <div id="loader"></div>
           <div class="loader-section section-left"></div>
           <div class="loader-section section-right"></div>

       </div>-->

    <!-- Print logo -->
    <a href="http://elodiemartins.com/Autour_dElodie_Martins" class="hide"><i
            class="fa fa-angle-double-left backmob"></i> </a>

    <h1>Recettes</h1>


</header>
<!--  end #header  -->

<?php
if(!is_singular( 'recette' ) ){

    echo "<div id=\"wrapper\" class=\"container grid clearfix\">";

}



else {
    echo "<div id=\"wrapper\" class=\"container \">";

}


?>




    <div id="main-content">