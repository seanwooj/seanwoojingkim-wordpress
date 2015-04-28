<?php
  // This is the container for all portfolio items on the front page
  get_template_part('templates/portfolio-single');

  $query = array(
    'post_type' => 'project',
    'posts_per_page' => 9
  );

  $projects = get_posts( $query );

  ?>
  <section class="work clearfix" id="work"><?php

    foreach ( $projects as $project ) {
      portfolio_item($project);
    } ?>
  </section>
