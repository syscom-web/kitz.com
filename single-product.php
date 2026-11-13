<?php if (get_field('pdf_uploads') || get_field('url_news')): ?>

  <?php
  wp_safe_redirect('/product/');
  exit;
  ?>

<?php else: ?>

  <?php get_header(); ?>
  <main class="p-main">
    <section class="p-page-mv p-page-mv--product">
      <div class="p-page-mv__inner">
        <h1 class="p-page-mv__ttl p-page-mv__ttl--news">
          <?php echo str_replace("<br>", "", get_the_title()); ?>
        </h1>
      </div>
    </section>
    <!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">

      <!-- breadcrumb -->
      <div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a title="ホーム" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
          </li>
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url(home_url('/')); ?>product/">製品・ソリューション</a>
          </li>
          <?php foreach (array_reverse(get_post_ancestors($post->ID)) as $parentid) { ?>
            <li class="c-breadcrumb__item">
              <a href="<?php echo get_permalink($parentid); ?>">
                <?php echo str_replace("<br>", "", get_page($parentid)->post_title); ?>
              </a>
            </li>
          <?php } ?>
          <li class="c-breadcrumb__item">
            <?php echo str_replace("<br>", "", get_the_title()); ?>
          </li>
        </ul>
      </div>

      <?php
      $terms = get_the_terms($post->ID, 'news_cate');
      if (!is_wp_error($terms) && !empty($terms)): ?>
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

      <div id="module_layout" <?php echo kitz_module_layout_class(); ?>>
        <?php if (function_exists('custom_layout')): ?>
          <?php custom_layout(array(), array('main_visual')); ?>
        <?php endif; ?>

        <div class="p-product-post__inner l-inner">
          <?php if (function_exists('custom_layout')): ?>
            <?php custom_layout(array('main_visual')); ?>
          <?php endif; ?>

          <div class="p-product-mm">
            <div class="p-product-mm__inner">
              <div class="p-product-mm__content">
                <h2 class="p-product-mm__title c-ttl--type01">Registering E-mail Magazines</h2>
                <p class="p-product-mm__lead">We will send support information, new product information, and application
                  information for our users.</p>
                <div class="p-product-mm__btn"><a href="<?php echo esc_url(home_url('/')); ?>product/mm"
                    class="c-btn--type01 btn--type01--blue">New membership registration</a></div>
              </div>
            </div>
          </div>
          <!-- /.p-product-mm -->
          <?php get_footer(); ?>

        <?php endif; ?>