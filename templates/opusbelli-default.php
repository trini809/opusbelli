<?php
/**
 * Template Name: OpusBelli Default Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
		?>
			<!-- get_template_part( 'template-parts/content-cover' ); -->
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="container">

					<?php

					if ( is_singular() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
					}

					?>

				</div>

				<?php
					if ( ! is_search() ) {
						get_template_part( 'template-parts/featured-image' );
					}
				?>

				<div class="container">
					<div class="row">
						<div class="col">
							<?php
							the_content();
							?>
						</div>
					</div>
				</div>
			</article>
		<?php
		}
	}
	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
