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
            <li class="c-breadcrumb__item"><a title="Home" href="/en">Home</a></li>
            <li class="c-breadcrumb__item">IR</li>
          </ul>
        </div>
        <div class="p-page-ir">
          <div id="module_layout">
            <section class="c-hero">
              <div class="c-hero__inner">
                <div class="c-hero__body">
                  <h2 class="c-hero__title">
                    <span>INVESTOR</span>
                    <span>RELATIONS</span>
                  </h2>
                </div>
                <div class="c-hero__media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ir/ir-hero.png" alt="">
                </div>
              </div>
            </section>

            <div class="l-inner">
              <div class="text_module medium">
                <p>
                  キッツは、バルブを中心とした事業を通じて、流体制御技術で社会インフラを支え、持続的な企業価値の向上を目指しています。<br>
                  本ページでは、経営方針や財務・業績情報、IR資料など、投資家の皆様に向けた重要な情報を分かりやすくお伝えします。<br>
                  透明性の高い情報開示と継続的な対話を通じて、株主・投資家の皆様との信頼関係の構築に努めてまいります。
                </p>
              </div>

              <div class="p-page-ir__top__info">
                <article class="p-page-ir__top__info__panel">
                  <div class="p-page-ir__top__info__panel__heading">
                    <h3>IR NEWS</h3>
                    <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">More</a>
                  </div>
                  <div class="p-page-ir__top__info__panel__item">
                    <!-- E-IR Parts 1/2 -->
                    <div class="eir" data-area-name="area_top_022"></div>
                    <script type="text/javascript" src="/en/cms/wp-content/themes/kitz/js/eire_v5.js"
                      charset="utf-8"></script>
                    <script type="text/javascript">
                      scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                      scriptLoader.load(
                        function () {
                          setParts('file_irlibrary_026');
                        }, showMaintenanceMessage);
                    </script>
                    <!-- /E-IR Parts 1/2 -->
                  </div>
                </article>

                <article class="p-page-ir__top__info__panel">
                  <div class="p-page-ir__top__info__panel__heading">
                    <h3>最新決算資料</h3>
                  </div>
                  <div class="p-page-ir__top__info__panel__item">
                    <!-- E-IR Parts 2/2 -->
                    <div class="eir" data-area-name="area_latest_quarter_017"></div>
                    <!-- /E-IR Parts 2/2 -->
                  </div>
                  <a href="<?php echo esc_url(add_query_arg('kitz_ir_download', '1', home_url('/'))); ?>"
                    download="kitz_ir.zip" class="kitz-ir-download c-btn--type01">
                    <p>
                      一括ダウンロード
                    </p>（<span class="eirTarget_zipDownloadSize"></span>KB）
                  </a>

                  <p class="p-page-ir__top__document__wrap__btn__text">
                    決算説明会動画は一括ダウンロードの対象ではありません。
                  </p>
                </article>
              </div>

              <div class="p-page-ir__top__links">
                <a href="https://ssl4.eir-parts.net/doc/6498/ir_material1/246344/00.pdf" target="_blank" rel="noopener">
                  <span>Corporate Profile</span>
                </a>
                <a href="<?php echo esc_url(home_url('/investor_ir/calendar/')); ?>">
                  <span>IR Calendar</span>
                </a>
                <a href="https://finance.yahoo.co.jp/quote/6498.T" target="_blank" rel="noopener">
                  <span>株価情報<br>（YAHOO FINANCE）</span>
                </a>
              </div>

              <div class="p-page-ir__top__menu">
                <ul class="p-page-ir__top__menu-list">
                  <li>
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/management-policy/">Management Policy and
                        Strategy</a>
                    </h3>
                    <ul>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/management-policy/message/">Top Message</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/management-policy/m_vision/">Long-term Management
                          Vision</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/management-policy/m_plan/">Medium-term Management
                          Plan</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/sustainability">Sustainability</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/management-policy/disclosure_policy/">Disclosure
                          Policy</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/library">IR Library</a>
                    </h3>
                    <ul>
                      <li>
                        <a href="<?php echo home_url() ?>/company/report/">Integrated Report</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/financial-results/">Financial Results</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/materials/">Presentation Materials
                          (Financial Results and Other IR Events)‌</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/annual-securities-report/">Corporate Profile
                          and Financial Data
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/library/external-reports/">External Report</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/stock-information">Shareholder Information</a>
                    </h3>
                    <ul>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/stock-information/meetings/">Meeting of
                          Shareholders</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/stock-information/handling-regulations/">Articles of
                          Incorporation
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/stock-information/status-shares/">Stock
                          Information</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/stock-information/dividend/">Dividend Policy and
                          Dividends</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/stock-information/debenture/">Bond / Rating /
                          Analyst Coverage</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <h3>
                      <a href="<?php echo home_url() ?>/investor_ir/financial-highlights">Business Performance and Financial
                        Highlights</a>
                    </h3>
                    <ul>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/consolidated-results">Consolidated Results</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/segment">By Segment</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/highlight">Financial Position</a>
                      </li>
                      <li>
                        <a href="<?php echo home_url() ?>/investor_ir/cash-flows/">Cash Flows</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/"
                    class="c-btn--type01" rel="noopener">IRに関するFAQ</a></div>
              </div><!-- /.l-contact__inner__product -->
              <div class="l-contact__inner__company">
                <h2 class="c-ttl--type01">IRに関するお問い合わせ</h2>
                <div class="l-contact__inner__link"><a
                    href="<?php echo home_url() ?>/company/inquiry/company/?inquiry-cat=ir" class="c-btn--type01">お問い合わせ</a>
                </div>
              </div><!-- /.l-contact__inner__company -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </div>


      <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>