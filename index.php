<?php
get_header();
function get_filesize($file_path)
{
  $file_fullpath = str_replace(site_url(), ABSPATH, $file_path);
  if (is_file($file_fullpath)) {
    $file_size = size_format(filesize($file_fullpath));
    return $file_size;
  }
}
?>

<main class="p-main">
  <?php
  $joken = array(
    'post_type' => array('news'),
    'posts_per_page' => 2
  );
  $customPosts = query_posts($joken);

  $joken02 = array(
    'post_type' => array('maintenance'),
    'posts_per_page' => 1
  );
  $customPosts02 = query_posts($joken02);
  if ($customPosts): ?>
    <div class="p-top__news">
      <ul>
        <?php if ($customPosts02): ?>
          <?php foreach ($customPosts02 as $post):
            setup_postdata($post); ?>
            <?php if (get_field('top')): ?>
              <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                $pdfpath = wp_get_attachment_url($pdfpath);
                ?>
                <li class="p-top__news__maintenance"><span><a target="_blank" href="<?php echo $pdfpath; ?>"
                      class="link-pdf"><?php the_title(); ?></a></span></li>
              <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                $urlpath = get_post_meta($post->ID, "url_news", true);
                //$urlpath = wp_get_attachment_url($urlpath);
                $check_tab = get_post_meta($post->ID, "check_tab", true);
                if ($check_tab) { ?>
                  <li class="p-top__news__maintenance"><span><a target="_blank" href="<?php echo $urlpath; ?>"
                        class="link-pdf2"><?php the_title(); ?></a></span></li>

                <?php } else { ?>
                  <li class="p-top__news__maintenance"><span><a href="<?php echo $urlpath; ?>"
                        class="link-pdf2"><?php the_title(); ?></a></span></li>
                <?php }
              } else { ?>
                <li class="p-top__news__maintenance"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                </li>
              <?php } ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php foreach ($customPosts as $post):
          setup_postdata($post); ?>
          <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
            $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
            $pdfpath = wp_get_attachment_url($pdfpath);
            ?>
            <li><span><a target="_blank" href="<?php echo $pdfpath; ?>" class="link-pdf"><?php the_title(); ?></a></span></li>
          <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
            $urlpath = get_post_meta($post->ID, "url_news", true);
            //$urlpath = wp_get_attachment_url($urlpath);
            $check_tab = get_post_meta($post->ID, "check_tab", true);
            if ($check_tab) { ?>
              <li><span><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></span>
              </li>

            <?php } else { ?>
              <li><span><a href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></span></li>
            <?php }
          } else { ?>
            <li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
          <?php } ?>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <!-- mv -->
  <section class="p-top-mv">
    <h2 class="p-top-mv__ttl"><img
        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-txt01.svg"
        alt="KITZ aims to be a sustainable future. The next step to connect with valve" class="u-pc"><img
        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-txt01-sp.svg"
        alt="KITZ aims to be a sustainable future. The next step to connect with valve" class="u-pc-none"></h2>
    <div class="p-top-mv__slide">
      <div class="splide" id="slider1">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/hydrogen-hrs/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img01.png"
                    alt="Hydrogen Station"><span>Hydrogen Station</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/butterfly/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img02.png"
                    alt="Butterfly valves"><span>Butterfly valves</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/ball/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img03.png"
                    alt="Ball Valves"><span>Ball Valves</span></div>
              </a></li>


            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/hydrogen-hrs/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img01.png"
                    alt="Hydrogen Station"><span>Hydrogen Station</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/butterfly/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img02.png"
                    alt="Butterfly valves"><span>Butterfly valves</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/ball/">
                <div class="splide__slide__container p-top-mv__slide__box"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img03.png"
                    alt="Ball Valves"><span>Ball Valves</span></div>
              </a></li>
          </ul>
        </div>
      </div>
    </div><!-- /.p-top-mv__slide -->
  </section>
  <!-- /.mv -->

  <div class="p-page-valve">

    <!-- PRODUCT/SERVICES -->
    <section class="p-top-product">
      <div class="l-inner">
        <div class="p-top-product__titleList">
          <h2 class="c-ttl--type01 u-poppins">PRODUCT<span>/</span>SERVICES</h2>
          <a href="<?php echo esc_url(home_url('product')); ?>">Products & Solutions</a>
        </div>
        <div class="p-top-product__grid">
          <a href="<?php echo esc_url(home_url('/product#valve/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/valve-img-01.jpg" alt="Valves">
            <p class="p-top-product__gridTitle">Valves</p>
          </a>
          <a href="<?php echo esc_url(home_url('/product/hydrogen-solutions/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/valve-img-02.jpg" alt="Hydrogen Solutions">
            <p class="p-top-product__gridTitle">Hydrogen Solutions</p>
          </a>
          <a href="<?php echo esc_url(home_url('/product/water-solutions/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/valve-img-03.jpg" alt="Water Solutions">
            <p class="p-top-product__gridTitle">Water Solutions</p>
          </a>
          <a href="<?php echo esc_url(home_url('/product/maintenance/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/valve-img-04.jpg" alt="Maintenance">
            <p class="p-top-product__gridTitle">Maintenance</p>
          </a>
          <a href="<?php echo esc_url(home_url('/product/aerospace/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/valve-img-05.jpg" alt="AEROSPACE VALVES">
            <p class="p-top-product__gridTitle">AEROSPACE VALVES</p>
          </a>
        </div>
      </div><!-- /.p-top-product__inner -->
    </section>
    <!-- ./ PRODUCT/SERVICES -->

    <!-- About Us -->
    <section class="p-top-about">
      <div class="l-inner">
        <div class="p-top-product__titleList">
          <h2 class="c-ttl--type01">About Us</h2>
        </div>
        <div class="p-top-about__grid">
          <a href="/en/company/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img-01.jpg" alt="Corporate Profile">
            <p class="p-top-product__gridTitle">Corporate Profile</p>
          </a>
          <a href="<?php echo home_url('/sustainability'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img-02.jpg" alt="Sustainability">
            <p class="p-top-product__gridTitle">Sustainability</p>
          </a>
          <a href="<?php echo home_url('/investor_ir'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img-03.jpg" alt="IR">
            <p class="p-top-product__gridTitle">IR</p>
          </a>
        </div>
      </div>
    </section>
    <!-- ./ About Us -->

    <!-- news -->
    <div class="p-top-news__list">

      <!-- NEWS -->
      <section class="p-top-news">
        <div class="p-top-news__inner">
          <div class="p-top-product__titleList p-top-news__inner__ttl">
            <h2 class="c-ttl--type01 small">NEWS</h2>
            <a href="<?php echo home_url('/news/'); ?>">MORE</a>
          </div>
          <div class="p-top-news__inner__container u-mt30">
            <?php
            $top_news_query = new WP_Query(array(
              'post_type' => 'news',
              'post_status' => 'publish',
              'posts_per_page' => 5,
              'no_found_rows' => true,
            ));

            if ($top_news_query->have_posts()):
              while ($top_news_query->have_posts()):
                $top_news_query->the_post();
                $terms = get_the_terms(get_the_ID(), 'news-cat');
                $term_names = $terms && !is_wp_error($terms)
                  ? wp_list_pluck($terms, 'name')
                  : array();
                ?>
                <dl>
                  <dt>
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    <?php if ($term_names): ?>
                      <span><?php echo esc_html(implode(', ', $term_names)); ?></span>
                    <?php endif; ?>
                  </dt>
                  <?php if (get_post_meta(get_the_ID(), 'pdf_uploads', true)) {
                    $pdfpath = wp_get_attachment_url(get_post_meta(get_the_ID(), 'pdf_uploads', true));
                    ?>
                    <dd><a target="_blank" rel="noopener" href="<?php echo esc_url($pdfpath); ?>"
                        class="link-pdf"><?php the_title(); ?>（<?php echo esc_html(get_filesize($pdfpath)); ?>）</a></dd>
                  <?php } elseif (get_post_meta(get_the_ID(), 'url_news', true)) {
                    $urlpath = get_post_meta(get_the_ID(), 'url_news', true);
                    $check_tab = get_post_meta(get_the_ID(), 'check_tab', true);
                    ?>
                    <dd><a <?php echo $check_tab ? 'target="_blank" rel="noopener" ' : ''; ?>href="<?php echo esc_url($urlpath); ?>" class="link-pdf2"><?php the_title(); ?></a></dd>
                  <?php } else { ?>
                    <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                  <?php } ?>
                </dl>
              <?php endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div><!-- /.p-top-news__inner__container -->
        </div>
      </section>
      <!-- ./ NEWS -->

      <!-- IR NEWS -->
      <section class="p-top-news">
        <div class="p-top-news__inner">
          <div class="p-top-product__titleList p-top-news__inner__ttl">
            <h2 class="c-ttl--type01 small">IR NEWS</h2>
            <a href="<?php echo home_url('/investor_ir/ir_news/'); ?>">MORE</a>
          </div><!-- /.p-top-news__inner__ttl -->
          <div class="p-top-news__inner__container u-mt30">
            <!-- E-IR Parts -->
            <div class="eir" data-area-name="area_top_021"></div>
            <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js" charset="utf-8"></script>
            <script type="text/javascript">
              scriptLoader.setSrc(eirPassCore + 'eir_common.js');
              scriptLoader.load(
                function () {
                  setParts('file_top_024');
                }, showMaintenanceMessage);
            </script>
            <!-- /E-IR Parts -->
          </div>
        </div><!-- /.p-top-news__inner -->
      </section><!-- /.p-top-news -->
      <!-- ./ IR NEWS -->
    </div>
    <!-- news -->

    <!-- SYSTEM MAINTENANCE -->
    <?php if ($customPosts02): ?>
      <section class="p-top-maintenance">
        <div class="p-top-maintenance__inner">
          <div class="p-top-product__titleList">
            <h2 class="c-ttl--type01">SYSTEM MAINTENANCE</h2>
            <a href="<?php echo home_url('/maintenance'); ?>">システムメンテナンスのお知らせはこちら</a>
          </div><!-- /.p-top-news__inner__container -->
        </div><!-- /.p-top-maintenance__inner -->
      </section><!-- /.p-top-maintenance -->
    <?php endif; ?>
    <!-- ./ SYSTEM MAINTENANCE -->

    <?php get_footer(); ?>