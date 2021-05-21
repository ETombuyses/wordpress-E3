<?php
/* 
Template Name: testing
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile; // End of the loop.
			?>

      <h1>Jeux disponibles</h1>

      <?php 

$args = array(
    'post_type'=> 'jeu',
    'order'    => 'ASC'
);              

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : 
      $the_query->the_post(); 
      get_template_part( 'template-parts/content', get_post_format() );
    endwhile; 
    wp_reset_postdata(); 
else: 
endif;

?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
