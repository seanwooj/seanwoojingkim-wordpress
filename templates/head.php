<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Replace below with wordpress specific meta content -->
  <!-- <meta name="description" content="Sean Woojin Kim is a full stack web developer working in Ruby and Rails">
  <meta name="author" content="Sean Woojin Kim"> -->

  <title>
    <?php bloginfo('name'); // show the blog name, from settings ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
  </title>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head();
  // This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
  // (right here) into the head of your website.
  // Removing this fxn call will disable all kinds of plugins and Wordpress default insertions.
  // Move it if you like, but I would keep it around.
  ?>

</head>
