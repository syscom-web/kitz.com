<?php get_header(); ?>

<?php
if(have_posts()) :
while(have_posts()) :
the_post(); ?>

<main class="p-main">

<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>

<?php
  $currentUrl = $_SERVER['REQUEST_URI'];
  if (strstr($currentUrl, 'environment/pdf') == true) {
    get_template_part('sustainability/environment/page-pdf');
  }
  ?>

<?php get_footer(); ?>
