<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package astromag
 */

get_header(); ?>


		<div class="col-md-5-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->
			<section id="content" class="main-starts px-10 py-20">
				<div class="frow">
					<div class="col-md-1-1">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div>
				</div>
			</section>
		</div> <!-- center ends -->

		<div class="col-md-2-8 col-sm-1-1 col-xs-1-1">
			<?php 
				get_sidebar();
			?>
		</div>
			

<?php
get_footer();