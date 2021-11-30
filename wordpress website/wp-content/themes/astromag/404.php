<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package astromag
 */

get_header();
?>

	<div class="col-md-7-8 col-sm-1-1 col-xs-1-1"> <!-- center started -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div id="content" class="astromag-page-title-area nfound-title">
					<div class="frow-container-fluid">
						<div class="frow">
							<div class="col-lg-1-1">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'astromag' ); ?></h1>
								<?php 
									if(function_exists('bcn_display')){
										bcn_display();
									} 
								?>
							</div>
						</div>
					</div>
				</div>

				<section class="main-starts p-20">
					<div class="frow">
						<div class="col-md-1-1">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'astromag' ); ?></p>
						</div>
					</div>
					<div class="frow gutters widget-area">
						<div class="col-md-1-3">
							<div class="widget widget_search">
								<?php
								get_search_form();
								?>
							</div>
							<?php
							the_widget( 'WP_Widget_Recent_Posts' );

							/* translators: %1$s: smiley */
							$astromag_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'astromag' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$astromag_archive_content" );
							?>
						</div>
						<div class="col-md-1-3">
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'astromag' ); ?></h2>
								<ul>
									<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
									?>
								</ul>
							</div><!-- .widget -->
						</div>
						<div class="col-md-1-3">
							<?php
							the_widget( 'WP_Widget_Tag_Cloud' );
							?>
						</div>
					</div>
				</section>
			</div> <!-- primary -->
		</main> <!-- main -->
	</div> <!-- center ends -->

<?php
get_footer();
