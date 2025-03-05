<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Fluid Control Products</h1>
    </div>
  </section>
  <!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
			<li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="c-breadcrumb__item">Fluid Control Products</li>
      </ul>
    </div>
    <section class="p-page-ir">
      <?php
      $value = array(
        'post_type' => 'fluid-control',
        'posts_per_page' => -1,
      );
      $query_valve = new WP_Query($value);
      ?>
      <div class="p-page-ir__top-two">
        <div class="p-page-ir__top-two__inner">
          <div class="p-page-ir__top-two__wrap">
            <?php
            if ($query_valve->have_posts()) :
              while ($query_valve->have_posts()) :
                $query_valve->the_post();
            ?>
                <a href="<?php if (get_field('link')) { the_field('link'); } else { the_permalink(); } ?>"<?php if (get_field('blank')) { echo ' target="_blank" rel="noopener"'; } ?> class="p-page-ir__top-two__item">
                  <div class="p-page-ir__top-two__item__title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <?php if (get_field('body')) : ?>
                    <div class="p-page-ir__top-two__item__body">
                      <p><?php the_field('body'); ?></p>
                    </div>
                  <?php endif; ?>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    </section>
    <?php get_footer(); ?>