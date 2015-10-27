<?php
/**
 * @package elodie
 */
?>

<div class="item boxnews">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="imgthum">
				<?php 
				the_post_thumbnail( ); 
				?>
			</div>
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				
				<div class="entry-meta">
				<!--	<?php elodie_posted_on(); ?> -->
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'elodie' ) ); 

				

			?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'elodie' ),
				'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
					<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'elodie' ) );
					if ( $categories_list && elodie_categorized_blog() ) :
						?>
					<span class="cat-links">
						<?php printf( __( 'Posted in %1$s', 'elodie' ), $categories_list ); ?>
					</span>
				<?php endif; // End if categories ?>

				<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'elodie' ) );
				if ( $tags_list ) :
					?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'elodie' ), $tags_list ); ?>
				</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

	

		<?php edit_post_link( __( 'Edit', 'elodie' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
