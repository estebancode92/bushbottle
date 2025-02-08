<?php
register_nav_menus(

  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',


  )

);


function my_theme_add_elementor_support() {
  add_theme_support('elementor');
}
add_action('after_setup_theme', 'my_theme_add_elementor_support');



function register_my_menu() {
  register_nav_menus(array(
      'primary' => __('Primary Menu', 'your-theme'),
  ));
}
add_action('init', 'register_my_menu');


//Soporte para este tema.

function wpb_theme_setup(){
  add_theme_support('post-thumblains');
  add_theme_support('page-templates');

//Soporte para formato de post

add_theme_support('post-formats', array('aside','gallery'));


}

add_action('after_setup_theme','wpb_theme_setup');


function load_css(){
    wp_register_style('estiloglobal',get_template_directory_uri(). '/css/estilos.css', array(),
    false, 'all');
    wp_enqueue_style('estiloglobal');
}

add_action('wp_enqueue_scripts','load_css');


function load_js(){
  wp_enqueue_script('jquery');

  
  // Cargar script1.js
  wp_register_script('local-js1', get_template_directory_uri() . '/js/script1.js', array('jquery'), filemtime(get_template_directory() . '/js/script1.js'), true);
  wp_enqueue_script('local-js1');

  // Cargar script2.js
  wp_register_script('local-js2', get_template_directory_uri() . '/js/script2.js', array('jquery'), filemtime(get_template_directory() . '/js/script2.js'), true);
  wp_enqueue_script('local-js2');


}

add_action('wp_enqueue_scripts','load_js');


function custom_theme_scripts() {
  wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time()); // Usa 'time()' para un versionado dinámico
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

?>