<?php

get_header();

while( have_posts()) {
  the_post();

  if( get_field('background_image') ): ?>
    <img src="<?php the_field('background_image'); ?>" />
  <?php endif;

  if( get_field('jacket') ): ?>
    <img src="<?php the_field('jacket'); ?>" />
  <?php endif;

  the_field('titre_du_jeu');

  $franchise = get_field('franchise');
  if( $franchise ) {
    the_field('franchise');
  }
  the_field('description');
  echo '</br>';
  echo '<a href="https://www.blacknut.com">Jouer au jeu</a>';
  echo '</br>';
?>



  <h2>Fiche technique</h2>

  <p>Date de sortie: <?php the_field('date_de_sortie'); ?></p>
  <p>Editeur: <?php the_field('editeur'); ?></p>
  <p>Developpeur: <?php the_field('developpeur'); ?></p>
  <p>Mode de jeu: <?php the_field('mode_de_jeu'); ?></p>
  <p>Limite d'âge: <?php the_field('pegi'); ?></p>
  <p>Theme: <?php the_field('theme'); ?></p>
  <p>Genre: <?php the_field('genre'); ?></p>
  <p>Plateformes: <?php the_field('plateforme'); ?></p>

  <?php
}
get_footer();