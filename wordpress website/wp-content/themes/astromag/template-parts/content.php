<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astromag
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(is_single()) : // single post starts ?>

		<div class="entry-content ulol astromag-single-post p-20">
			<?php
				/*----- content for single -----*/
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'astromag' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'astromag' ),
					'after'  => '</div>',
				) ); /*----- Common (paged content) ----- */ 
			?>

			<div class="clearfix"></div>
		</div><!-- .entry-content -->
		
		<footer class="entry-footer astromag-single-post p-20">
			<?php astromag_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	<?php else: // blog, search, archive starts ?>

		<div class="frow-container-fluid">
			<div class="frow centered">
				<div class="col-md-2-7 col-sm-1-3">
					<?php
						// thumbnail for blog page
						if(has_post_thumbnail() ) : ?>
							<div class="astromag-featured-content text-center p-15">
								<?php the_post_thumbnail( 'astromag-blog-page' ); ?>
							</div>
					<?php else: ?>
						<div class="astromag-featured-content text-center p-15">
							<img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/no-thumbnail.jpg' ); ?>" alt="<?php echo esc_attr(the_title()); ?>" width="400" height="400">
						</div>
					<?php endif; /*----- thumb for blog page -----*/ ?>
				</div>
				<div class="col-md-5-7 col-sm-2-3">
					<div class="entry-content ulol p-15">
						<?php if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta text-right">
								<?php astromag_posted_comment_new(); ?>
								<?php astromag_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
						<?php 
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); // title
							endif;
						?>


						<?php 
							/*----- content for blog page -----*/
							the_excerpt( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'astromag' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) ); 
						?>

					</div> <!-- entry content -->
				</div> <!-- col 5-7 -->
			</div> <!-- frow -->
		</div> <!-- container -->

	<?php endif; // ends finally ?>
</article><!-- article ends -->
