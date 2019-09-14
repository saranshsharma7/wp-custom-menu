// custom nav-menu

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 
 
 
 
 // for header menu
<?php

wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

?>

...............or..............................


// for extra menu 

<?php

wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );

?>
