<?php
/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  {

  if (WP_ENV === 'development') {
    $assets = array(
      'css' => '/assets/css/main.css',
      'js' => '/assets/js/scripts.js',
      'modernizr' => '/assets/vendor/modernizr/modernizr.js',
      'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js',
      'typekit'   => '//use.typekit.net/caf7qdg.js'
    );
  }

  /**
   * jQuery is loaded using the same method from HTML5 Boilerplate:
   * Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
   * It's kept in the header instead of footer to avoid conflicts with plugins.
   */

  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', $assets['jquery'], array(), null, true);
    add_filter('script_loader_src', 'naked_jquery_local_fallback', 10, 2);
  }

  wp_enqueue_script('jquery');

  wp_register_script('typekit', $assets['typekit'], array(), null, false);

  wp_enqueue_style('naked_css', get_template_directory_uri() . $assets['css'], false, null);
  wp_enqueue_script('naked_js', get_template_directory_uri() . $assets['js'], array(), null, true);
  wp_enqueue_script('modernizr', get_template_directory_uri() . $assets['modernizr'], array(), null, true);
  wp_enqueue_script('typekit');

}
add_action( 'wp_enqueue_scripts', 'naked_scripts', 100 ); // Register this fxn and allow Wordpress to call it automatcally in the header


// http://wordpress.stackexchange.com/a/12450
function naked_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js?1.11.1"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'naked_jquery_local_fallback');

// http://wptheming.com/2013/02/typekit-code-snippet/
function naked_typekit_inline() {
  if ( wp_script_is( 'typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php }
}
add_action( 'wp_head', 'naked_typekit_inline' );

?>
