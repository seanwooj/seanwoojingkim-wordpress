<?php
/**
 * Theme wrapper
 *
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */

function naked_template_path() {
  return NakedWrapper::$main_template;
}

function naked_template_base() {
  return NakedWrapper::$base;
}

class NakedWrapper {
  static $main_template;
  static $base;

  static function wrap($template) {
    self::$main_template = $template;
    self::$base = substr( basename(self::$main_template), 0, -4);

    if ('index' == self::$base) {
      self::$base = false;
    }

    $templates = array('base.php');

    if (self::$base) {
      array_unshift($templates, sprintf('base-%s.php', self::$base));
    }

    return locate_template($templates);
  }
}

add_filter('template_include', array('NakedWrapper', 'wrap'), 99);

?>
