<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astromag
 */

get_header();
?>

<div class="col-md-5-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="content" class="astromag-page-title-area archive-title">
				<div class="frow-container-fluid">
					<div class="frow">
						<div class="col-md-1-1">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
							<?php 
							if(function_exists('bcn_display')): ?>
								<div class="astromag-breadcrumb">
									<?php	bcn_display();	?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>


			<section class="main-starts px-10 py-20">
				<div class="frow">
					<div class="col-md-1-1">
						<div class="astromag-blog-list">
							<?php if ( have_posts() ) : ?>

								<?php
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
					</div>
				</div>
			</section>
			
		</main> <!-- main-->
	</div> <!-- primary -->
</div> <!-- center ends -->

<div class="col-md-2-8 col-sm-1-1 col-xs-1-1">
	<?php 
		get_sidebar();
	?>
</div>

<?php
get_footer();