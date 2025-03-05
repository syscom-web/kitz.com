<?php

/**
 * Template Name: セグメント別
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
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">By segment</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
            <li class="c-breadcrumb__item"><a title="IR data" href="<?php echo home_url() ?>/investor_ir/">IR data</a></li>
            <li class="c-breadcrumb__item"><a title="Business activities and financial highlights" href="<?php echo home_url() ?>/investor_ir/financial-highlights/">Business activities and financial highlights</a></li>
            <li class="c-breadcrumb__item">By segment</li>
          </ul>
        </div>
        <section class="p-page-ir">

          <!-- E-IR Parts Segment 1/1 -->
          <div class="p-page-ir__eir-graph">
            <div class="p-page-ir__eir-graph__inner">
              <div class="p-page-ir__eir-graph__body">
                <div class="p-page-ir__eir-graph__item__title">
                  <h3>Valve Manufacturing Business</h3>
                </div>
                <div class="qir" data-qir-area="area_highlight_026"></div>
              </div>
              <div class="p-page-ir__eir-graph__body">
                <div class="p-page-ir__eir-graph__item__title">
                  <h3>Brass Bar Manufacturing Business</h3>
                </div>
                <div class="qir" data-qir-area="area_highlight_027"></div>
              </div>
              <div class="p-page-ir__eir-graph__body">
                <div class="p-page-ir__eir-graph__item__title">
                  <h3>Other</h3>
                </div>
                <div class="qir" data-qir-area="area_highlight_028"></div>
                <script src="/en/cms/wp-content/themes/kitz/js/eire_v5.js"></script>
                <script type="text/javascript">
                  scriptLoader.setSrc('https://ssl4.eir-parts.net/Custom/public/material/v5qir/1.5.0/common.js');
                  scriptLoader.load(function() {
                    qir.load();
                  });
                </script>
              </div>
            </div>
          </div>
          <!-- /E-IR Parts Segment 1/1 -->


          <div class="p-page-menu">
            <ul>
              <li><a href="<?php echo home_url() ?>/investor_ir/consolidated-results/">Consolidated Results</a>
              </li>
              <li><a href="<?php echo home_url() ?>/investor_ir/segment/" class="current">By segment</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/highlight/">Financial Position</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/cash-flows/">Cash Flows</a></li>
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