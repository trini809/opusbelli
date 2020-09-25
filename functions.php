<?php

// include the child css file
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), '1.0.1', "all" );
}

function my_bootstrap_include() {
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '-child/assets/bootstrap/bootstrap.4.4.1.min.css' );
  wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, false);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '-child/assets/bootstrap/bootstrap.4.4.1.min.js' );
  wp_enqueue_script( 'lp-script', get_template_directory_uri() . '-child/js/lp-script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_include');

// include google font
function wpb_add_google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// include font awesome
function wpb_load_fa() {
  wp_enqueue_script( 'wpb-fa', 'https://kit.fontawesome.com/62e25b5046.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

// register widgets - footer
function lp_sidebar_registration() {
  $shared_args = array(
    'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
    'after_title'   => '</h2>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget'  => '</div></div>',
  );
  // Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #3', 'twentytwenty' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);
}
add_action( 'widgets_init', 'lp_sidebar_registration' );
