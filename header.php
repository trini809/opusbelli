<?php
/**
 * Header file for the Twenty Twenty WordPress child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="section-inner">
        <div class="row logo">
          <div class="col-sm-6">
            <a href="index.php"><img src="http://d7h.ae7.myftpupload.com/wp-content/uploads/2020/09/OpusBelli-S.png" id="site-logo" /></a>
          </div>
          <div class="col-sm-6 switch-elem">
            <div>Current Mode</div>
            <label class="switch">
              <input type="checkbox" name="color-switch" />
              <span class="slider round"></span>
            </label>
          </div>
        </div>
      </div>

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<div id="menu-container">
      <nav id="navigation" class="navbar navbar-expand-lg opus-nav">
        <div class="section-inner">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fas fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
						<?php
							wp_nav_menu(
								array(
									'menu'						=>	'2',
									'theme_location' 	=> 	'main-menu',
									'menu_class'     	=> 	'navbar-nav',
									//'items_wrap'     	=> 	'<ul id="%1$s" class="%2$">%3$s</ul>',
								)
							);
						?>
          </div>
      </div>
      </nav>
    </div>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
