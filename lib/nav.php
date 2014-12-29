<?php
/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_navigation(){
  register_nav_menus(
    array(
      'primary' =>  __( 'Primary Menu', 'naked' ) // Register the Primary menu
      // Copy and paste the line above right here if you want to make another menu,
      // just change the 'primary' to another name
    )
  );
}

add_action('after_setup_theme', 'naked_register_navigation');

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
  register_sidebar(array(       // Start a series of sidebars to register
    'id' => 'sidebar',          // Make an ID
    'name' => 'Sidebar',        // Name it
    'description' => 'Take it on the side...', // Dumb description for the admin side
    'before_widget' => '<div>', // What to display before each widget
    'after_widget' => '</div>', // What to display following each widget
    'before_title' => '<h3 class="side-title">',  // What to display before each widget's title
    'after_title' => '</h3>',   // What to display following each widget's title
    'empty_title'=> '',         // What to display in the case of no title defined for a widget
    // Copy and paste the lines above right here if you want to make another sidebar,
    // just change the values of id and name to another word/name
  ));
}
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

?>
