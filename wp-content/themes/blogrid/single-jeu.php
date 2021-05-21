<style>
  .gameWrapper {
    width: 100%;
    margin-top: -40px;
    position: relative;
  }

  .cover {
    width: 100%;
    position: relative;
    top: -40px;
  }

  .jacket {
    width: 33%;
    max-width: 300px;
    position: absolute;
    left: 50%;
    top: 40px;
    transform: translateX(-50%);
  }

  .blacknut {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    color: white;
    font-size: 24px;
    font-weight: bold;
    background-color: #E73D2F;
    text-decoration: none;
    border-radius: 56px;
    padding: 10px 20px;
  }

  .title {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    font-size: 47px;
    font-weight: bold;
    margin-bottom: 0;
    line-height: normal;
  }

  .franchise {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    font-size: 34px;
    font-weight: 100;
    margin-bottom: 0;
    line-height: normal
  }

  .description {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    font-size: 16px;
    margin: 50px 0 70px;
    font-weight: normal;
    line-height: normal
  }

  .titleGameData {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    margin-top: 50px;
    font-size: 30px;
    font-weight: bold;
  }

  .gameDataContainer {
    column-count: 2;
    margin-bottom: 100px;
  }

  .gameDataContainer p, .gameDataContainer span {
    font-family: 'Lato', 'helvetica neue', helvetica, arial;
    color: #E73D2F;
    font-size: 16px;
    font-weight: bold;
  }

  .gameDataContainer span {
    color: black;
    font-weight: normal;
    margin-left: 10px;
  }
</style>

<?php

get_header();

while( have_posts()) {
  the_post();

?>

  <div class="gameWrapper">
    <?php if( get_field('background_image') ): ?>
      <img class="cover" src="<?php the_field('background_image'); ?>" />
    <?php endif;

    if( get_field('jacket') ): ?>
      <img class="jacket" src="<?php the_field('jacket'); ?>" />
    <?php endif; ?>

    <p class="title"><?php the_field('titre_du_jeu'); ?></p>

    <?php
    $franchise = get_field('franchise');
    if( $franchise ) { 
      ?>
      <p class="franchise"><?php the_field('franchise');?></p> 
      <?php
    }
    ?>
    <p class="description"><?php the_field('description');?></p> 
    <a class="blacknut" href="https://www.blacknut.com">Jouer au jeu</a>

    <h2 class="titleGameData">Fiche technique :</h2>

    <div class="gameDataContainer">
      <p>Date de sortie: <span><?php the_field('date_de_sortie'); ?></span></p>
      <p>Editeur: <span><?php the_field('editeur'); ?></span></p>
      <p>Developpeur: <span><?php the_field('developpeur'); ?></span></p>
      <p>Mode de jeu: <span><?php the_field('mode_de_jeu'); ?></span></p>
      <p>Limite d'âge: <span><?php the_field('pegi'); ?></span></p>
      <p>Theme: <span><?php the_field('theme'); ?></span></p>
      <p>Genre: <span><?php the_field('genre'); ?></span></p>
      <p>Plateformes: <span><?php the_field('plateforme'); ?></span></p>
    </div>
  </div>
  <?php
}
get_footer();