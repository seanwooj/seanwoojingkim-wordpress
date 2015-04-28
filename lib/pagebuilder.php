<?php
  /**
   * Adding wrapper rows to siteorigin panels
   */
  function naked_before_row( $data, $grid_attributes =  null) {
    if ( isset($grid_attributes['style']['class']) ) {
      $id_html = "id='" . $grid_attributes['style']['class'] . "'";
    } else {
      $id_html = '';
    }
    $html = '<div class="offset section about"' . $id_html . '><div class="container">';

    return  $html;
  }
  add_filter( 'siteorigin_panels_before_row', 'naked_before_row', 10, 3 );


  function naked_after_row( ) {
    $html = '</div></div>';

    return $html;
  }
  add_filter( 'siteorigin_panels_after_row', 'naked_after_row' );
?>
