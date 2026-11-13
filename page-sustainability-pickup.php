<?php

/**
 * Template Name: サステナビリティーピックアップ
 *
 */
?>
<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">ピックアップ</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="ホーム" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li class="c-breadcrumb__item"><a title="サステナビリティ" href="<?php echo esc_url(home_url('/')); ?>sustainability/">サステナビリティ</a></li>
        <li class="c-breadcrumb__item">ピックアップ</li>
      </ul>
    </div>
    <section class="p-sustainability p-sustainability-social p-sustainability-top p-sustainability-news">
      <section class="p-sustainability-statement__container">
        <div class="p-sustainability-social__container u-mt0">
          <div class="p-sustainability-top__pickup">
            <ul class="news-list">
              <?php
              $joken = array(
                'post_type' => array('sustainability-news'),
                'paged' => $paged,
                'posts_per_page' => 20,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'news_cat2',
                    'field' => 'slug',
                    'terms' => array('s-pickup'),
                  )
                )
              );
              $customPosts = query_posts($joken);
              if ($customPosts) :
                foreach ($customPosts as $post) : setup_postdata($post); ?>
                  <li>
                    <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                      $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                      $pdfpath = wp_get_attachment_url($pdfpath); ?>
                      <a href="<?php echo $pdfpath; ?>" class="link-pdf" target="_blank">
                        <?php if (has_post_thumbnail()) : ?>
                          <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                        <?php else : ?>
                          <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png" alt="<?php get_the_title(); ?>"></figure>
                        <?php endif; ?>
                        <dl>
                          <dt><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日') ?></time></dt>
                          <dd>
                            <p><?php the_title(); ?></p>
                          </dd>
                        </dl>
                      </a>
                      <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                      $urlpath = get_post_meta($post->ID, "url_news", true);
                      //$urlpath = wp_get_attachment_url($urlpath);
                      $check_tab = get_post_meta($post->ID, "check_tab", true);

                      if ($check_tab) {
                      ?>
                        <a href="<?php echo $pdfpath; ?>" class="link-pdf2" target="_blank">
                          <?php if (has_post_thumbnail()) : ?>
                            <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                          <?php else : ?>
                            <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png" alt="<?php get_the_title(); ?>"></figure>
                          <?php endif; ?>
                          <dl>
                            <dt><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日') ?></time></dt>
                            <dd>
                              <p><?php the_title(); ?></p>
                            </dd>
                          </dl>
                        </a>
                      <?php
                      } else {
                      ?>
                        <a href="<?php echo $pdfpath; ?>" class="link-pdf2">
                          <?php if (has_post_thumbnail()) : ?>
                            <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                          <?php else : ?>
                            <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png" alt="<?php get_the_title(); ?>"></figure>
                          <?php endif; ?>
                          <dl>
                            <dt><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日') ?></time></dt>
                            <dd>
                              <p><?php the_title(); ?></p>
                            </dd>
                          </dl>
                        </a>
                      <?php
                      }
                    } else { ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                        <?php else : ?>
                          <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png" alt="<?php get_the_title(); ?>"></figure>
                        <?php endif; ?>
                        <dl>
                          <dt><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日') ?></time></dt>
                          <dd>
                            <p><?php the_title(); ?></p>
                          </dd>
                        </dl>
                      </a>
                    <?php } ?>
                  </li>
                  <?php endforeach; ?><?php endif; ?>
            </ul>
          </div>
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?><?php wp_reset_query(); ?>
        </div>
      </section>
    </section>
    <?php get_footer(); ?>