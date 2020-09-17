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

// agregar campos extras al formulario de perfil de usuarios
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
}











function my_show_extra_profile_fields( $user ) { ?>

<h3>Información Extra del perfil</h3>

<table class="form-table">

<tr>
<th><label for="launchpad">Launchpad</label></th>

<td>
<input type="text" name="launchpad" id="launchpad" value="<?php echo esc_attr
( get_the_author_meta( 'launchpad', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description">Favor colocar la URL de su perfil en launchpad.</span>
</td>
</tr>
<tr>
<th><label for="wiki">Wiki</label></th>

<td>
<input type="text" name="wiki" id="wiki" value="<?php echo esc_attr
( get_the_author_meta( 'wiki', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description">Favor colocar la URL de su perfil en Wiki.</span>
</td>
</tr>

<tr>
<th><label for="twitter">Twitter</label></th>

<td>
<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr
( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description">Favor colocar la URL de su perfil en Twitter.</span>
</td>
</tr>

<tr>
<th><label for="facebook">Facebook</label></th>

<td>
<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr
( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description">Favor colocar la URL de su perfil en Facebook.</span>
</td>
</tr>

<tr>
<th><label for="linkedin">LinkedIn</label></th>

<td>
<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr
( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description">Favor colocar la URL de su perfil en linkedin.</span>
</td>
</tr>


</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) )
return false;

/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
update_usermeta( $user_id, 'launchpad', $_POST['launchpad'] );
update_usermeta( $user_id, 'wiki', $_POST['wiki'] );

update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
}
