<?php function portfolio_item($post){ ?>

<?php
  if(has_post_thumbnail( $post->ID ) ){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  }
?>

<a class="work_link" href="<?php echo $post->guid; ?>">
  <div class="work_content <?php echo $post->post_type; ?>">
    <img class="work_image" data-src="<?php if (isset($image)) { echo $image[0]; } ?>"/>
    <div class="overlay_color"></div>
    <div class="overlay_content">
      <h3><?php echo $post->post_title; ?></h3>
      <h5><?php echo $post->post_excerpt; ?></h5>
      <div class="button">
        <div class="arrow">
          <div class="tip"></div>
        </div>
        <h6>View</h6>
      </div>
    </div>
  </div>
</a>
<!--<pre><?php print_r($post); //debug ?></pre>-->
<?php } ?>
