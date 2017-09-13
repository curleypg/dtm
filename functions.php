<?php
/**
* Register Footer Widget Area
*/
function dtm_widgets_init() {

  register_sidebar( array(
    'name'           => 'Footer widgets',
    'id'            => 'footer_widget',
    'before_widget' => '<div id="footer_widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ));
}

add_action( 'widgets_init', 'dtm_widgets_init' );
 ?>
