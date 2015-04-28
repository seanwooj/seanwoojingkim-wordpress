<section id="masthead" class="masthead">
  <!--Image-->
  <?php
    if(has_post_thumbnail( $post->ID ) ){
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    }
  ?>

  <div class="image" style="background-image: url(<?php if (isset($image)) { echo $image[0]; } ?>);">

    <div class="overlay">

      <div class="text">

        <div class="inner">
          <h1><?php is_front_page() ? bloginfo('name') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?></h1>
          <p><?php is_front_page() ? bloginfo('description') : the_excerpt($post->ID); ?></p>
        </div>

      </div>

      <div class="arrow">
        <a href="#about">Learn more about me!</a>
      </div>

    </div>

  </div>
  <!--Image-->

</section>
