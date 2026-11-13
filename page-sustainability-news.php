<?php

/**
 * Template Name: サステナビリティー新着情報
 *
 */
?>
<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Sustainability NEWS</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="c-breadcrumb__item"><a title="Sustainability"
            href="<?php echo esc_url(home_url('/')); ?>sustainability/">Sustainability</a></li>
        <li class="c-breadcrumb__item">NEWS</li>
      </ul>
    </div>
    <section class="p-sustainability p-sustainability-social p-sustainability-top p-sustainability-news">
      <section class="p-sustainability-statement__container">
        <div class="p-sustainability-social__container">
          <div class="p-sustainability-news__container">
            <?php
            $joken = array(
              'post_type' => array('sustainability-news'),
              'paged' => $paged,
              'posts_per_page' => 20,
              'tax_query' => array(
                array(
                  'taxonomy' => 'news_cat2',
                  'field' => 'slug',
                  'terms' => array('s-topics'),
                )
              )
            );
            $customPosts = query_posts($joken);
            if ($customPosts):
              foreach ($customPosts as $post):
                setup_postdata($post); ?>
                <dl>
                  <dt><time datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time></dt>
                  <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                    $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                    $pdfpath = wp_get_attachment_url($pdfpath); ?>
                    <dd><a href="<?php echo $pdfpath; ?>" class="link-pdf" target="_blank"><?php the_title(); ?></a></dd>
                  <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                    $urlpath = get_post_meta($post->ID, "url_news", true);
                    //$urlpath = wp_get_attachment_url($urlpath);
                    $check_tab = get_post_meta($post->ID, "check_tab", true);

                    if ($check_tab) {
                      ?>
                      <dd><a href="<?php echo $urlpath; ?>" class="link-pdf2" target="_blank"><?php the_title(); ?></a></dd>
                      <?php
                    } else {
                      ?>
                      <dd><a href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></dd>
                      <?php
                    }
                  } else { ?>
                    <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                  <?php } ?>
                </dl>
              <?php endforeach; ?><?php endif; ?>
          </div>
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?><?php wp_reset_query(); ?>
        </div>
      </section>
    </section>
    <?php get_footer(); ?>