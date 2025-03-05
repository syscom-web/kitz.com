<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Valve Products</h1>
    </div>
  </section>
  <!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="c-breadcrumb__item">Valve Products</li>
      </ul>
    </div>
    <section class="p-page-ir">
      <div class="p-page-product">
        <div class="p-page-product__item p-product-news">
          <div class="p-product-news__inner">
            <div class="p-product-news__header">
              <p class="p-product-news__title c-ttl--type01">Product News event Information</p>
              <div class="p-product-news__link"><a href="<?php echo get_post_type_archive_link('product-news'); ?>" class="c-btn--type01">More</a></div>
            </div>
            <div class="p-product-news__body">
              <ul class="p-product-news__posts">
                <?php
                $args = array(
                  'post_type' => 'product-news',
                  'posts_per_page' => 3,
                  'orderby' => 'date',
                  'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <li class="p-product-news__post">
                      <a href="<?php the_permalink(); ?>" class=p-product-news-post>
                        <time class="p-product-news-post__date" datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time>
                        <p class="p-product-news-post__title"><?php echo str_replace('<br>', '', get_the_title()); ?></p>
                      </a>
                    </li>
                <?php
                  endwhile;
                endif;
                wp_reset_postdata();
                ?>
              </ul>

            </div>

          </div>
          <!-- /.p-product-news__inner -->

        </div>
        <!-- /.p-product-news -->
        <?php
        $tax_name = 'top_service_line';
        $terms = get_terms($tax_name);
        foreach ($terms as $term) :
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => $tax_name,
                'field' => 'slug',
                'terms' => array($term->slug)
              ),
            ),
          );
        ?>
          <div class="p-page-product__item p-product-category">
            <div class="p-product-category__inner">
              <p class="p-product-category__title c-ttl--type01"><?php echo $term->name; ?></p>
              <?php
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
              ?>
                <ul class="p-product-category__items">
                  <?php
                  while ($the_query->have_posts()) : $the_query->the_post();
                  ?>
                    <li class="p-product-category__item">
                      <a href="<?php the_permalink(); ?>" class="p-product-item">
                        <div class="p-product-item__header">
                          <div class="p-product-item__img-wrapper"><?php the_post_thumbnail(); ?></div>
                          <p class="p-product-item__title"><?php the_title(); ?><?php if ($subtitle = get_field('subtitle')) echo "<br><em>$subtitle</em>"; ?></p>
                        </div>
                        <div class="p-product-item__body">
                          <p class="p-product-item__description"><?php the_field('summary'); ?></p>
                        </div>
                      </a>
                    </li>
                  <?php
                  endwhile;
                  ?>
                </ul>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            </div>
          </div>
          <!-- /.p-product-category -->
        <?php endforeach; ?>
        <div class="p-page-product__item p-product-category">
          <div class="p-product-category__inner">
            <p class="p-product-category__title c-ttl--type01">Valve Search</p>
            <ul class="p-product-category__items">
              <li class="p-product-category__item">
                <a href="https://www.kitz-valvesearch.com/frontparts/language.php?mode=change&language=2&url=/index.php" class="p-product-item" target="_blank" rel="noopener">
                  <div class="p-product-item__header">
                    <div class="p-product-item__img-wrapper"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product/top/product-search-img01.png" alt="Valve Search"></div>
                    <p class="p-product-item__title">Valve Search</p>
                  </div>
                  <div class="p-product-item__body">
                    <p class="p-product-item__description">Information on Price Lists, Drawings, CAD, Catalogs, etc.</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.p-product-category -->
        <div id="useful" class="p-page-product__item p-product-category u-pt120 u-mt0">
          <div class="p-product-category__inner">
            <p class="p-product-category__title c-ttl--type01">Useful Information</p>
            <ul class="p-product-category__items">
              <?php
              $args = array(
                'post_type' => 'useful',
                'posts_per_page' => -1, // 取得する投稿数（全件取得）
              );
              $useful_query = new WP_Query($args);
              if ($useful_query->have_posts()) :
                while ($useful_query->have_posts()) : $useful_query->the_post();
                  $title = get_the_title();
                  $description = get_field('body');
                  $link = get_field('link');
                  $blank = get_field('blank');

                  if (has_post_thumbnail()) {
                    $image_url = get_the_post_thumbnail_url();
                  } else {
                    $image_url = esc_url(get_template_directory_uri()) . '/images/product/top/product-dummy.jpg'; // ダミー画像
                  }
              ?>
              <li class="p-product-category__item">
                <a href="<?php echo esc_url($link); ?>" class="p-product-item" <?php echo $blank ? 'target="_blank"' : ''; ?>>
                  <div class="p-product-item__header">
                    <div class="p-product-item__img-wrapper">
                      <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                    </div>
                    <p class="p-product-item__title"><?php echo wp_kses_post($title); ?></p>
                  </div>
                  <div class="p-product-item__body">
                    <p class="p-product-item__description"><?php echo wp_kses_post($description); ?></p>
                  </div>
                </a>
              </li>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </ul>
          </div>
        </div>
        <!-- /.p-product-category -->
      </div>
      <!-- /.p-page-product -->
      <div class="p-product-mm">
        <div class="p-product-mm__inner">
          <div class="p-product-mm__content">
            <h2 class="p-product-mm__title c-ttl--type01">Registering E-mail Magazine</h2>
            <p class="p-product-mm__lead">We will send support information, new product information, and application information for our users.</p>
            <div class="p-product-mm__btn"><a href="<?php echo esc_url(home_url('/')); ?>product/mm" class="c-btn--type01 btn--type01--blue">New membership registration</a></div>
          </div>
        </div>
      </div>
      <!-- /.p-product-mm -->
    </section>
    <?php get_footer(); ?>
