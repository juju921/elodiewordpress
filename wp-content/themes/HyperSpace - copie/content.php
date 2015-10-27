<?php
global $options;
$location = icore_get_location();
?>

<article id="post-<?php the_ID();?>" <?php post_class();
?>>
	<div class="post-content">

<?php if (isset($options['blog_style']) && $options['blog_style'] == '1') {?>

						<div class="post-content-full">
			                <h2><a href="<?php the_permalink()?>" class="title" title="Read <?php the_title_attribute();?>"><?php the_title();
	?></a></h2>

	<?php the_content();?>
	</div>

	<?php } else {?>



	<?php if (has_post_thumbnail() && isset($options[$location.'_thumb']) && $options[$location.'_thumb'] == '1'):?>
			                		<div class="index-thumb loading raised drop-shadow">
			            				<a href="<?php the_permalink()?>" title="Read <?php the_title_attribute();?>"><?php the_post_thumbnail("entry-thumb");
	?></a>
			            			</div>
	<?php endif;?>
		           	<h2><a href="<?php the_permalink()?>" class="title" title="Read <?php the_title_attribute();?>"><?php the_title();
	?></a></h2>
		<div class="post-desc">
	<?php the_excerpt();  ?>
	</div>



	<?php }?>

	</div><!-- .post-content  -->
</article>