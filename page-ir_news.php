<?php

/**
 * Template Name: IRニュース
 *
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <main class="p-main">

      <section class="p-page-mv">
        <div class="p-page-mv__inner">
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">IR NEWS</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
            <li class="c-breadcrumb__item"><a title="IR data" href="<?php echo home_url() ?>/investor_ir/">IR data</a></li>
            <li class="c-breadcrumb__item">IR NEWS</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__news">
            <div class="p-page-ir__news__inner">
              <!-- セレクトボックスが入る -->
              <div class="p-page-ir__news__body">
                <div class="p-page-ir__news__wrap">
                  <!-- E-IR Parts IR News 1/1 -->
                  <div class="eir" data-area-name="area_news_024"></div>
                  <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js"
                    charset="utf-8"></script>
                  <script type="text/javascript">
                    scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                    scriptLoader.load(
                      function () {
                        setParts('file_news_027');
                      }, showMaintenanceMessage);
                  </script>
                  <!-- /E-IR Parts IR News 1/1 -->
                </div>
              </div>
            </div>
          </div>


          <div class="p-page-menu">
            <ul>
              <li class="is-multiline">
                <a href="<?php echo home_url() ?>/investor_ir/management-policy/">Management Policy and Strategy</a>
              </li>
              <li class="is-multiline">
                <a href="<?php echo home_url() ?>/investor_ir/individual-investors/">To Our Individual Investors</a>
              </li>
              <li class="is-multiline">
                <a href="<?php echo home_url() ?>/investor_ir/financial-highlights/">Business
                  activities and financial highlights</a>
              </li>
              <li>
                <a href="<?php echo home_url() ?>/investor_ir/ir_news/" class="current">IR NEWS</a>
              </li>
              <li>
                <a href="<?php echo home_url() ?>/investor_ir/library">IR Library</a>
              </li>
              <li>
                <a href="<?php echo home_url() ?>/investor_ir/calendar">IR Calendar</a>
              </li>
              <li class="is-multiline">
                <a href="<?php echo home_url() ?>/investor_ir/stock-information/">Shareholder information</a>
              </li>
            </ul>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/"
                    class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
              <div class="l-contact__inner__company">
                <h2 class="c-ttl--type01">IR inquiries</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/company/inquiry/?content=2"
                    class="c-btn--type01">Contact Us</a>
                </div>
              </div><!-- /.l-contact__inner__company -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
else: ?>
    <?php endif; ?>
    <?php get_footer(); ?>