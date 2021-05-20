<?php

get_header();

while( have_posts()) {
    the_post();

    if( get_field('image') ): ?>
        <img src="<?php the_field('image'); ?>" />
    <?php endif;

    the_field('stream');

    the_field('titre');

    if( get_field('jeux') ) {
        the_field('jeux');
    }

    the_field('description');
    echo '</br>';
    ?>

    <h2>Fiche technique</h2>

    <p>Date de la conférence: <?php the_field('date'); ?></p>
    <p>Conférence VIP: <?php the_field('vip'); ?></p>
    <p>Editeur: <?php the_field('editeur'); ?></p>
    <p>Présentée par: <?php the_field('presentateurs'); ?></p>
    <?php
}
get_footer();
