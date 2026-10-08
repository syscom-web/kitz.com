<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <main
      class="p-main<?php echo trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') === 'company/group_g' ? ' p-group' : ''; ?>">

      <?php the_content(); ?>

      <?php if (function_exists('custom_layout') && function_exists('have_rows') && have_rows('module')): ?>
        <div id="module_layout" <?php echo kitz_module_layout_class(); ?>>
          <?php custom_layout(array(), array('main_visual')); ?>

          <div class="l-inner">
            <?php custom_layout(array('main_visual')); ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile;
else: ?>
  <?php endif; ?>

  <?php
  $currentUrl = $_SERVER['REQUEST_URI'];
  if (strstr($currentUrl, 'environment/pdf') == true) {
    get_template_part('sustainability/environment/page-pdf');
  }
  ?>

  <?php get_footer(); ?>