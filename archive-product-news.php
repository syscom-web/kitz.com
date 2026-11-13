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
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--news">Product News event Information</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="c-breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>product/">Valve Products</a></li>
        <li class="c-breadcrumb__item"> Product News event Information</li>
      </ul>
    </div>
    <section class="p-page-news">
      <div class="p-page-news__inner">
        <div class="p-page-news__category">
          <div class="p-page-news__category__all"><a href="<?php echo esc_url(home_url('/')); ?>product/news/"
              class="u-poppins">ALL</a></div>
          <div class="p-page-news__category__year">
            <select class="u-poppins" onChange='document.location.href=this.options[this.selectedIndex].value;'>
              <option hidden>YEAR</option>
              <?php $archive = wp_get_archives('post_type=product-news&type=yearly&format=option'); ?>
            </select>
          </div><?php ?>

          <?php
          $year = explode("/product/news/", $_SERVER["REQUEST_URI"]);
          $year_num = explode("/", $year[1]);

          ?>
        </div><!-- /.p-page-news__category -->

        <div class="p-page-news__container p-page-news__container--product-news" id="y_all">
          <div class="p-page-news__container__year"><em class="u-poppins">
              <?php if ($year[1] != "") {
                if (is_numeric(str_replace("/", "", $year_num[0]))) {
                  echo "" . str_replace("/", "", $year_num[0]) . "";
                  $year_display = str_replace("/", "", $year_num[0]);

                  $joken = array(
                    'post_type' => array('product-news'),
                    'paged' => $paged,
                    'year' => $year_display,
                    'posts_per_page' => 20
                  );
                } else {
                  echo "ALL";

                  $joken = array(
                    'post_type' => array('product-news'),
                    'paged' => $paged,
                    'posts_per_page' => 20
                  );
                }
              } else {
                echo "ALL";
                $joken = array(
                  'post_type' => array('product-news'),
                  'paged' => $paged,
                  'posts_per_page' => 20
                );
              } ?>
            </em>
          </div>
          <?php
          //	$joken= array(
          //		'post_type' => array('product-news'),
          //		'paged' => $paged,
          //		'year' => 2019,
          //		'posts_per_page' => 20
          //	);
          $customPosts = query_posts($joken);
          if ($customPosts):
            foreach ($customPosts as $post):
              setup_postdata($post); ?>
              <?php if (!is_numeric(str_replace("/", "", $year_num[0]))) { ?>
                <dl>
                  <dt><?php echo get_post_time('M. j, Y') ?></dt>
                  <dd>
                    <?php
                    $blankLink = get_field('blank_link');
                    $pdfLink = get_field('pdf_link');

                    if ($blankLink) {
                      echo '<a href="' . get_field('blank_link') . '" target="_blank">';
                    } else if ($pdfLink) {
                      echo '<a href="' . get_field('pdf_link') . '" target="_blank">';
                    } else {
                      echo '<a href="' . get_permalink($post->ID) . '">';
                    }
                    ?>
                    <?php the_title(); ?>

                    <?php
                    if ($blankLink) {
                      // echo '<img src="/img/icon_blank_black.svg">';
                    } else if ($pdfLink) {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/common/icon-pdf.svg">';
                    }
                    ?>
                    </a>
                  </dd>
                </dl>

              <?php } else {
                if (get_the_date('Y') == str_replace("/", "", $year_num[0])) { ?>

                  <dl>
                    <dt><?php echo get_post_time('M. j, Y') ?></dt>
                    <dd>
                      <?php
                      $blankLink = get_field('blank_link');
                      $pdfLink = get_field('pdf_link');

                      if ($blankLink) {
                        echo '<a href="' . get_field('blank_link') . '" target="_blank">';
                      } else if ($pdfLink) {
                        echo '<a href="' . get_field('pdf_link') . '" target="_blank">';
                      } else {
                        echo '<a href="' . get_permalink($post->ID) . '">';
                      }
                      ?>
                      <?php the_title(); ?>

                      <?php
                      if ($blankLink) {
                        // echo '<img src="/img/icon_blank_black.svg">';
                      } else if ($pdfLink) {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/common/icon-pdf.svg">';
                      }
                      ?>
                      </a>
                    </dd>
                  </dl>


                <?php }
              }

              ?>

            <?php endforeach; ?><?php endif; ?>
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?><?php wp_reset_query(); ?>

        </div><!-- /.p-page-news__container--product-news -->
      </div><!-- /.p-page-news__inner -->
    </section><!-- /.p-page-news -->
    <?php get_footer(); ?>