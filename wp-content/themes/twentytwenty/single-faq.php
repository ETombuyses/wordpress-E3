<?php

get_header();

while( have_posts()) {
  the_post();
  the_title('<h1>', '</h1>');
  the_field('questions_faq');
}
get_footer();