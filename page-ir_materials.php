<?php

/**
 * Template Name: 説明会資料・動画（決算・その他IRイベント）
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
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Presentation Materials (Financial Results and Other IR
            Events)‌</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
            <li class="c-breadcrumb__item"><a title="IR" href="<?php echo home_url() ?>/investor_ir/">IR</a></li>
            <li class="c-breadcrumb__item"><a title="IR library" href="<?php echo home_url() ?>/investor_ir/library/">IR
                library</a></li>
            <li class="c-breadcrumb__item">Presentation Materials (Financial Results and Other IR Events)‌</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__eir-list">
            <div class="p-page-ir__eir-list__container">
              <div class="p-page-ir__eir-list__inner">
                <div class="p-page-ir__eir-list__body">
                  <!-- E-IR Parts Materials 1/1 -->
                  <div class="eir" data-area-name="area_presentation_032"></div>
                  <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js"
                    charset="utf-8"></script>
                  <script type="text/javascript">
                    scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                    scriptLoader.load(
                      function () {
                        setParts('file_ir_material_038');
                      }, showMaintenanceMessage);
                  </script>
                  <!-- /E-IR Parts Materials 1/1 -->
                </div>
              </div>
            </div>
          </div>


          <div class="p-page-menu">
            <ul>
              <li><a href="<?php echo home_url() ?>/investor_ir/library/financial-results/">Financial Results</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/library/materials/" class="current">Presentation
                  Materials</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/library/financial-data/">Corporate
                  Profile and Financial Data</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/library/external-reports/">External Report</a></li>
            </ul>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/"
                    class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
else: ?>
    <?php endif; ?>
    <?php get_footer(); ?>