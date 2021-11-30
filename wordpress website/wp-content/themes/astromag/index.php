<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astromag
 */

get_header();
?>

	<?php if(is_active_sidebar( 'sidebar-1' )): ?>
	<div class="col-md-5-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php else: ?>
	<div class="col-md-7-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
	<?php endif; ?>
		<div class="frow">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div id="content" class="astromag-page-title-area blog-title">
					<!-- <div class="frow-container"> -->
						<div class="frow">
							<div class="col-md-1-1">
								<h2><?php echo esc_html_e( 'Blog', 'astromag' ); ?></h2>
							</div>
						</div>
					<!-- </div> -->
				</div> <!-- Title Area end -->

				<section class="main-starts px-10 py-20">
					<div class="frow">
						<div class="col-md-1-1">
							<div class="astromag-blog-list">
								<?php
									if ( have_posts() ) :

										if ( is_home() && ! is_front_page() ) :
											?>
											<header>
												<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
											</header>
											<?php
										endif;

										/* Start the Loop */
										while ( have_posts() ) :
											the_post();

											/*
											* Include the Post-Type-specific template for the content.
											* If you want to override this in a child theme, then include a file
											* called content-___.php (where ___ is the Post Type name) and that will be used instead.
											*/
											get_template_part( 'template-parts/content', get_post_type() );

										endwhile;

										the_posts_pagination(
											array(
												'mid_size' => 2, 
												'prev_text' => '' . __('Prev', 'astromag'), 
												'next_text' => __('Next', 'astromag') . ''
											)
										); // pagination nav

									else :

										get_template_part( 'template-parts/content', 'none' );

									endif;
								?>
							</div>
						</div> <!-- column -->
					</div> <!-- frow -->
				</section> <!-- all-posts -->
				
			</main> <!-- main -->
		</div> <!-- primary -->
		</div> <!-- primary -->
	</div> <!-- column center end -->

	<?php if(is_active_sidebar( 'sidebar-1' )): ?>
	<div class="col-md-2-8 col-sm-1-1 col-xs-1-1">
		<?php 
			get_sidebar();
		?>
	</div>
	<?php endif; ?>


<?php
get_footer();
