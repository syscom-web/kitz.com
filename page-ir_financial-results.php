<?php

/**
 * Template Name: 決算短信
 *
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) :
    the_post(); ?>

    <main class="p-main">

      <section class="p-page-mv">
        <div class="p-page-mv__inner">
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Financial Results</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
            <li class="c-breadcrumb__item"><a title="IR data" href="<?php echo home_url() ?>/investor_ir/">IR data</a></li>
            <li class="c-breadcrumb__item"><a title="IR library" href="<?php echo home_url() ?>/investor_ir/library/">IR library</a></li>
            <li class="c-breadcrumb__item">Financial Results</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__eir-list">
            <div class="p-page-ir__eir-list__container">
              <div class="p-page-ir__eir-list__inner">
                <div class="p-page-ir__eir-list__body">
                  <!-- E-IR Parts Financial Results 1/1 -->
                  <div class="eir" data-area-name="area_ir_material_036"></div>
                  <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js" charset="utf-8"></script>
                  <script type="text/javascript">
                    scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                    scriptLoader.load(
                      function() {
                        setParts('file_ir_material_043');
                      }, showMaintenanceMessage);
                  </script>
                  <!-- /E-IR Parts Financial Results 1/1 -->
                </div>
              </div>
            </div>
          </div>

          <div class="p-page-menu">
            <ul>
              <li><a href="<?php echo home_url() ?>/investor_ir/library/financial-results/" class="current">Financial Results</a>
              </li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/library/materials/">Supplementary materials for financial results and financial results briefing</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/library/financial-data/">Corporate Profile and financial data</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/library/external-reports/">External reports</a></li>
            </ul>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/" class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
              <div class="l-contact__inner__company">
                <h2 class="c-ttl--type01">IR inquiries</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/company/inquiry/?content=2" class="c-btn--type01">Contact Us</a>
                </div>
              </div><!-- /.l-contact__inner__company -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
  else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>