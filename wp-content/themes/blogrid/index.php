<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogrid
 */

get_header(); 
?>

<div id="primary" class="featured-content content-area fullwidth-area-blog">

<h2 class="entry-title">Conférences</h2>
	<main id="main" class="site-main all-blog-articles">
		<?php 

		$args = array(
				'post_type'=> 'conference',
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




  <h2 class="entry-title">Jeux</h2>
	<main id="main" class="site-main all-blog-articles">
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
