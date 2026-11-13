<?php

/**
 * Template Name: SustainabilityTOP
 *
 */
?>
<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Sustainability</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="c-breadcrumb__item">Sustainability</li>
      </ul>
    </div>


    <div id="module_layout" <?php echo kitz_module_layout_class(); ?>>

      <?php custom_layout(array(), array('main_visual')); ?>

      <section class="p-sustainability p-sustainability-top">

        <div class="l-inner">
          <?php custom_layout(array('main_visual')); ?>
        </div>

        <div class="p-sustainability-top__intro">
          <p>In its Long-term Management Vision"Beyond New Heights 2030-Change the Flow," KITZ places sustainability
            management at the core of its management strategy.<br>
            In order to realize "KITZ' Statement of Corporate Mission",and our Long-term management Vision, we will
            continue to grow and enhance our corporate value, while working to solve social issues and create social
            value
            through our business.</p>
        </div>
        <!-- /.p-sustainability-top__intro -->
        <div class="p-sustainability-top__news">
          <div class="p-sustainability-top__news__inner">
            <div>
              <h3>NEWS</h3>
              <a href="<?php echo esc_url(home_url('/')); ?>sustainability/news/" class="c-btn--type01">More</a>
            </div>
            <div>
              <?php
              $joken = array(
                'post_type' => array('sustainability-news'),
                'paged' => $paged,
                'posts_per_page' => 3,
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
                <?php endforeach; ?><?php endif;
                  wp_reset_query(); ?>
              <div class="u-pc-none">
                <a href="<?php echo esc_url(home_url('/')); ?>sustainability/news/" class="c-btn--type01">More</a>
              </div>
            </div>
          </div>
        </div><!-- /.p-sustainability-top__news -->
        <div class="p-sustainability-top__pickup">
          <h3>Pick up</h3>
          <ul>
            <?php
            $joken = array(
              'post_type' => array('sustainability-news'),
              'paged' => $paged,
              'posts_per_page' => 4,
              'tax_query' => array(
                array(
                  'taxonomy' => 'news_cat2',
                  'field' => 'slug',
                  'terms' => array('s-pickup'),
                )
              )
            );
            $customPosts = query_posts($joken);
            if ($customPosts):
              foreach ($customPosts as $post):
                setup_postdata($post); ?>
                <li>
                  <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                    $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                    $pdfpath = wp_get_attachment_url($pdfpath); ?>
                    <a href="<?php echo $pdfpath; ?>" class="link-pdf" target="_blank">
                      <?php if (has_post_thumbnail()): ?>
                        <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                      <?php else: ?>
                        <figure><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png"
                            alt="<?php get_the_title(); ?>"></figure>
                      <?php endif; ?>
                      <dl>
                        <dt><time datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time></dt>
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
                      <a href="<?php echo $urlpath; ?>" class="link-pdf2" target="_blank">
                        <?php if (has_post_thumbnail()): ?>
                          <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                        <?php else: ?>
                          <figure><img
                              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png"
                              alt="<?php get_the_title(); ?>"></figure>
                        <?php endif; ?>
                        <dl>
                          <dt><time datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time></dt>
                          <dd>
                            <p><?php the_title(); ?></p>
                          </dd>
                        </dl>
                      </a>
                      <?php
                    } else {
                      ?>
                      <a href="<?php echo $urlpath; ?>" class="link-pdf2">
                        <?php if (has_post_thumbnail()): ?>
                          <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                        <?php else: ?>
                          <figure><img
                              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png"
                              alt="<?php get_the_title(); ?>"></figure>
                        <?php endif; ?>
                        <dl>
                          <dt><time datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time></dt>
                          <dd>
                            <p><?php the_title(); ?></p>
                          </dd>
                        </dl>
                      </a>
                      <?php
                    }
                  } else { ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php if (has_post_thumbnail()): ?>
                        <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
                      <?php else: ?>
                        <figure><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/common/no-img.png"
                            alt="<?php get_the_title(); ?>"></figure>
                      <?php endif; ?>
                      <dl>
                        <dt><time datetime="<?php the_time('c'); ?>"><?php echo get_post_time('M. j, Y') ?></time></dt>
                        <dd>
                          <p><?php the_title(); ?></p>
                        </dd>
                      </dl>
                    </a>
                  <?php } ?>
                </li>
              <?php endforeach; ?><?php endif;
                wp_reset_query(); ?>
          </ul>
          <div class="p-sustainability-top__pickup--btn">
            <a href="<?php echo esc_url(home_url('/')); ?>sustainability/pickup/" class="c-btn--type01">More</a>
          </div>
        </div><!-- /.p-sustainability-top__pickup -->
        <div class="p-sustainability-top__bnrs">
          <div class="p-sustainability-top__bnrs__inner">
            <ul class="sustainability-bnrs__upper">
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/statement/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr01.png"
                    alt="Message from the Executive Officer in Charge of Sustainability" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr01_sp.png"
                    alt="Message from the Executive Officer in Charge of Sustainability" class="u-pc-none"><span
                    class="c-arrow">Message from the Executive Officer in Charge of Sustainability</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/about_sustainability/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr02.jpg"
                    alt="Sustainability of KITZ Group" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr02_sp.jpg"
                    alt="Sustainability of KITZ Group" class="u-pc-none"><span class="c-arrow">Sustainability of KITZ
                    Group</span></a></li>
            </ul>
            <ul class="sustainability-bnrs__bottom">
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr03.jpg"
                    alt="Environment" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr03_sp.jpg"
                    alt="Environment" class="u-pc-none"><span class="c-arrow">Environment</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/social/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr04.jpg"
                    alt="Social" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr04_sp.jpg"
                    alt="Social" class="u-pc-none"><span class="c-arrow">Social</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr05.jpg"
                    alt="Governance" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr05_sp.jpg"
                    alt="Governance" class="u-pc-none"><span class="c-arrow">Governance</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/products/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr06.jpg"
                    alt="Technology for Sustainable Growth・Intellectual property strategy" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr06_sp.jpg"
                    alt="Technology for Sustainable Growth・Intellectual property strategy" class="u-pc-none"><span
                    class="c-arrow">Technology for Sustainable Growth・Intellectual property strategy</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr07.jpg"
                    alt="Quality Improvement (Quality Assurance)" class="u-pc"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sustainability/top/sustainability-bnr07_sp.jpg"
                    alt="Quality Improvement (Quality Assurance)" class="u-pc-none"><span class="c-arrow">Quality
                    Improvement<br> (Quality Assurance)</span></a></li>
            </ul>
          </div>
        </div><!-- /.p-sustainability-top__bnrs -->
        <div class="p-sustainability-top__menu">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/"
                class="c-btn--type01">Stakeholder Engagement</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/slb/" class="c-btn--type01">Sustainability
                Finance</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>company/report/" class="c-btn--type01">Integrated
                Report</a>
            </li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/esg/" class="c-btn--type01">ESG
                data-sheet</a></li>
          </ul>
        </div><!-- /.p-sustainability-top__menu -->
      </section>

    </div>

    <?php get_footer(); ?>