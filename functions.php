<?php
  // правильный способ подключить стили и скрипты
  add_action( 'wp_enqueue_scripts', 'realestate_scripts' );
  // add_action('wp_print_styles', 'realestate_scripts'); // можно использовать этот хук он более поздний
  function realestate_scripts() {
    // naxodim fail style.min.css v papke css
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.min.css' ); 
    //podklyuchaem scripti
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array(), '1.0.0', true );
  }


  add_theme_support( 'custom-logo', [
	'height'      => 70,
	'width'       => 200,
	'flex-width'  => false,
	'unlink-homepage-logo' => false, // WP 5.5
] );


add_theme_support( 'post-thumbnails' );


?> 