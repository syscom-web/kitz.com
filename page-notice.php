<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--news">
        <?php echo str_replace("<br>", "", get_the_title()); ?><?php if ($subtitle = get_field('subtitle'))
               echo '<span class="subtitle">' . $subtitle . '</span>'; ?>
      </h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-notice">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item">
          <a title="ホーム" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
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

    <div class="p-notice">
      <div class="p-notice__inner l-inner">
        <div class="p-notice__block">
          <div class="p-notice__heading">
            <h2>NEWS</h2>
            <a href="/news/">一覧</a>
          </div>

          <ul>
            <?php
            $joken = array(
              'post_type' => array('news'),
              'posts_per_page' => 5
            );
            $customPosts = query_posts($joken);
            if ($customPosts):
              foreach ($customPosts as $post):
                setup_postdata($post);
                ?>
                <li>
                  <article>
                    <div>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                      <span><?php
                      $terms = get_the_terms($post->ID, 'news-cat');
                      foreach ($terms as $term):
                        echo $term->name;
                      endforeach;
                      ?></span>
                    </div>
                    <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                      $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                      $file_fullpath = get_attached_file($pdfpath);
                      $pdfpath = wp_get_attachment_url($pdfpath);
                      $file_size = is_file($file_fullpath) ? size_format(filesize($file_fullpath)) : '';
                      ?>
                      <h3><a target="_blank" href="<?php echo $pdfpath; ?>" class="link-pdf"><?php the_title(); ?><?php if ($file_size)
                             echo '（' . $file_size . '）'; ?></a></h3>
                    <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                      $urlpath = get_post_meta($post->ID, "url_news", true);
                      $check_tab = get_post_meta($post->ID, "check_tab", true);

                      if ($check_tab) {
                        ?>
                        <h3><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></h3>
                      <?php } else { ?>
                        <h3><a href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></h3>
                        <?php
                      }
                    } else {
                      ?>
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php } ?>
                  </article>
                </li>
                <?php
              endforeach;
            endif;
            wp_reset_query();
            ?>
          </ul>
        </div>

        <div class="p-notice__block">
          <div class="p-notice__heading">
            <h2>IR NEWS</h2>
            <a href="/investor_ir/ir_news/">一覧</a>
          </div>

          <div class="p-notice__item">
            <!-- E-IR Parts 1/2 -->
            <div class="eir" data-area-name="area_top_002"></div>
            <script type="text/javascript" src="/cms/wp-content/themes/kitz/js/eir_v5.js" charset="utf-8"></script>
            <script type="text/javascript">
              scriptLoader.setSrc(eirPassCore + 'eir_common.js');
              scriptLoader.load(
                function () {
                  setParts('file_irlibrary_018');
                }, showMaintenanceMessage);
            </script>
            <!-- /E-IR Parts 1/2 -->
          </div>
        </div>

        <div class="p-notice__block">
          <div class="p-notice__heading">
            <h2>製品・イベント情報</h2>
            <a href="/product/news/">一覧</a>
          </div>

          <ul>
            <?php
            $joken = array(
              'post_type' => array('product-news'),
              'posts_per_page' => 5
            );
            $customPosts = query_posts($joken);
            if ($customPosts):
              foreach ($customPosts as $post):
                setup_postdata($post);
                $blankLink = get_field('blank_link');
                $pdfLink = get_field('pdf_link');
                ?>
                <li>
                  <article>
                    <div>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                    </div>
                    <h3>
                      <?php if ($blankLink) { ?>
                        <a href="<?php echo get_field('blank_link'); ?>" target="_blank"><?php the_title(); ?></a>
                      <?php } elseif ($pdfLink) { ?>
                        <a href="<?php echo get_field('pdf_link'); ?>" target="_blank"><?php the_title(); ?><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-pdf.svg" alt=""></a>
                      <?php } else { ?>
                        <a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a>
                      <?php } ?>
                    </h3>
                  </article>
                </li>
                <?php
              endforeach;
            endif;
            wp_reset_query();
            ?>
          </ul>
        </div>

        <div class="p-notice__block">
          <div class="p-notice__heading">
            <h2>メンテナンス</h2>
            <a href="/maintenance/">一覧</a>
          </div>

          <ul>
            <?php
            $joken = array(
              'post_type' => array('maintenance'),
              'posts_per_page' => 3
            );
            $customPosts = query_posts($joken);
            if ($customPosts):
              foreach ($customPosts as $post):
                setup_postdata($post);
                ?>
                <li>
                  <article>
                    <div>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                    </div>
                    <?php if (get_post_meta($post->ID, 'pdf_uploads', true)) {
                      $pdfpath = get_post_meta($post->ID, "pdf_uploads", true);
                      $file_fullpath = get_attached_file($pdfpath);
                      $pdfpath = wp_get_attachment_url($pdfpath);
                      $file_size = is_file($file_fullpath) ? size_format(filesize($file_fullpath)) : '';
                      ?>
                      <h3><a target="_blank" href="<?php echo $pdfpath; ?>" class="link-pdf"><?php the_title(); ?><?php if ($file_size)
                             echo '（' . $file_size . '）'; ?></a></h3>
                    <?php } elseif (get_post_meta($post->ID, 'url_news', true)) {
                      $urlpath = get_post_meta($post->ID, "url_news", true);
                      $check_tab = get_post_meta($post->ID, "check_tab", true);

                      if ($check_tab) {
                        ?>
                        <h3><a target="_blank" href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></h3>
                      <?php } else { ?>
                        <h3><a href="<?php echo $urlpath; ?>" class="link-pdf2"><?php the_title(); ?></a></h3>
                        <?php
                      }
                    } else {
                      ?>
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php } ?>
                  </article>
                </li>
                <?php
              endforeach;
            endif;
            wp_reset_query();
            ?>
          </ul>
        </div>

        <div class="p-product-mm">
          <div class="p-product-mm__inner">
            <div class="p-product-mm__content">
              <h2 class="p-product-mm__title c-ttl--type01">メールマガジン登録</h2>
              <p class="p-product-mm__lead">サポート情報・新製品情報・お役立ち情報などをお届けいたします</p>
              <div class="p-product-mm__btn"><a href="<?php echo esc_url(home_url('/')); ?>product/mm"
                  class="c-btn--type01 btn--type01--blue">新規会員登録</a></div>
            </div>
          </div>
        </div>
        <!-- /.p-product-mm -->
      </div>
    </div>
    <?php get_footer(); ?>