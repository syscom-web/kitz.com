<?php if (get_field('pdf_uploads') || get_field('url_news')) : ?>

  <?php
  wp_safe_redirect('/product/');
  exit;
  ?>

<?php else : ?>

  <?php get_header(); ?>
  <main class="p-main">
    <section class="p-page-mv p-page-mv--product">
      <div class="p-page-mv__inner">
        <h1 class="p-page-mv__ttl p-page-mv__ttl--news"><?php echo str_replace("<br>", "", get_the_title()); ?><?php if ($subtitle = get_field('subtitle')) echo '<span class="subtitle">' . $subtitle . '</span>'; ?></h1>
      </div>
    </section><!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">
      <div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li class="c-breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>product/">Valve Products</a></li>
          <?php foreach (array_reverse(get_post_ancestors($post->ID)) as $parentid) { ?>
            <li class="c-breadcrumb__item"><a href="<?php echo get_permalink($parentid); ?>"><?php echo str_replace("<br>", "", get_page($parentid)->post_title); ?></a></li>
          <?php }  ?>
          <li class="c-breadcrumb__item"><?php echo str_replace("<br>", "", get_the_title()); ?></li>
        </ul>
      </div>
      <?php
      $terms = get_the_terms($post->ID, 'news_cate');
      if (!is_wp_error($terms) && !empty($terms)) : ?>
        <div class="p-product-tags">
          <ul class="p-product-tags__list">
            <?php
            foreach ($terms as $term) {
              $term_link = home_url('/') . "product/" . $term->slug;
              echo '<li class="p-product-tags__item"><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
            }
            ?>
          </ul>
        </div>
      <?php endif; ?>
      <div id="module_layout" class="p-product-post">
        <div class="p-product-post__inner inner">
          <?php custom_layout(); ?>
        </div>
        <!-- /.p-product-post__inner -->
      </div>
      <!-- /.p-product-post -->
      <div class="p-product-mm">
        <div class="p-product-mm__inner">
          <div class="p-product-mm__content">
            <h2 class="p-product-mm__title c-ttl--type01">Registering E-mail Magazines</h2>
            <p class="p-product-mm__lead">We will send support information, new product information, and application information for our users.</p>
            <div class="p-product-mm__btn"><a href="<?php echo esc_url(home_url('/')); ?>product/mm" class="c-btn--type01 btn--type01--blue">New membership registration</a></div>
          </div>
        </div>
      </div>
      <!-- /.p-product-mm -->
      <?php get_footer(); ?>

  <?php endif; ?>