<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<header id="header">
  <!--Main header-->
  <div class="header">

    <!--Container-->
    <div class="container clearfix">
      <div class="one-third column">
        <!--Logo-->
        <div class="logo"></div>
        <!--Logo-->
      </div>

      <div class="two-thirds column">
        <!--Navigation-->
        <nav id="navigation">
          <a href="#" class="mobile-navigation"><i class="icon-menu"></i></a>
          <?php
          if (has_nav_menu('primary')) {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'navigation') ); // Display the user-defined menu in Appearance > Menus
          }
          ?>
        </nav>
        <!--Navigation-->
      </div>
    </div>
    <!--Container-->

  </div>
  <!--Main header-->

</header>
