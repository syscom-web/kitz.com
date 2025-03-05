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
  if ($customPosts) : ?>
    <div class="p-top__news">
      <ul>
        <?php if ($customPosts02) : ?>
          <?php foreach ($customPosts02 as $post) : setup_postdata($post); ?>
            <?php if (get_field('top')) : ?>
              <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                $pdfpath = wp_get_attachment_url($pdfpath);
              ?>
                <li class="p-top__news__maintenance"><span><a target="_blank" href="<?php echo $pdfpath; ?>" class="link-pdf"><?php the_title(); ?></a></span></li>
                <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                $urlpath = get_post_meta($post->ID, "url_news", true);
                //$urlpath = wp_get_attachment_url($urlpath);
                $check_tab = get_post_meta($post->ID, "check_tab", true);
                if ($check_tab) { ?>
                  <li class="p-top__news__maintenance"><span><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></span></li>

                <?php } else { ?>
                  <li class="p-top__news__maintenance"><span><a href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></span></li>
                <?php }
              } else { ?>
                <li class="p-top__news__maintenance"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
              <?php } ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php foreach ($customPosts as $post) : setup_postdata($post); ?>
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
              <li><span><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></span></li>

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

  <section class="p-top-mv">
    <h2 class="p-top-mv__ttl"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-txt01.svg" alt="KITZ aims to be a sustainable future. The next step to connect with valve" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-txt01-sp.svg" alt="KITZ aims to be a sustainable future. The next step to connect with valve" class="u-pc-none"></h2>
    <div class="p-top-mv__slide">
      <div class="splide" id="slider1">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/hydrogen-hrs/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img01.png" alt="Hydrogen Station"><span>Hydrogen Station</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/butterfly/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img02.png" alt="Butterfly valves"><span>Butterfly valves</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/ball/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img03.png" alt="Ball Valves"><span>Ball Valves</span></div>
              </a></li>


            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/hydrogen-hrs/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img01.png" alt="Hydrogen Station"><span>Hydrogen Station</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/butterfly/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img02.png" alt="Butterfly valves"><span>Butterfly valves</span></div>
              </a></li>
            <li class="splide__slide"><a href="<?php echo esc_url(home_url('/')); ?>product/ball/">
                <div class="splide__slide__container p-top-mv__slide__box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec01-img03.png" alt="Ball Valves"><span>Ball Valves</span></div>
              </a></li>
          </ul>
        </div>
      </div>
    </div><!-- /.p-top-mv__slide -->
  </section><!-- /.p-top-mv -->
  <div class="p-top-letter">
    <div class="p-top-letter__inner">
      <p class="c-txt--type01">
        The KITZ Group extends its deepest condolences and sympathy to all those affected by the Noto Peninsula earthquake.<br>
        We pray for a full and swift recovery across the region.
      </p>
      <a href="<?php echo esc_url(home_url('/')); ?>support/" class="c-btn--type01">About Our Support</a>
    </div>
  </div>
  <div class="p-page-valve">
    <section class="p-top-product">
      <div class="p-top-product__inner">
        <h2 class="c-ttl--type01 u-poppins">PRODUCT<span>/</span>SERVICES</h2>
        <div class="p-top-product__categories">
        <?php
        $tax_name = 'top_service_line';
        $terms = get_terms($tax_name);
        foreach ($terms as $term):
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
          <div class="p-top-product__category p-top-product-cat">
            <p class="p-top-product-cat__title"><?php echo $term->name; ?></p>
            <?php
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
              <ul class="p-top-product-cat__items">
              <?php
                while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
                <li class="p-top-product-cat__item">
                  <a href="<?php the_permalink(); ?>" class="p-top-product-item">
                    <div class="p-top-product-item__img-wrapper"><?php the_post_thumbnail(); ?></div>
                    <div class="p-top-product-item__body">
                      <p class="p-top-product-item__title"><?php the_title(); ?><?php if ($subtitle = get_field('subtitle')) echo "<br><em>$subtitle</em>"; ?></p>
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
          <!-- /.p-top-product__category p-top-product-group -->
              <?php endforeach; ?>
        </div>
        <!-- /.p-top-product__categories -->
        <ul class="p-top-product__link02">
          <li><a href="<?php echo esc_url(home_url('/')); ?>product/" class="c-btn--type01">Valve Products</a></li>
        </ul>
      </div><!-- /.p-top-product__inner -->
    </section><!-- /.p-top-product -->

    <section class="p-top-about">
      <div class="p-top-about__inner">
        <div class="p-top-about__inner__intro">
          <h2 class="c-ttl--type01 u-poppins">About Us</h2>
          <p class="p-top-about__inner__intro__lead">Connect to the Future with Valves</p>
          <p class="p-top-about__inner__intro__txt">Safe and reliable water. A steady supply of oil and gas. lives in a clean environment. Through the manufacture and sale of valves that control the flow of water, air, oil and gas, the KITZ Group contributes to today's affluent society by supporting the lifelines that are essential to our daily lives and industry.<br>
            Furthermore, as fluid control professionals, we are committed to expanding our reach and opportunities around the world with products and services that exceed customer expectations and create the wealthy and prosperous societies of tomorrow.</p>
        </div><!-- /.p-top-about__inner__intro -->
        <div class="p-top-about__inner__link">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>who/">
                <div class="p-top-about__inner__link__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img01.jpg" alt="Understanding KITZ by the 3Minute" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img01-sp.jpg" alt="Understanding KITZ by the 3Minute" class="u-pc-none"><span class="c-arrow">Understanding KITZ <br>in 3 minutes</span></div>
                <p><strong class="c-arrow">Understanding KITZ in 3 minutes</strong>Company and product introductions are presented in short video.</p>
              </a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>understand_with_numbers/">
                <div class="p-top-about__inner__link__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img02.jpg" alt="Understanding KITZ by the Numbers" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img02-sp.jpg" alt="Understanding KITZ by the Numbers" class="u-pc-none"><span class="c-arrow">KITZ by the Numbers</span></div>
                <p><strong class="c-arrow">Figures to understand KITZ</strong>Through data, you can see the overview of KITZ Group.</p>
              </a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>business/strength/">
                <div class="p-top-about__inner__link__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img03.jpg" alt="Our Strengths" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img03-sp.jpg" alt="Our Strengths" class="u-pc-none"><span class="c-arrow">Our Strengths</span></div>
                <p><strong class="c-arrow">Our Strengths</strong>KITZ has 70 years of experience in valve manufacturing.</p>
              </a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>business/research_and_development/">
                <div class="p-top-about__inner__link__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img04.jpg" alt="Technology/Research" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec04-img04-sp.jpg" alt="Technology/Research" class="u-pc-none"><span class="c-arrow">Technology and R&D</span></div>
                <p><strong class="c-arrow">Technology and R&D</strong>We have world-class production technology, production methods, and quality control systems.</p>
              </a></li>
          </ul>
        </div><!-- /.p-top-about__inner__link -->
      </div><!-- /.p-top-about__inner -->
    </section><!-- /.p-top-about -->
    <section class="p-top-news">
      <div class="p-top-news__inner">
        <div class="p-top-news__inner__ttl">
          <h2 class="c-ttl--type01 u-poppins">NEWS</h2>
          <div class="p-top-news__inner__link"><a href="<?php echo get_post_type_archive_link('news'); ?>" class="c-btn--type01">More</a></div>
        </div><!-- /.p-top-news__inner__ttl -->
        <div class="p-top-news__inner__container">
          <?php
          $joken = array(
            'post_type' => array('news'),
            'paged' => $paged,
            'posts_per_page' => 5
          );
          $customPosts = query_posts($joken);
          if ($customPosts) :
            foreach ($customPosts as $post) : setup_postdata($post); ?>
              <dl>
                <dt><?php echo get_post_time('M. j, Y') ?><span><?php
                                                                $terms = get_the_terms($post->ID, 'news-cat');
                                                                foreach ($terms as $term) :
                                                                  echo $term->name;
                                                                endforeach;
                                                                ?></span>
                </dt>
                <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                  $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                  $pdfpath = wp_get_attachment_url($pdfpath);



                ?>
                  <dd><a target="_blank" href="<?php echo $pdfpath; ?>" class="link-pdf"><?php the_title(); ?>（<?php echo get_filesize($pdfpath); ?>）</a></dd>
                  <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                  $urlpath = get_post_meta($post->ID, "url_news", true);
                  //$urlpath = wp_get_attachment_url($urlpath);
                  $check_tab = get_post_meta($post->ID, "check_tab", true);

                  if ($check_tab) {

                  ?>
                    <dd><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></dd>

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
            <?php endforeach; ?>
          <?php endif; ?>
        </div><!-- /.p-top-news__inner__container -->
        <div class="p-top-news__inner__link-sp u-pc-none"><a href="<?php echo esc_url(home_url('/')); ?>news/" class="c-btn--type01">More</a></div>
      </div><!-- /.p-top-news__inner -->
    </section><!-- /.p-top-news -->
    <section class="p-top-news">
      <div class="p-top-news__inner">
        <div class="p-top-news__inner__ttl">
          <h2 class="c-ttl--type01 u-poppins">IR NEWS</h2>
          <div class="p-top-news__inner__link"><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/" class="c-btn--type01">More</a></div>
        </div><!-- /.p-top-news__inner__ttl -->
        <div class="p-top-news__inner__container">
          <!-- E-IR Parts TOP 1/1 -->
          <div class="eir" data-area-name="area_top_021"></div>
          <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js" charset="utf-8"></script>
          <script type="text/javascript">
            scriptLoader.setSrc(eirPassCore + 'eir_common.js');
            scriptLoader.load(
              function() {
                setParts('file_top_024');
              }, showMaintenanceMessage);
          </script>
          <!-- /E-IR Parts TOP 1/1 -->
        </div><!-- /.p-top-news__inner__container -->
        <div class="p-top-news__inner__link-sp u-pc-none"><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/" class="c-btn--type01">More</a></div>
      </div><!-- /.p-top-news__inner -->
    </section><!-- /.p-top-news -->
    <?php if ($customPosts02) : ?>
      <section class="p-top-maintenance">
        <div class="p-top-maintenance__inner">
          <div class="p-top-maintenance__inner__ttl">
            <h2 class="c-ttl--type01 u-poppins">MAINTENANCE</h2>
          </div>
          <div class="p-top-maintenance__inner__container">
            <a href="<?php echo esc_url(home_url('/')); ?>maintenance/" class="c-btn--type01">Click here for maintenance notices</a>
          </div><!-- /.p-top-news__inner__container -->
        </div><!-- /.p-top-maintenance__inner -->
      </section><!-- /.p-top-maintenance -->
    <?php endif; ?>
    <section class="p-top-ir">
      <div class="p-top-ir__inner">
        <h2 class="c-ttl--type01 u-poppins">IR</h2>
        <div class="p-top-ir__inner__link">
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec06-img02.jpg" alt="Management Policy and Strategy">
                <dl>
                  <dt>Management Policy <br>and Strategy</dt>
                  <dd></dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>investor_ir/financial-highlights/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec06-img01.jpg" alt="Business Performance and Financial Highlights">
                <dl>
                  <dt>Business Performance <br>and Financial Highlights</dt>
                  <dd></dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec06-img04.png" alt="IR Library">
                <dl>
                  <dt>IR Library</dt>
                  <dd></dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>investor_ir/individual-investors/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec06-img03.jpg" alt="For Individual Investors">
                <dl>
                  <dt>For Individual Investors</dt>
                  <dd></dd>
                </dl>
              </a>
            </li>
          </ul>
        </div><!-- /.p-top-ir__inner__link -->
      </div><!-- /.p-top-ir__inner -->
    </section><!-- /.p-top-ir -->
    <section class="p-top-sustainability">
      <div class="p-top-sustainability__inner">
        <div class="p-top-sustainability__inner__container">
          <h2 class="c-ttl--type01">Strengthening Sustainability Management</h2>
          <div class="p-top-sustainability__inner__slide">
            <div class="splide" id="slider2">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img06.png" alt="6 Clean Water and Sanitation"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img07.png" alt="7 Affordable and Clean Energy"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img09.png" alt="9 Industry, Innovation and Infrastructure"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img11.png" alt="11 Sustainable Cities and Communities"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img12.png" alt="12 Responsible Consumption and Production"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img13.png" alt="13 Climate Action"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img17.png" alt="17 Partnerships for the Goals"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img05.png" alt="5 Gender Equality"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img08.png" alt="8 Decent Work and Economic Growth"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img10.png" alt="10 Reduced Inequalities"></div>
                  </li>
                  <li class="splide__slide">
                    <div class="splide__slide__container"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec07-img16.png" alt="16 Peace, Justice and Strong Institutions"></div>
                  </li>
                </ul>
              </div>
              <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-arrow_slide.svg" alt="前"></button>
                <button class="splide__arrow splide__arrow--next"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-arrow-next_slide.svg" alt="次"></button>
              </div>
            </div>
          </div><!-- /.p-top-sustainability__slide -->
          <p class="p-top-sustainability__inner__container__txt">KITZ Group Long-Term Management Vision announced in February 2022 put sustainability management at the core of its management strategy.<br>
            KITZ Group aims to become a 100-year company, and the entire group will work together to solve social issues through its business.</p>
          <div class="p-top-sustainability__inner__link"><a href="<?php echo esc_url(home_url('/')); ?>sustainability/" class="c-btn--type01">Read more</a></div>
        </div><!-- /.p-top-sustainability__inner__container -->
      </div><!-- /.p-top-sustainability__inner -->
    </section><!-- /.p-top-sustainability -->
    <?php get_footer(); ?>