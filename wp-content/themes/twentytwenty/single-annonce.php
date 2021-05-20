<?php

get_header();

while( have_posts()) {
  the_post();
  // echo get_the_title();
  the_title('<h1>', '</h1>');
  // echo get_post_meta(get_the_ID(), 'prix', true);
  the_field('description');
  echo '</br>';
  the_field('prix_annonce');
  echo '</br>';

  $disponible = get_field('disponibilite');
  if( $disponible ) {
    echo 'Disponible';
  }

  // works with image ID --> to configure in ACF
  $image = get_field('image');
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  if( $image ) {
      echo wp_get_attachment_image( $image, $size );
  }
}
get_footer();