<?php

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/redux-core/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/redux-core/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' );
}

function ecom_register_scripts() {

     $uri = get_template_directory_uri();

     wp_enqueue_style( 'boot-min-css', $uri . '/assets/css/bootstrap.min.css'  );
     wp_enqueue_style( 'font-awesome-min-css', $uri . '/assets/css/font-awesome.min.css'  );
     wp_enqueue_style( 'elegent-icons-css', $uri . '/assets/css/elegant-icons.css'  );
     wp_enqueue_style( 'nice-select-css', $uri . '/assets/css/nice-select.css'  );
     wp_enqueue_style( 'jq-min-css', $uri . '/assets/css/jquery-ui.min.css'  );
     wp_enqueue_style( 'owl-min-css', $uri . '/assets/css/owl.carousel.min.css'  );
     wp_enqueue_style( 'slick-min-css', $uri . '/assets/css/slicknav.min.css'  );
     wp_enqueue_style( 'main-css', $uri . '/assets/css/style.css'  );
     wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap' );

     wp_enqueue_script( 'jq-min-js', $uri . '/assets/js/jquery-3.3.1.min.js', null, 1.0, true );
     wp_enqueue_script( 'boot-min-js', $uri . '/assets/js/bootstrap.min.js', null, 1.0, true );
     wp_enqueue_script( 'select-min-js', $uri . '/assets/js/jquery.nice-select.min.js', null, 1.0, true );
     wp_enqueue_script( 'ui-min-js', $uri . '/assets/js/jquery-ui.min.js', null, 1.0, true );
     wp_enqueue_script( 'slick-nav-min-js', $uri . '/assets/js/jquery.slicknav.js', null, 1.0, true );
     wp_enqueue_script( 'mixitup-min-js', $uri . '/assets/js/mixitup.min.js', null, 1.0, true );
     wp_enqueue_script( 'carausel-min-js', $uri . '/assets/js/owl.carousel.min.js', null, 1.0, true );
     wp_enqueue_script( 'main-js', $uri . '/assets/js/main.js', null, 1.0, true );

}
add_action( 'wp_enqueue_scripts', 'ecom_register_scripts' );

function ecom_add_theme_support() {

     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
          'height'      => 60,
          'width'       => 400,
          'flex-height' => true,
          'flex-width'  => true,
          'header-text' => array( 'site-title', 'site-description' ),
     ) );

}
add_action( 'after_setup_theme', 'ecom_add_theme_support' );

function ecom_register_my_menu() {

     register_nav_menu( 'header-menu', __( 'Header Menu' ) );

}
add_action( 'init', 'ecom_register_my_menu' );