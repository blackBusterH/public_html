<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package astromag
 */

get_header();
?>
	<?php if(is_active_sidebar( 'post-sidebar' )): ?>
	<div class="col-md-5-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php else: ?>
	<div class="col-md-7-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php endif; ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<div id="content" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url( 'large' )?>);" <?php endif; ?> class="astromag-page-title-area">
					<div class="frow-container-fluid">
						<div class="frow">
							<div class="col-md-1-1 text-right">				
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<?php if(function_exists('bcn_display')) : ?>
									<div class="astromag-breadcrumb">
										<?php	bcn_display();	?>
									</div>
								<?php endif; ?>

								<div class="blog-entry-meta">
									<?php
									astromag_posted_on();
									astromag_posted_by();
									?>
								</div><!-- .entry-meta -->
							</div>
						</div>
					</div>
				</div> <!-- Title area end -->


				<section class="main-starts content-area px-10 py-20">
					<div class="frow">
						<div class="col-md-1-1">
							<?php

								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
								comments_template();
								endif;

							?>
						</div>
					</div>
				</section>

				<?php 
					if ( function_exists( 'astromag_post_view_count' ) ):
						astromag_post_view_count(get_the_ID()); // count post view
					endif;
					endwhile; // End of the loop. 
				?>

			</main> <!-- main -->
		</div> <!-- primary -->
	</div> <!-- center ends -->

	<?php
		if(is_active_sidebar( 'post-sidebar' )): ?>
		<div class="col-md-2-8 col-sm-1-1 col-xs-1-1">
			<aside id="secondary" class="widget-area bg-right">
				<div class="frow">
					<?php dynamic_sidebar( 'post-sidebar' ); ?>
				</div>
			</aside><!-- #secondary -->
		</div>

<?php 
endif;
get_footer();
