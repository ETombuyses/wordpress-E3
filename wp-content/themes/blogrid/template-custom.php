<?php
/* 
Template Name: custom page
*/

get_header(); 
?>


	<div id="primary" class="content-area">
		<div id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
        global $post;
        $post_slug = $post->post_name;

				get_template_part( 'template-parts/content', 'custom' );
			endwhile; // End of the loop.

      // GAME testing page
      if ($post_slug == 'testing') :
        ?>
        <h1>Jeux disponibles</h1>
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
        endif;
        ?>
      </main>
      <?php

      // conference page -----------------------------------------------------------
      elseif ($post_slug == 'conferences') :
        ?>
        <h1>Conférences VIP</h1>
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
            if (get_field('vip') == '1'): 
              get_template_part( 'template-parts/content', get_post_format() );
            endif;
          endwhile; 
          wp_reset_postdata(); 
        endif;
        ?>
      </main>

      
      <h1>Autres conférences</h1>
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
            if (get_field('vip') == '0'): 
              get_template_part( 'template-parts/content', get_post_format() );
            endif;
          endwhile; 
          wp_reset_postdata(); 
        endif;
        ?>
      </main>

      <?php endif; ?>
      

</article><!-- #post-<?php the_ID(); ?> -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
