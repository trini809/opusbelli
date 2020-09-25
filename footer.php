<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

		<footer>
			<div class="section-inner">
				<div class="row">
					<div class="col-sm-8 rights-reserved">
						&copy; Copyright <?php echo date('Y'); ?> Opus Belli - Your Information Technologies Partner. All rights reserved.
					</div>
					<div class="col-sm-4 to-top">
						<div class="to-the-top">
							<a class="to-the-top" href="#site-header">
								<span class="to-the-top-long">
									<?php
									/* translators: %s: HTML character for up arrow. */
									printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
									?>
								</span><!-- .to-the-top-long -->
								<span class="to-the-top-short">
									<?php
									/* translators: %s: HTML character for up arrow. */
									printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
									?>
								</span><!-- .to-the-top-short -->
							</a><!-- .to-the-top -->
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
