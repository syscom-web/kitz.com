<?php get_header(); ?>

<main class="p-main">

  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--business">製品・ソリューション</h1>
    </div>
  </section>

  <!-- breadcrumb -->
  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__list">
      <li class="c-breadcrumb__item">
        <a title="ホーム" href="/">ホーム</a>
      </li>
      <li class="c-breadcrumb__item">製品・ソリューション</li>
    </ul>
  </div>

  <?php if (function_exists('custom_layout')): ?>
    <div id="module_layout" <?php echo kitz_module_layout_class(); ?>>
      <?php custom_layout(array(), array('main_visual')); ?>

      <div class="l-inner">
        <?php custom_layout(array('main_visual')); ?>

        <div class="js-product-news-insert">
          <?php echo do_shortcode('[product_news]'); ?>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const textModule = document.querySelector('.text_module');
        const productNews = document.querySelector('.js-product-news-insert');

        if (textModule && productNews) {
          textModule.insertAdjacentElement('afterend', productNews);
        }
      });
    </script>
  <?php endif; ?>

  <?php get_footer(); ?>