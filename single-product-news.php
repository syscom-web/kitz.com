<?php if (get_field('pdf_uploads') || get_field('url_news')) : ?>

  <?php
  wp_safe_redirect('/product/news/');
  exit;
  ?>

<?php else : ?>

  <?php get_header(); ?>
  <main class="p-main">
    <section class="p-page-mv">
      <div class="p-page-mv__inner">
        <h1 class="p-page-mv__ttl p-page-mv__ttl--news"> Product News event Information</h1>
      </div>
    </section><!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">
      <div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li class="c-breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>product/">Valve Products</a></li>
          <li class="c-breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>product/news/">Product News event Information</a></li>
          <li class="c-breadcrumb__item"><?php echo str_replace("<br>", "", get_the_title()); ?></li>
        </ul>
      </div>
      <section class="p-page-news">
        <div class="p-page-news__inner">
          <div class="p-page-news--detail">
            <article class="p-page-news--detail__entry">
              <div class="p-page-news--detail__entry__head">
                <time datetime="<?php the_time('M. j, Y') ?>" class="p-page-news--detail__entry__head__date"><?php echo get_post_time('M. j, Y') ?></time>
                <?php $terms = get_the_terms($post->ID, 'news-cat');
                if ($terms) : ?>
                  <ul class="p-page-news--detail__entry__head__cate">
                    <li><span>
                      <?php foreach ($terms as $term) : ?>
                        <?php echo $term->name; ?>
                      <?php endforeach; ?>
                    </span></li>
                  </ul>
                <?php endif; ?>
                <h2 class="p-page-news--detail__entry__head__ttl"><?php the_title(); ?></h2>
              </div>
              <div id="module_layout" class="p-page-product-news">
                <?php custom_layout(); ?>
              </div>
              <div class="p-page-news--detail__entry__btn"><a href="<?php echo esc_url(home_url('/')); ?>product/news/" class="c-btn--type01">Product News event Information</a></div>
            </article>
          </div><!-- /.p-page-news--detail -->
        </div><!-- /.p-page-news__inner -->
      </section><!-- /.p-page-news -->
      <?php get_footer(); ?>

  <?php endif; ?>