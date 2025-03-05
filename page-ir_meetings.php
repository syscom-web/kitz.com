<?php

/**
 * Template Name: 株主総会
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
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Meeting of Shareholders</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
            <li class="c-breadcrumb__item"><a title="IR" href="<?php echo home_url() ?>/investor_ir/">IR</a></li>
            <li class="c-breadcrumb__item"><a title="IR情報" href="<?php echo home_url() ?>/investor_ir/stock-information/">Shareholder information</a></li>
            <li class="c-breadcrumb__item">Meeting of Shareholders</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__meetings p-company-report__wrap">
            <div class="p-page-ir__meetings__inner">
              <div class="p-page-ir__meetings__wrap">
                <!-- E-IR Parts Meeting 1/1 -->
                <div class="eir" data-area-name="area_meeting_035"></div>
                <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js" charset="utf-8"></script>
                <script type="text/javascript">
                  scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                  scriptLoader.load(
                    function() {
                      setParts('file_ir_material_041');
                    }, showMaintenanceMessage);
                </script>
                <!-- /E-IR Parts Meeting 1/1 -->
              </div>
            </div>
          </div>


          <div class="p-page-menu">
            <ul>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/management-policy/" class="current">Meeting of Shareholders</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/handling-regulations/">Articles of Incorporation</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/status-shares/">Stock Information</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/dividend/">Dividend Policy and Dividends</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/debenture/">Bond / Rating / Analyst Coverage</a>
              </li>
            </ul>
          </div>


          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/" class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
  else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>