<?php

function load_scripts() {

  // Load bootstrap
  /*
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.0.0', true );
  */

  wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
  wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );



  // Load font-awesome
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', true );

  // Load my styles
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Register editable text areas
function okayshop_sidebars() {
  register_sidebar(
    array(
      'name' => 'Service 1',
      'id' => 'service-1',
      'description' => 'First service area. Add 1) Header text 2) Description text 3) Image',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h2 class="card-header">',
      'after_title' => '</h2>'
    )
  );
}
add_action( 'widgets_init', 'okayshop_sidebars' );
