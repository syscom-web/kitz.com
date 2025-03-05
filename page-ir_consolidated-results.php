<?php

/**
 * Template Name: 連結業績
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
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Consolidated Results</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">

            <li class="c-breadcrumb__item"><a title="IR data" href="<?php echo home_url() ?>/investor_ir">IR data</a></li>
            <li class="c-breadcrumb__item"><a title="Business activities and financial highlights" href="<?php echo home_url() ?>/investor_ir/financial-highlights/">Business activities and financial highlights</a></li>
            <li class="c-breadcrumb__item">Consolidated Results</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__eir-graph">
            <div class="p-page-ir__eir-graph__inner">
              <div class="p-page-ir__eir-graph__body">
                <!-- E-IR Parts Consolidated Results 1/1 -->
                <div class="qir" data-qir-area="area_highlight_025"></div>
                <script src="/en/cms/wp-content/themes/kitz/js/eire_v5.js"></script>
                <script type="text/javascript">
                  scriptLoader.setSrc('https://ssl4.eir-parts.net/Custom/public/material/v5qir/1.5.0/common.js');
                  scriptLoader.load(function() {
                    qir.load();
                  });
                </script>
                <!-- /E-IR Parts Consolidated Results 1/1 -->
              </div>
            </div>
          </div>


          <div class="p-page-menu">
            <ul>
              <li><a href="<?php echo home_url() ?>/investor_ir/consolidated-results/" class="current">Consolidated Results</a>
              </li>
              <li><a href="<?php echo home_url() ?>/investor_ir/segment/">By segment</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/highlight/">Financial Position</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/cash-flows/">Cash Flows</a></li>
            </ul>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>//investor_ir/faq/" class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
              <div class="l-contact__inner__company">
                <h2 class="c-ttl--type01">IR inquiries</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>//company/inquiry/?content=2" class="c-btn--type01">Contact Us</a>
                </div>
              </div><!-- /.l-contact__inner__company -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
  else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>