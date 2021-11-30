<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astromag
 */

get_header();
?>
	<?php if(is_active_sidebar( 'page-sidebar' )): ?>
	<div class="col-md-5-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php else: ?>
	<div class="col-md-7-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php endif; ?>

	<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">


				<?php if(has_post_thumbnail()): ?> 
					<div style="background-image: url(<?php the_post_thumbnail_url( 'large' )?>);" class="astromag-page-title-area">
				<?php else: ?>
					<div class="astromag-page-title-area">
				<?php endif; ?>

					<div class="frow-container">
						<div class="frow">
							<div class="col-md-1-1 text-right">				
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<?php if(function_exists('bcn_display')) : ?>
									<div class="astromag-breadcrumb">
										<?php	bcn_display();	?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>


				<?php while ( have_posts() ) : the_post(); ?>

				<section id="content" class="main-starts px-10 py-20">
					<div class="frow">
						<div class="col-md-1-1">
							<?php

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; // End of the loop.
							?>
						</div>
					</div>
				</section>
				
			</main> <!-- main -->
		</div> <!-- primary -->
	</div> <!-- center ends -->

<?php
	endwhile;

	if(is_active_sidebar( 'page-sidebar' )): ?>
	<div class="col-md-2-8 col-sm-1-1 col-xs-1-1">
		<aside id="secondary" class="widget-area bg-right">
			<div class="frow">
				<?php dynamic_sidebar( 'page-sidebar' ); ?>
			</div>
		</aside><!-- #secondary -->
	</div>

<?php 
endif;
get_footer();
