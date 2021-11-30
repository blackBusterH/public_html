<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astromag
 */

 if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

		</div> <!-- frow -->
	</div> <!-- container-fluid --> 
	
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer">
		<div class="frow-container">
			<div class="frow">
				<div class="col-md-1-1">
					<?php if( get_theme_mod( 'change_footer_copyright_text', 0 ) == true ): ?>
						<div class="site-info <?php echo esc_html( get_theme_mod( 'copyright_alignment', 'text-center' ) ); ?>">
					<?php else: ?>
						<div class="site-info">
					<?php endif; ?>

					<?php if( get_theme_mod( 'change_footer_copyright_text', 0 ) == true ): ?>
						<p><?php echo esc_html( get_theme_mod( 'footer_copyright_text', '&copy; Your Website' ) ); ?></p>
					<?php else: ?>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'astromag' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'astromag' ), 'WordPress' );
							?>
					</a>
					<?php endif; ?>
						</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
