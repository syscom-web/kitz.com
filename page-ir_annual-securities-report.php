<?php
/**
 * Template Name: 有価証券報告書
 *
 */
?>

<?php get_header(); ?>

<?php
if(have_posts()) :
while(have_posts()) :
the_post(); ?>

<main class="p-main">

    <section class="p-page-mv">
        <div class="p-page-mv__inner">
            <h1 class="p-page-mv__ttl p-page-mv__ttl--business">有価証券報告書</h1>
        </div>
    </section>
    <!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
            <ul class="c-breadcrumb__list">
                <li class="c-breadcrumb__item"><a title="ホーム" href="/">ホーム</a></li>
                <li class="c-breadcrumb__item"><a title="IR情報" href="/investor_ir/">IR情報</a></li>
                <li class="c-breadcrumb__item"><a title="IRライブラリー" href="/investor_ir/library/">IRライブラリー</a></li>
                <li class="c-breadcrumb__item">有価証券報告書</li>
            </ul>
        </div>
        <section class="p-page-ir">
            
            <!-- E-IR Parts -->
            <div class="p-page-ir__eir-list">
                <div class="p-page-ir__eir-list__container">
                    <div class="p-page-ir__eir-list__inner">
                        <div class="p-page-ir__eir-list__body__title">
                            <h3>
                                有価証券報告書
                            </h3>
                        </div>
                        <div class="p-page-ir__eir-list__body">
                          <div class="eir" data-area-name="area_yuho_012"></div>
                        </div>
                    </div>
                </div>
                <div class="p-page-ir__eir-list__container">
                    <div class="p-page-ir__eir-list__inner">
                        <div class="p-page-ir__eir-list__body__title">
                            <h3>
                                内部統制報告書
                            </h3>
                        </div>
                        <div class="p-page-ir__eir-list__body">
                          <div class="eir" data-area-name="area_naibu_020"></div>
                          <script type="text/javascript" src="/cms/wp-content/themes/kitz/js/eir_v5.js" charset="utf-8"></script>
                          <script type="text/javascript">
                          scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                          scriptLoader.load(
                          function(){setParts('file_ir_material_023');  }, showMaintenanceMessage);
                          </script>
                          <div class="eirTarget_yuhoNote"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /E-IR Parts -->

            <div class="p-page-menu">
                <ul>
                    <li><a href="<?php echo home_url() ?>/investor_ir/library/financial-results/">決算短信</a>
                    </li>
                    <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/library/materials/">決算補足説明資料・決算説明会</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/library/annual-securities-report/" class="current">有価証券報告書</a></li>
                    <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/library/financial-data/">Corporate Profile・財務データ</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/library/shareholder-reports/">株主通信</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/library/external-reports/">外部レポート</a></li>
                </ul>
            </div>



            <div class="l-contact">
                <div class="l-contact__inner">
                    <div class="l-contact__inner__product">
                        <h2 class="c-ttl--type01">IRに関するよくあるご質問<br class="is-tab">（FAQ）</h2>
                        <div class="l-contact__inner__link"><a href="/investor_ir/faq/" class="c-btn--type01" rel="noopener">IRに関するFAQ</a></div>
                    </div><!-- /.l-contact__inner__product -->
                    <div class="l-contact__inner__company">
                        <h2 class="c-ttl--type01">IRに関するお問い合わせ</h2>
                        <div class="l-contact__inner__link"><a href="/company/inquiry/?content=2" class="c-btn--type01">お問い合わせ</a>
                        </div>
                    </div><!-- /.l-contact__inner__company -->
                </div><!-- /.l-contact__inner -->
            </div><!-- /.l-contact -->
        </section>


        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php get_footer(); ?>