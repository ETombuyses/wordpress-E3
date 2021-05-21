<style>
    .video {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
    }

    .video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .title {
        font-family: 'Lato', 'helvetica neue', helvetica, arial;
        font-size: 47px;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: normal;
    }

    .conferenceDataContainer {
        column-count: 2;
        margin-bottom: 100px;
    }

    .conferenceDataContainer p, .conferenceDataContainer span {
        font-family: 'Lato', 'helvetica neue', helvetica, arial;
        color: #E73D2F;
        font-size: 16px;
        font-weight: bold;
    }

    .conferenceDataContainer span {
        color: black;
        font-weight: normal;
        margin-left: 10px;
    }
</style>

<?php

get_header();

while( have_posts()) {
    the_post();

    if( get_field('image') ): ?>
        <!-- <img src="<?php the_field('image'); ?>" /> -->
    <?php endif; ?>

    <div class="video"> <?php the_field('stream'); ?></div>

    <h2 class="title"> <?php the_field('titre'); ?></h2>

    <?php
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



    <h2 class="title">Fiche technique</h2>

    <div class="conferenceDataContainer">
        <p>Date de la conférence: <span><?php the_field('date'); ?></span></p>
        <p>Conférence VIP: <span><?php the_field('vip'); ?></span></p>
        <p>Editeur: <span><?php the_field('editeur'); ?></span></p>
        <p>Présentée par: <span><?php the_field('presentateurs'); ?></span></p>
    </div>
    <?php
}
get_footer();
