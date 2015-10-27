<?php
/*
 *WP Post Template: SingleRecette
 */

?>

<?php get_header("recette");?>

<?php
global $options;
$location = icore_get_location();
?>

    <div id="left">
        <article id="post-<?php the_ID();?>" <?php post_class();
        ?>>

            <?php if (have_posts()):while (have_posts()):the_post();?>
                <div class="post-content">


                    <?php if (has_post_thumbnail() && isset($options[$location.'_thumb']) && $options[$location.'_thumb'] == '1'):

                        $thumbid      = get_post_thumbnail_id($post->ID);
                        $img          = wp_get_attachment_image_src($thumbid, 'full');
                        $img['title'] = get_the_title($thumbid);?>
                        <div class="thumb loading raised">
                            <?php the_post_thumbnail("large");?>
                            <a href="<?php echo $img[0];?>" class="zoom-icon" rel="shadowbox" title="<?php echo $img['title'];?>" ></a>
                        </div> <!-- .thumbnail  -->
                        <div id="single-title">
                            <h1 class="title"><?php the_title();?></h1>
                        </div>
                    <?php endif;?>
                    <div class="post-desc">
                        <?php the_content();?>
                    </div>


                </div>  <!-- .post-content  -->

                <?php //the_tags();?>

                <?php //comments_template();?>

            <?php endwhile; else :?>

                <p><?php _e('Sorry, no posts matched your criteria.', 'HyperSpace');?></p>

            <?php endif;?>
        </article>
    </div> <!--  #left  -->

<?php get_sidebar();?>
<?php get_footer('actualite');?>