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
      <h1 class="p-page-mv__ttl p-page-mv__ttl--news">NEWS</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="c-breadcrumb__item">NEWS</li>
      </ul>
    </div>
    <section class="p-page-news">
      <div class="p-page-news__inner">
        <div class="p-page-news__category">
          <div class="p-page-news__category__all"><a href="<?php echo esc_url(home_url('/')); ?>news/" class="u-poppins">ALL</a></div>
          <div class="p-page-news__category__year">
            <select class="u-poppins" onChange='document.location.href=this.options[this.selectedIndex].value;'>
              <option hidden>YEAR</option>
              <?php $archive = wp_get_archives('post_type=news&type=yearly&format=option'); ?>
            </select>
          </div><?php ?>

          <?php
          $year = explode("/news/", $_SERVER["REQUEST_URI"]);
          $year_num = explode("/", $year[1]);

          ?>
        </div><!-- /.p-page-news__category -->

        <div class="p-page-news__container" id="y_all">
          <div class="p-page-news__container__year"><em class="u-poppins">
              <?php if ($year[1] != "") {
                if (is_numeric(str_replace("/", "", $year_num[0]))) {
                  echo "" . str_replace("/", "", $year_num[0]) . "";
                  $year_display = str_replace("/", "", $year_num[0]);

                  $joken = array(
                    'post_type' => array('news'),
                    'paged' => $paged,
                    'year' => $year_display,
                    'posts_per_page' => 20
                  );
                } else {
                  echo "ALL";

                  $joken = array(
                    'post_type' => array('news'),
                    'paged' => $paged,
                    'posts_per_page' => 20
                  );
                }
              } else {
                echo "ALL";
                $joken = array(
                  'post_type' => array('news'),
                  'paged' => $paged,
                  'posts_per_page' => 20
                );
              } ?>
            </em>
          </div>
          <?php
          //	$joken= array(
          //		'post_type' => array('news'),
          //		'paged' => $paged,
          //		'year' => 2019,
          //		'posts_per_page' => 20
          //	);
          $customPosts = query_posts($joken);
          if ($customPosts) :
            foreach ($customPosts as $post) : setup_postdata($post); ?>
              <?php if (!is_numeric(str_replace("/", "", $year_num[0]))) { ?>
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

                <?php } else {
                if (get_the_date('Y')  == str_replace("/", "", $year_num[0])) { ?>

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


              <?php }
              }

              ?>


              <?php endforeach; ?><?php endif; ?>
              <?php $i = $i - 1; ?>

              <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
              } ?><?php wp_reset_query(); ?>


        </div><!-- /.p-page-news__container -->
      </div><!-- /.p-page-news__inner -->
    </section><!-- /.p-page-news -->
    <?php get_footer(); ?>