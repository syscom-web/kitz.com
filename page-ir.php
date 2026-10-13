<?php

/**
 * Template Name: IR情報TOP
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
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">IR</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="HOME" href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li class="c-breadcrumb__item">IR</li>
          </ul>
        </div>
        <section class="p-page-ir">
          <section class="p-top-news">
            <div class="p-top-news__inner">
              <div class="p-top-news__inner__ttl -ir">
                <h2 class="c-ttl--type01 u-poppins">IR NEWS</h2>
                <div class="p-top-news__inner__link"><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/"
                    class="c-btn--type01">More</a></div>
              </div><!-- /.p-top-news__inner__ttl -->
              <div class="p-top-news__inner__container">
                <!-- E-IR Parts IRTOP 1/2 -->
                <div class="eir" data-area-name="area_top_022"></div>
                <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js" charset="utf-8"></script>
                <script type="text/javascript">
                  scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                  scriptLoader.load(
                    function () {
                      setParts('file_irlibrary_026');
                    }, showMaintenanceMessage);
                </script>
                <!-- /E-IR Parts IRTOP 1/2 -->
              </div><!-- /.p-top-news__inner__container -->
              <div class="p-top-news__inner__link-sp u-pc-none"><a
                  href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/" class="c-btn--type01">More</a></div>
            </div><!-- /.p-top-news__inner -->
          </section><!-- /.p-top-news -->


          <div class="p-page-ir__top__document">
            <div class="p-page-ir__top__document__inner">
              <div class="p-page-ir__top__document__wrap">
                <div class="p-page-ir__top__document__wrap-left">
                  <h3>
                    Latest Financial Results
                  </h3>
                  <!-- E-IR Parts IRTOP 2/2 -->
                  <div class="p-page-ir__top__document__wrap-left__list">
                    <div class="eir" data-area-name="area_latest_quarter_023"></div>
                  </div>
                  <div class="p-page-ir__top__document__wrap__btn">
                    <a class="eirAttrTarget_zipDownloadUrl c-btn--type01">Download All<br>（<span
                        class="eirTarget_zipDownloadSize"></span>KB）</a>
                  </div>
                  <!-- /E-IR Parts IRTOP 2/2 -->
                </div>
                <div class="p-page-ir__top__document__wrap-right">
                  <a href="<?php echo home_url(); ?>/investor_ir/individual-investors/"
                    class="p-page-ir__top__document__wrap-right__link">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ir/ir-document_01.jpg"
                      alt="For Individual Investors">
                    <p>For Individual<br>Investors</p>
                  </a>
                  <a href="https://finance.yahoo.co.jp/quote/6498.T" target="_blank" rel="noopener"
                    class="p-page-ir__top__document__wrap-right__link">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ir/ir-document_02.jpg"
                      alt="Stock Quote">
                    <p>Stock Quote<br>（Yahoo!Finance）<br><span class="stock_japan_only">*Japanese only</span></p>
                  </a>
                  <a href="<?php echo home_url(); ?>/investor_ir/calendar/"
                    class="p-page-ir__top__document__wrap-right__link">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ir/ir-document_03.jpg"
                      alt="IR Calendar">
                    <p>IR Calendar</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="p-page-ir__top__menu">
            <div class="p-page-ir__top__menu__inner">
              <div class="p-page-ir__top__menu__wrap">
                <div class="p-page-ir__top__menu__wrap__list">
                  <div class="p-page-ir__top__menu__wrap__item">
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/management-policy/">Management Policy and Strategy</a>
                    </h3>
                    <ul>
                      <li><a href="<?php echo home_url() ?>/investor_ir/management-policy/message/">
                          Top Message
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/management-policy/m_vision/">
                          Long-term Management Vision
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/management-policy/m_plan/">
                          Medium-term Management Plan
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/sustainability">
                          Sustainability
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/management-policy/disclosure_policy/">
                          Disclosure Policy
                        </a></li>
                    </ul>
                  </div>
                  <div class="p-page-ir__top__menu__wrap__item">
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/financial-highlights">Business Performance and Financial
                        Highlights</a>
                    </h3>
                    <ul>
                      <li><a href="<?php echo home_url() ?>/investor_ir/consolidated-results">
                          Consolidated Results
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/segment">
                          By Segment
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/highlight">
                          Financial Position
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/cash-flows/">
                          Cash Flows
                        </a></li>
                    </ul>
                  </div>
                </div>
                <div class="p-page-ir__top__menu__wrap__list">
                  <div class="p-page-ir__top__menu__wrap__item">
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/library">IR Library</a>
                    </h3>
                    <ul>
                      <li>
                        <a href="<?php echo home_url() ?>/company/report/">
                          Integrated Report
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/financial-results/">
                          Financial Results
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/materials/">
                          Presentation Materials
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/financial-data/">
                          Corporate Profile and Financial Data
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/external-reports/">
                          External Report
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-page-ir__top__menu__wrap__list">
                  <div class="p-page-ir__top__menu__wrap__item">
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/stock-information">Shareholder Information</a>
                    </h3>
                    <ul>
                      <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/meetings/">
                          Meeting of Shareholders
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/handling-regulations/">
                          Articles of Incorporation
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/status-shares/">
                          Stock Information
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/dividend/">
                          Dividend Policy and Dividends
                        </a></li>
                      <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/debenture/">
                          Bond / Rating / Analyst Coverage
                        </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
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