<?php
// agregar el menu del bootsrap

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


function ubuntu_agregar_css_js(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css' );

  wp_enqueue_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' , array ( 'jquery' ), '3.2', true);
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' , array ( 'jquery-slim' ), '1.12', true);
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array ( 'popper' ), '4.0', true);


}
function ubuntu_setup(){
  // activar imagenes destacadas
  if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  }
  add_theme_support('title_tag');
}

add_action('afert_setup_theme','ubuntu_setup');



add_action( 'wp_enqueue_scripts', 'ubuntu_agregar_css_js' );


// agregar sidebar</h3>
function ubuntu_widgets(){
    register_sidebar( array(
      'id'            => 'widget-derecha',
      'name'          => __( 'Sidebar Derecha' ),
      'description'   => __( 'Barra lateral derecha' ),
      'before_widget' => '<div class="card-body">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3> <hr>'


    ) );

}
add_action( 'widgets_init', 'ubuntu_widgets' );


add_action( 'after_setup_theme', 'register_navwalker' );



register_nav_menus( array(
  'menu-principal' => __( 'Menu Ubuntu', 'ubuntu-ve' ),
) );
