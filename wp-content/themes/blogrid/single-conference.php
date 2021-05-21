<?php

get_header();

while( have_posts()) {
    the_post();

    if( get_field('image') ): ?>
        <img src="<?php the_field('image'); ?>" />
    <?php endif;

    the_field('stream');

    the_field('titre');


// GAMES linked to the conference
    $featured_posts = get_field('jeux');
    if( $featured_posts ): ?>
        <ul>
        <?php foreach( $featured_posts as $post ): 
    
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span>A custom field from this post: <?php the_field( 'editeur' ); ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>
 <!-- END GAMES linked to the conference -->



    <h2>Fiche technique</h2>

    <p>Date de la conférence: <?php the_field('date'); ?></p>
    <p>Conférence VIP: <?php the_field('vip'); ?></p>
    <p>Editeur: <?php the_field('editeur'); ?></p>
    <p>Présentée par: <?php the_field('presentateurs'); ?></p>
    <?php
}
get_footer();
