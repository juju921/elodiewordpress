<?php
/*
Template Name:  recetteCustom
 */

?>

<?php get_header("recette");?>

<?php
global $options;
$location = icore_get_location();
?>

    <div id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <article id="post-<?php the_ID();?>" <?php post_class();
        ?>>



            <?php

            $query = new WP_Query( array('post_type' => 'recettes', 'posts_per_page' => 5 ) );


            while ( $query->have_posts() ) : $query->the_post();

                ?>



                <div class="post-content">

                    <h2 class="gallery-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php if (has_post_thumbnail() && isset($options[$location.'_thumb']) && $options[$location.'_thumb'] == '1'):

                        $thumbid      = get_post_thumbnail_id($post->ID);
                        $img          = wp_get_attachment_image_src($thumbid, 'full');

                        $img['title'] = get_the_title($thumbid);?>
                        <div class="thumb loading raised">
                            <?php the_post_thumbnail("large");?>
                            <a href="<?php echo $img[0];?>" class="zoom-icon" rel="shadowbox" title="<?php echo $img['title'];?>" ></a>
                        </div> <!-- .thumbnail  -->

                    <?php endif;?>
                   <!-- <div class="post-desc">
                     <!--   <?php //the_content();?>-->
                    <!-- </div>-->

                </div>  <!-- .post-content  -->

                <?php //the_tags();?>

                <?php //comments_template();?>

            <?php endwhile; ?>



        </article>

    </div> <!--  #left  -->

<?php //get_sidebar();?>
<?php get_footer();?>