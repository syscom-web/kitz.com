<?php
if ($_SERVER['REQUEST_URI'] === '/en/contact/global/') {
  if (!$_GET['country']) {
    wp_safe_redirect('/en/contact/');
    exit;
  }
}
?>
<!-- new -->
<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns#">
  <meta name="google-site-verification" content="iLuwLq0XPTZ9sp6TIdxD4bSy0FrjI_0fbS1CgQt1Bw4" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&family=Poppins:wght@400;600&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&family=Poppins:wght@400;600&display=swap"
    media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.css">
  <?php if (is_front_page()): ?>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/slick.css" rel="stylesheet">
  <?php endif; ?>
  <link
    href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/css/style.css')); ?>"
    rel="stylesheet">

  <?php if (is_user_logged_in()): ?>
    <style type="text/css">
      header {
        margin-top: 32px;
      }
    </style>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="l-wrapper">
    <header class="l-header">
      <div class="l-header__container">

        <div class="l-header__upper">

          <?php if (is_home()): ?>
            <h1 class="l-header__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo-anniversary.svg"
                  alt="バルブの総合メーカー株式会社キッツ">
              </a>
            </h1>
          <?php else: ?>
            <p class="l-header__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo-anniversary.svg"
                  alt="バルブの総合メーカー株式会社キッツ">
              </a>
            </p>
          <?php endif; ?>

          <div class="l-header__upper--links">
            <ul>
              <li>
                <a href="https://www.kitz.com/en/" target="_blank" rel="noopener">
                  ENGLISH
                </a>
              </li>
              <li>
                <a href="<?php echo home_url('/company/inquiry/'); ?>">
                  お問い合わせ
                </a>
              </li>
              <li class="header-search_btn">
                <a href="javascript:void(0)" class="link--search">
                  サイト内検索
                </a>
              </li>
            </ul>
          </div>
          <div class="l-header__upper--sp">
            <div class="l-header__menu">
              <div><span></span><span></span><span></span></div>
            </div>
            <div class="header-search_btn">
              <a href="javascript:void(0)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-search_blue.svg"
                  alt="検索アイコン">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-search_white.png"
                  alt="検索アイコン">
              </a>
            </div>
          </div>
        </div>

        <div class="l-header__inner">
          <nav class="l-header__nav">
            <ul class="l-header__nav--upper">
              <li>
                <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&volumeID=KTZ00001&categoryID=4040000&designID=catalog_JPN"
                  class="link--external" target="_blank" rel="noopener">価格表・カタログ</a>
              </li>
              <li>
                <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" class="link--external upper-link--valve"
                  target="_blank" rel="noopener">製品検索<br>
                  <span>(図面・CAD・取扱説明書<br class="sp-br">・安全保障貿易書類など)</span>
                </a>
              </li>
            </ul>

            <ul class="l-header__nav__list u-pcDb">

              <!-- キッツについて -->
              <li class="l-navi__menu--mega">
                <span class="hover-mega">キッツについて</span>

                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">キッツについて</a>

                <div class="l-navi__menu--mega__container" style="display: none;">
                  <div class="l-navi__menu--mega__open-menu">

                    <p class="l-navi__menu--mega__open-menu__ttl">
                      <a href="/company/">キッツについて</a>
                    </p>

                    <ul>
                      <div>
                        <!-- 企業理念・長期経営ビジョン・行動指針 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/philosophy/')); ?>">
                            企業理念・長期経営ビジョン・行動指針
                          </a>
                        </li>

                        <!-- トップメッセージ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/message/')); ?>">トップメッセージ</a>
                        </li>

                        <!-- 会社概要 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/overview/')); ?>">
                            会社概要
                          </a>
                        </li>

                        <!-- キッツとは -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/about/')); ?>">キッツとは</a>
                        </li>
                      </div>

                      <div>
                        <!-- 国内外拠点 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/group_s/')); ?>">
                            国内外拠点
                          </a>
                        </li>

                        <!-- キッツグループ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/group_g/')); ?>">
                            キッツグループ
                          </a>
                        </li>

                        <!-- キッツのあゆみ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/history/')); ?>">
                            キッツのあゆみ
                          </a>
                        </li>

                        <!-- 数字でわかるキッツ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/understand_with_numbers')); ?>">
                            数字でわかるキッツ
                          </a>
                        </li>
                      </div>

                      <div>
                        <!-- 統合報告書（コーポレートレポート） -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/report/')); ?>">
                            統合報告書（コーポレートレポート）
                          </a>
                        </li>

                        <!-- KITZブランド -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/brand')); ?>" target="_blank">KITZブランド</a>
                        </li>

                        <!-- キッツグループイメージソング -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/song/')); ?>">
                            キッツグループイメージソング
                          </a>
                        </li>

                        <!-- 企業広告 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/ad/')); ?>">企業広告</a>
                        </li>
                      </div>

                      <div>
                        <!-- 須﨑優衣選手特設応援サイト -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/susaki')); ?>" target="_blank" rel="noopener">
                            須﨑優衣選手特設応援サイト
                          </a>
                        </li>

                        <!-- DX戦略
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/company/dx/')); ?>">DX戦略</a>
                        </li>-->

                        <!-- 資材調達情報 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a href="<?php echo esc_url(home_url('/procurement')); ?>">
                            資材調達情報
                          </a>
                        </li>
                      </div>
                    </ul>
                  </div>
                </div>
              </li>

              <!-- 製品・ソリューション -->
              <li class="l-navi__menu--mega">

                <span class="hover-mega">製品・ソリューション</span>

                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">製品・ソリューション</a>

                <div class="l-navi__menu--mega__container" style="display: none;">
                  <div class="l-navi__menu--mega__open-menu">

                    <p class="l-navi__menu--mega__open-menu__ttl">
                      <a href="/product/">製品・ソリューション</a>
                    </p>

                    <ul>
                      <div>
                        <!-- バルブ製品検索 -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                          <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener">
                            バルブ製品検索
                          </a>
                        </li>
                      </div>

                      <div>
                        <!-- 価格表・カタログ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                          <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&volumeID=KTZ00001&categoryID=4040000&designID=catalog_JPN"
                            target="_blank" rel="noopener">
                            価格表・カタログ
                          </a>
                        </li>
                      </div>

                      <div>
                        <!-- BIMデータ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                          <a href="<?php echo esc_url(home_url('/bim/')); ?>" rel="noopener">
                            BIMデータ
                          </a>
                        </li>
                      </div>
                    </ul>

                    <ul>

                      <div>

                        <!-- バルブ -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                          <a class="u-hoverNone ">
                            バルブ
                          </a>

                          <!-- サブメニュー -->
                          <ul class="l-navi-sub-menu-list">

                            <!-- 主要材質別 -->
                            <li class="sub-menu-item">
                              <a class="sub-menu-link-title u-hoverNone">
                                主要材質別
                              </a>
                            </li>

                            <!-- 青銅・黄銅バルブ -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/bronze-brass/')); ?>"
                                class="sub-menu-link-text">
                                青銅・黄銅バルブ
                              </a>
                            </li>

                            <!-- 鋳鉄バルブ -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/cast-iron/')); ?>"
                                class="sub-menu-link-text">
                                鋳鉄バルブ
                              </a>
                            </li>

                            <!-- ダクタイルバルブ -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/ductile/')); ?>"
                                class="sub-menu-link-text">
                                ダクタイルバルブ
                              </a>
                            </li>

                            <!-- ステンレス鋼バルブ鋳鋼バルブ -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/stainless-steel/')); ?>"
                                class="sub-menu-link-text">
                                ステンレス鋼バルブ
                              </a>
                            </li>

                            <!-- 鋳鋼バルブ -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/cast-steel/')); ?>"
                                class="sub-menu-link-text">
                                鋳鋼バルブ
                              </a>
                            </li>

                            <!-- 特殊材料・対腐食材料 -->
                            <li class="sub-menu-item">
                              <a href="<?php echo esc_url(home_url('/product/special-materials/')); ?>"
                                class="sub-menu-link-text">
                                特殊材料・対腐食材料
                              </a>
                            </li>
                          </ul>
                        </li>

                        <!-- 弁種別 -->
                        <ul class="l-navi-sub-menu-list">
                          <li class="sub-menu-item">
                            <a class="sub-menu-link-title u-hoverNone">
                              弁種別
                            </a>
                          </li>

                          <!-- サブメニュー -->

                          <!-- ボールバルブ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/ball/')); ?>" class="sub-menu-link-text">
                              ボールバルブ
                            </a>
                          </li>

                          <!-- バタフライバルブ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/butterfly/')); ?>"
                              class="sub-menu-link-text">
                              バタフライバルブ
                            </a>
                          </li>

                          <!-- ベローズバルブ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/bellows/')); ?>" class="sub-menu-link-text">
                              ベローズバルブ
                            </a>
                          </li>

                          <!-- ダイヤフラムバルブ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/diaphragm/')); ?>"
                              class="sub-menu-link-text">
                              ダイヤフラムバルブ
                            </a>
                          </li>

                          <!-- ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/ggc/')); ?>" class="sub-menu-link-text">
                              ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ
                            </a>
                          </li>

                          <!-- 自動操作バルブ -->
                          <li class="sub-menu-item">
                            <a href="<?php echo esc_url(home_url('/product/actuation/')); ?>" class="
                                  sub-menu-link-text">
                              自動操作バルブ
                            </a>
                          </li>
                        </ul>
              </li>
        </div>

        <div>

          <!-- サブメニュー -->
          <ul class="l-navi-sub-menu-list u-mt">

            <!-- 市場分野別 -->
            <li class="sub-menu-item">
              <a class="sub-menu-link-title u-hoverNone">
                市場分野別
              </a>
            </li>

            <!-- 建築設備 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/building/')); ?>" class="sub-menu-link-text">
                建築設備
              </a>
            </li>

            <!-- 機械装置 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/machinery/')); ?>" class="sub-menu-link-text">
                機械装置
              </a>
            </li>

            <!-- 石油化学 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/petrochemicals/')); ?>" class="sub-menu-link-text">
                石油化学
              </a>
            </li>

            <!-- 水素・脱炭素 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/hydrogen/')); ?>" class="sub-menu-link-text">
                水素・脱炭素
              </a>
            </li>

            <!-- 機能性化学 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/fine-chemical/')); ?>" class="sub-menu-link-text">
                機能性化学
              </a>
            </li>

            <!-- 半導体装置 -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/semiconductor-equipment/')); ?>"
                class="sub-menu-link-text">
                半導体装置
              </a>
            </li>

            <!-- フィルター -->
            <li class="sub-menu-item">
              <a href="<?php echo esc_url(home_url('/product/filters/')); ?>" class="sub-menu-link-text">
                フィルター
              </a>
            </li>
          </ul>
        </div>

        <div>

          <!-- 水素ソリューション -->
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="<?php echo esc_url(home_url('/product/hydrogen-related/')); ?>" rel="noopener">
              水素ソリューション
            </a>

            <!-- サブメニュー -->
            <ul class="l-navi-sub-menu-list">

              <!-- 水素ステーション -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/hydrogen-hrs/')); ?>" class="sub-menu-link u-fontWeight">
                  水素ステーション
                </a>
              </li>

              <!-- 水電解水素発生ユニット -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/hydrogen-production/')); ?>"
                  class="sub-menu-link u-fontWeight">
                  水電解水素発生ユニット
                </a>
              </li>

              <!-- 水素ステーション用高圧バルブシリーズ -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/hydrogen-valve/')); ?>"
                  class="sub-menu-link u-fontWeight">
                  水素ステーション用高圧バルブシリーズ
                </a>
              </li>

              <!-- 液化水素用バルブ -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/hydrogen-lh2/')); ?>" class="sub-menu-link u-fontWeight">
                  液化水素用バルブ
                </a>
              </li>
            </ul>
          </li>

          <!-- 航空宇宙用バルブ -->
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="<?php echo esc_url(home_url('/product/aerospace/')); ?>" rel="noopener">
              航空宇宙用バルブ
            </a>
          </li>

          <!-- メンテナンス -->
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="<?php echo esc_url(home_url('/product/maintenance/')); ?>" rel="noopener">
              メンテナンス
            </a>

            <!-- サブメニュー -->
            <ul class="l-navi-sub-menu-list">

              <!-- KISMOS -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/kismos/')); ?>" class="sub-menu-link u-fontWeight">
                  KISMOS
                </a>
              </li>

              <!-- 安全管理ソリューション -->
              <li class="sub-menu-item">
                <a href="<?php echo esc_url(home_url('/product/maintenance/solution/')); ?>"
                  class="sub-menu-link u-fontWeight">
                  安全管理ソリューション
                </a>
              </li>
            </ul>
          </li>
        </div>

        <div class="u-mt">
          <!-- 水処理ソリューション -->
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="<?php echo esc_url(home_url('/product/water-solutions/')); ?>" rel="noopener">
              水処理ソリューション
            </a>

            <!-- サブメニュー -->
            <ul class="l-navi-sub-menu-list">

              <!-- キッツウォーターソリューションズ -->
              <li class="sub-menu-item">
                <a href="https://www.kitz.co.jp/kws/" target="_blank" rel="noopener" class="sub-menu-link u-fontWeight">
                  キッツウォーターソリューションズ
                </a>
              </li>

              <!-- 水循環ソリューション／産業 -->
              <li class="sub-menu-item">
                <a class="sub-menu-link u-fontWeight"
                  href="<?php echo esc_url(home_url('/product/water-solutions/#water')); ?>">
                  水循環ソリューション／産業
                </a>
              </li>

              <!-- 地域の水ソリューション／地域 -->
              <li class="sub-menu-item">
                <a class="sub-menu-link u-fontWeight"
                  href="<?php echo esc_url(home_url('/product/water-solutions/#region')); ?>">
                  地域の水ソリューション／地域
                </a>
              </li>

              <!-- 家庭の水ソリューション -->
              <li class="sub-menu-item">
                <a class="sub-menu-link u-fontWeight"
                  href="<?php echo esc_url(home_url('/product/water-solutions/#home')); ?>">
                  家庭の水ソリューション
                </a>
              </li>
            </ul>

          </li>

          <!-- 調達関連情報 -->
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="<?php echo esc_url(home_url('/product/procurement/')); ?>" rel="noopener">
              調達関連情報
            </a>

            <!-- サブメニュー -->
            <ul class="l-navi-sub-menu-list">

              <!-- お取引明細web照会サービス -->
              <li class="sub-menu-item">
                <a href="https://rbginger.eco-serv.jp/kitz/mypage/" target="_blank" rel="noopener"
                  class="sub-menu-link u-fontWeight">
                  お取引明細web照会サービス
                </a>
              </li>

              <!-- 貨物情報サービス -->
              <li class="sub-menu-item">
                <a href="https://www.kitz.co.jp/kamotsu/index_s.html" target="_blank" rel="noopener"
                  class="sub-menu-link u-fontWeight">
                  貨物情報サービス
                </a>
              </li>
            </ul>
          </li>
        </div>
        </ul>
      </div>
  </div>
  </li>

  <!-- 技術情報 -->
  <li class="l-navi__menu--mega">

    <span class="hover-mega">技術・品質関連情報</span>

    <a href="<?php echo esc_url(home_url('/technical-info/technology/')); ?>" class="l-navi__menu--mega-sp">技術</a>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <ul class="column3">

          <div>
            <p class="l-navi__menu--mega__open-menu__ttl">
              <a href="<?php echo esc_url(home_url('/technical-info/technology/')); ?>">
                技術
              </a>
            </p>

            <!-- KITZ Group イノベーションセンター -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/innovation-center/')); ?>" target="_blank" rel="noopener">
                KITZ Group イノベーションセンター
              </a>
            </li>

            <!-- 技術 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/technical-info/technology/#strong')); ?>">
                私たちの強み
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 一貫生産の強み -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/technology/strength/')); ?>"
                    class="sub-menu-link">
                    一貫生産の強み
                  </a>
                </li>

                <!-- 研究開発 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/technology/research_and_development/')); ?>"
                    class="sub-menu-link">
                    研究開発
                  </a>
                </li>

                <!-- 製造・品質管理 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/technology/production/')); ?>"
                    class=" sub-menu-link">
                    製造・品質管理
                  </a>
                </li>

                <!-- ネットワーク力 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/technology/global/')); ?>"
                    class=" sub-menu-link">
                    ネットワーク力
                  </a>
                </li>
              </ul>
            </li>

            <!-- バルブの基礎知識 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/reference/')); ?>">
                バルブの基礎知識
              </a>
            </li>

            <!-- 技術研修 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/training/')); ?>">
                技術研修
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- バルブの基礎（集合研修） -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/training/valve/')); ?>" class="sub-menu-link">
                    バルブの基礎（集合研修）
                  </a>
                </li>

                <!-- バルブの基礎（オンライン研修） -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/training/valve_online/')); ?>" class="sub-menu-link">
                    バルブの基礎（オンライン研修）
                  </a>
                </li>

                <!-- 自動弁の基礎講座（集合研修） -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/training/automatic/')); ?>" class=" sub-menu-link">
                    自動弁の基礎講座（集合研修）
                  </a>
                </li>

                <!-- 自動弁の基礎講座（オンライン研修） -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/training/automatic_online/')); ?>" class=" sub-menu-link">
                    自動弁の基礎講座（オンライン研修）
                  </a>
                </li>

                <!-- お問い合わせ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/training/inquiry/')); ?>" class=" sub-menu-link">
                    お問い合わせ
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>
            <p class="l-navi__menu--mega__open-menu__ttl u-beforenone">
              <a></a>
            </p>

            <!-- バルブ選定ツール -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/technical-info/selection-tool/')); ?>">
                バルブ選定ツール
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 製品検索 -->
                <li class="sub-menu-item">
                  <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener"
                    class="sub-menu-link">
                    製品検索
                  </a>
                </li>

                <!-- BIMデータ ダウンロード -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/bim/')); ?>" class=" sub-menu-link">
                    BIMデータ ダウンロード
                  </a>
                </li>

                <!-- CV値計算、圧力損失計算、単位換算、他 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/calculator/')); ?>" class="sub-menu-link">
                    CV値計算、圧力損失計算、単位換算、他
                  </a>
                </li>

                <!-- バルブサイジングシステム -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical/valve_sizing_system/')); ?>" class="sub-menu-link">
                    バルブサイジングシステム
                  </a>
                </li>

                <!-- 圧力損失および流体特性システム -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical/press_loss_and_flow_char/')); ?>"
                    class=" sub-menu-link">
                    圧力損失および流体特性システム
                  </a>
                </li>

                <!-- 逆止弁（チャッキ弁）適正流量／チャダリング確認システム -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical/check_valve_selection/')); ?>"
                    class=" sub-menu-link">
                    逆止弁（チャッキ弁）適正流量／チャダリング確認システム
                  </a>
                </li>

                <!-- 新型空気圧式アクチュエータ（BXシリーズ）取付セット判定 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/bx_actuator/')); ?>" class=" sub-menu-link">
                    新型空気圧式アクチュエータ（BXシリーズ）取付セット判定
                  </a>
                </li>

                <!-- バルブ選定によくある質問 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/faq/')); ?>" class=" sub-menu-link">
                    バルブ選定によくある質問
                  </a>
                </li>

                <!-- トラブルシューティング -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/troubleshooting/')); ?>" class=" sub-menu-link">
                    トラブルシューティング
                  </a>
                </li>
              </ul>
            </li>

            <!-- 技術支援ツール -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a class="u-hoverNone">
                技術支援ツール
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- お困りごとサポート -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/troublesupport/')); ?>" class="sub-menu-link">
                    お困りごとサポート
                  </a>
                </li>

                <!-- 品質のお困りごと・トラブルの未然防止に関わるお問い合わせ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/troublesupport/consultation/')); ?>" class="sub-menu-link">
                    品質のお困りごと・トラブルの未然防止に関わるお問い合わせ
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>

            <p class="l-navi__menu--mega__open-menu__ttl">
              <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質</a>
            </p>

            <!-- 品質向上（品質保証） -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a class="u-hoverNone">
                品質向上（品質保証）
              </a>

              <!-- サブメニュー -->
              <ul class=" l-navi-sub-menu-list">

                <!-- キッツグループ品質理念 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/qa/philosophy/')); ?>" class="sub-menu-link">
                    キッツグループ品質理念
                  </a>
                </li>

                <!-- 品質の取り組み -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/qa/initiatives/')); ?>" class="sub-menu-link">
                    品質の取り組み
                  </a>
                </li>

                <!-- キッツグループの取得認証 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/qa/acquired-certifications/')); ?>"
                    class="sub-menu-link">
                    キッツグループの取得認証
                  </a>
                </li>

                <!-- グローバルサポート体制 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/technical-info/qa/global-support/')); ?>"
                    class="sub-menu-link">
                    グローバルサポート体制
                  </a>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>

  </li>

  <!-- サステナビリティ -->
  <li class="l-navi__menu--mega">

    <span class="hover-mega">サステナビリティ</span>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/sustainability/">サステナビリティ</a>
        </p>

        <ul>
          <div>
            <!-- 新着情報 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/news/')); ?>">
                新着情報
              </a>
            </li>

            <!-- ピックアップ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/pickup/')); ?>">
                ピックアップ
              </a>
            </li>

            <!-- 担当役員メッセージ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/statement/')); ?>">
                担当役員メッセージ
              </a>
            </li>

            <!-- キッツグループのサステナビリティ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/about_sustainability/')); ?>">
                キッツグループのサステナビリティ
              </a>

              <ul class="l-navi-sub-menu-list">

                <!-- サステナビリティマネジメント -->
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title"
                    href="<?php echo esc_url(home_url('/sustainability/about_sustainability/management/')); ?>">
                    サステナビリティマネジメント
                  </a>
                </li>

                <!-- マテリアリティ（経営重点テーマ） -->
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title"
                    href="<?php echo esc_url(home_url('/sustainability/about_sustainability/keythemes/')); ?>">
                    マテリアリティ（経営重点テーマ）
                  </a>
                </li>

                <!-- イニシアティブへの参画と外部評価 -->
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title"
                    href="<?php echo esc_url(home_url('/sustainability/about_sustainability/external-initiatives/')); ?>">
                    イニシアティブへの参画と外部評価
                  </a>
                </li>
              </ul>

              <!-- サステナビリティ アクションブック -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/actionbook/')); ?>">
                サステナビリティ アクションブック
              </a>
            </li>

            <!--  統合報告書-->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/report/')); ?>">
                統合報告書
              </a>
            </li>

            <!-- ESGデータ集 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/sustainability/esg/')); ?>">
                ESGデータ集
              </a>
            </li>
  </li>
  </div>

  <!-- 環境 -->
  <div>
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/environment/')); ?>">
        環境
      </a>

      <!-- サブメニュー -->
      <ul class="l-navi-sub-menu-list">

        <!-- キッツグループ環境方針・環境長期ビジョン -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_plan/')); ?>">
            キッツグループ環境方針・環境長期ビジョン
          </a>
        </li>

        <!-- 環境マネジメントシステム -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_management/')); ?>">
            環境マネジメントシステム
          </a>
        </li>

        <!-- 環境会計 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_account/')); ?>">
            環境会計
          </a>
        </li>

        <!-- 製品・サービスにおける環境配慮 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_products/')); ?>">
            製品・サービスにおける環境配慮
          </a>
        </li>

        <!-- 気候変動への対応（TCFDに沿った開示） -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_warming/')); ?>">
            気候変動への対応（TCFDに沿った開示）
          </a>
        </li>

        <!-- 省資源 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_resource/')); ?>">
            省資源
          </a>
        </li>

        <!-- 廃棄物の管理 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_waste/')); ?>">
            廃棄物の管理
          </a>
        </li>

        <!-- 化学物質の適正管理と削減 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_chemical/')); ?>">
            化学物質の適正管理と削減
          </a>
        </li>

        <!-- 事業活動と環境負荷（マテリアルバランス） -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_material_balance/')); ?>">
            事業活動と環境負荷（マテリアルバランス）
          </a>
        </li>

        <!-- 環境リスクへの対応 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_risk/')); ?>">
            環境リスクへの対応
          </a>
        </li>

        <!-- 物流のグリーン化 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/env_distribution/')); ?>">
            物流のグリーン化
          </a>
        </li>

        <!-- グループ会社別データ -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/group-company/')); ?>">
            グループ会社別データ
          </a>
        </li>

        <!-- 編集方針 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/environment/policy/')); ?>">
            編集方針
          </a>
        </li>

        <!-- 算定基準 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/standard/')); ?>">
            算定基準
          </a>
        </li>

        <!-- キッツグループの事業活動 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/environment/business/')); ?>">
            キッツグループの事業活動
          </a>
        </li>

        <!-- キッツグループ環境・安全衛生ダイジェスト -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/environment/pdf/')); ?>">
            キッツグループ環境・安全衛生ダイジェスト
          </a>
        </li>
      </ul>
    </li>
  </div>

  <!-- 社会 -->
  <div>
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/social/')); ?>">
        社会
      </a>

      <ul class="l-navi-sub-menu-list">

        <!-- 人権尊重 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/social/human-rights/')); ?>">
            人権尊重
          </a>
        </li>

        <!-- 多様な人財の活躍 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/social/initiatives/')); ?>">
            多様な人財の活躍
          </a>
        </li>

        <!-- 健康経営と労働安全衛生の確保 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/social/safety-health/')); ?>">
            健康経営と労働安全衛生の確保
          </a>
        </li>

        <!-- サプライチェーンマネジメント -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/social/procurement/')); ?>">
            サプライチェーンマネジメント
          </a>
        </li>

        <!-- 社会貢献活動 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/social/report/')); ?>">
            社会貢献活動
          </a>
        </li>
      </ul>
    </li>

    <!-- ガバナンス -->
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/governance/')); ?>">
        ガバナンス
      </a>

      <ul class="l-navi-sub-menu-list">

        <!-- コーポレートガバナンス -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/governance/corporate-governance/')); ?>">
            コーポレートガバナンス
          </a>
        </li>

        <!-- 内部統制システム -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/governance/internal-control-system/')); ?>">
            内部統制システム
          </a>
        </li>

        <!-- コンプライアンス -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/governance/compliance/')); ?>">
            コンプライアンス
          </a>
        </li>

        <!-- リスクマネジメント -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/governance/risk-management/')); ?>">
            リスクマネジメント
          </a>
        </li>
      </ul>
    </li>
  </div>

  <div>
    <!-- 持続的な成長に向けた技術・知財戦略 -->
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/products/')); ?>">
        持続的な成長に向けた<br>技術・知財戦略
      </a>

      <!-- サブメニュー -->
      <ul class="l-navi-sub-menu-list">

        <!-- 技術・知財戦略の基本方針 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/products/intellectual/')); ?>">
            技術・知財戦略の基本方針
          </a>
        </li>

        <!-- 素材・成形技術 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/products/materials-molding/')); ?>">
            素材・成形技術
          </a>
        </li>

        <!-- シール技術 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/sealing/')); ?>">
            シール技術
          </a>
        </li>

        <!-- 分離・浄水技術 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title"
            href="<?php echo esc_url(home_url('/sustainability/products/water-purification/')); ?>">
            分離・浄水技術
          </a>
        </li>

        <!-- バルブの状態把握・故障予知技術 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/valve/')); ?>">
            バルブの状態把握・故障予知技術
          </a>
        </li>

        <!-- 半導体製造プロセス向けクリーン対応技術 -->
        <li class="sub-menu-item">
          <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/clean/')); ?>">
            半導体製造プロセス向けクリーン対応技術
          </a>
        </li>

      </ul>
    </li>

    <!-- 品質向上（品質保証） -->
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">
        品質向上（品質保証）
      </a>
    </li>

    <!-- ステークホルダーとの対話 -->
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/stakeholders/')); ?>">
        ステークホルダーとの対話
      </a>
    </li>

    <!-- サステナビリティファイナンス -->
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo esc_url(home_url('/sustainability/slb/')); ?>">
        サステナビリティファイナンス
      </a>
    </li>

  </div>
  </ul>
  </div>
  </div>
  </li>

  <!-- IR情報 -->
  <li class="l-navi__menu--mega">

    <span class="hover-mega">IR情報</span>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/investor_ir/">IR情報</a>
        </p>

        <ul>
          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/')); ?>">
                経営方針・戦略
              </a>

              <!-- サブメニュー -->
              <ul class=" l-navi-sub-menu-list">

                <!-- トップメッセージ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/message/')); ?>"
                    class="sub-menu-link">
                    トップメッセージ
                  </a>
                </li>

                <!-- 長期経営ビジョン -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_vision/')); ?>"
                    class="sub-menu-link">
                    長期経営ビジョン
                  </a>
                </li>

                <!-- 中期経営計画 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_plan/')); ?>"
                    class=" sub-menu-link">
                    中期経営計画
                  </a>
                </li>

                <!-- ディスクロージャー・ポリシー -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/disclosure_policy/')); ?>"
                    class=" sub-menu-link">
                    ディスクロージャー・ポリシー
                  </a>
                </li>
              </ul>
            </li>

            <!-- IRニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">
                IRニュース
              </a>
            </li>

            <!-- IRカレンダー -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/calendar/')); ?>">
                IRカレンダー
              </a>
            </li>

            <!-- IRに関するよくあるご質問（FAQ）-->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/faq/')); ?>">
                IRに関するよくあるご質問（FAQ）
              </a>
            </li>

            <!-- IRに関するお問い合わせ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/inquiry/company/?inquiry-cat=ir')); ?>">
                IRに関するお問い合わせ
              </a>
            </li>
          </div>

          <div>
            <!-- 業績・財務ハイライト -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/financial-highlights/')); ?>">
                業績・財務ハイライト
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 連結業績 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/consolidated-results/')); ?>"
                    class="sub-menu-link">
                    連結業績
                  </a>
                </li>

                <!-- セグメント別 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/segment/')); ?>" class="sub-menu-link">
                    セグメント別
                  </a>
                </li>

                <!-- 財務状況 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/highlight/')); ?>" class=" sub-menu-link">
                    財務状況
                  </a>
                </li>

                <!-- キャッシュ・フローの状況 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/cash-flows/')); ?>" class=" sub-menu-link">
                    キャッシュ・フローの状況
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>
            <!-- IRライブラリー -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/library/')); ?>">
                IRライブラリー
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 統合報告書 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/company/report/')); ?>" class="sub-menu-link">
                    統合報告書
                  </a>
                </li>

                <!-- 決算短信 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-results/')); ?>"
                    class="sub-menu-link">
                    決算短信
                  </a>
                </li>

                <!-- 決算補足説明資料・決算説明会（質疑応答・動画） -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/materials/')); ?>" class="sub-menu-link">
                    決算補足説明資料・決算説明会（質疑応答・動画）
                  </a>
                </li>

                <!-- 有価証券報告書 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/annual-securities-report/')); ?>"
                    class=" sub-menu-link">
                    有価証券報告書
                  </a>
                </li>

                <!-- Corporate Profile・財務データ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-data/')); ?>"
                    class=" sub-menu-link">
                    Corporate Profile・財務データ
                  </a>
                </li>

                <!-- 外部レポート -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/external-reports/')); ?>"
                    class=" sub-menu-link">
                    外部レポート
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>

            <!-- 株式関連情報 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/')); ?>">
                株式関連情報
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 株主総会 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/meetings/')); ?>"
                    class="sub-menu-link">
                    株主総会
                  </a>
                </li>

                <!-- 定款・株式取扱規程 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/handling-regulations/')); ?>"
                    class="sub-menu-link">
                    定款・株式取扱規程
                  </a>
                </li>

                <!-- 株式の状況 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/status-shares/')); ?>"
                    class=" sub-menu-link">
                    株式の状況
                  </a>
                </li>

                <!-- 配当方針・配当金 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/dividend/')); ?>"
                    class=" sub-menu-link">
                    配当方針・配当金
                  </a>
                </li>

                <!-- 社債・格付情報・アナリストカバレッジ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/debenture/')); ?>"
                    class=" sub-menu-link">
                    社債・格付情報・<br>アナリストカバレッジ
                  </a>
                </li>

                <!-- 株主優待 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/complimentary/')); ?>"
                    class=" sub-menu-link">
                    株主優待
                  </a>
                </li>

                <!-- 株式手続きのご案内 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/procedure/')); ?>"
                    class=" sub-menu-link">
                    株式手続きのご案内
                  </a>
                </li>

                <!-- 株券電子化について -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/electronic/')); ?>"
                    class=" sub-menu-link">
                    株券電子化について
                  </a>
                </li>

                <!-- 決算公告 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/public/')); ?>"
                    class=" sub-menu-link">
                    決算公告
                  </a>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- お知らせ -->
  <li class="l-navi__menu--mega">

    <span class="hover-mega">お知らせ</span>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/notice/">お知らせ</a>
        </p>

        <ul>
          <div>
            <!-- ニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/notice/')); ?>">
                ニュース
              </a>
            </li>
          </div>

          <div>
            <!-- IRニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">
                IRニュース
              </a>
            </li>
          </div>

          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/news/')); ?>">
                ニュース（製品プロダクト）
              </a>
            </li>
          </div>

          <div>
            <!-- メンテナンス -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/maintenance/')); ?>">
                メンテナンス
              </a>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- 採用情報 -->
  <li>
    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" target="_blank" rel="noopener">採用情報</a>
  </li>
  </ul>

  <ul class="l-header__nav__list u-tabDb">

    <!-- キッツについて -->
    <li class="l-navi__menu--mega">

      <a class="l-navi__menu--mega-sp" href="javascript:void(0)">キッツについて</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="<?php echo esc_url(home_url('/company/')); ?>">キッツについて</a>
          </p>

          <ul>
            <!-- 企業理念・長期経営ビジョン・行動指針 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/philosophy/')); ?>" class="title">
                企業理念・長期経営ビジョン・行動指針
              </a>
            </li>

            <!-- トップメッセージ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/message/')); ?>" class="title">トップメッセージ</a>
            </li>

            <!-- 会社概要 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/overview/')); ?>" class="title">
                会社概要
              </a>
            </li>

            <!-- キッツとは -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/about/')); ?>" class="title">キッツとは</a>
            </li>

            <!-- 国内外拠点 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/group_s/')); ?>" class="title">
                国内外拠点
              </a>
            </li>

            <!-- キッツグループ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/group_g/')); ?>" class="title">
                キッツグループ
              </a>
            </li>

            <!-- キッツのあゆみ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/history//')); ?>" class="title">
                キッツのあゆみ
              </a>
            </li>

            <!-- 数字でわかるキッツ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/understand_with_numbers/')); ?>" class="title">
                数字でわかるキッツ
              </a>
            </li>

            <!-- 統合報告書（コーポレートレポート） -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/report/')); ?>" class="title">
                統合報告書（コーポレートレポート）
              </a>
            </li>

            <!-- KITZブランド -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/brand')); ?>" target="_blank" class="title">KITZブランド</a>
            </li>

            <!-- キッツグループイメージソング -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/song/')); ?>" class="title">
                キッツグループイメージソング
              </a>
            </li>

            <!-- 企業広告 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/ad/')); ?>" class="title">企業広告</a>
            </li>

            <!-- 須﨑優衣選手特設応援サイト -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/susaki/')); ?>" target="_blank" rel="noopener" class="title">
                須﨑優衣選手特設応援サイト
              </a>
            </li>

            <!-- DX戦略
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo esc_url(home_url('/company/dx/')); ?>">DX戦略</a>
                      </li>-->

            <!-- 資材調達情報 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/procurement/')); ?>" class="title">
                資材調達情報
              </a>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <!-- 製品・ソリューション -->
    <li class="l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">製品・ソリューション</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="/product/">製品・ソリューション</a>
          </p>

          <ul>

            <div class="u-gap">
              <!-- バルブ製品検索 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener">
                  バルブ製品検索
                </a>
              </li>

              <!-- 価格表・カタログ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&amp;volumeID=KTZ00001&amp;categoryID=4040000&amp;designID=catalog_JPN"
                  target="_blank" rel="noopener">
                  価格表・カタログ
                </a>
              </li>
              <!-- BIMデータ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="<?php echo esc_url(home_url('/bim/')); ?>" rel="noopener">
                  BIMデータ
                </a>
              </li>
            </div>

            <!-- バルブ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list u-flex">

                <div>
                  <a class="title">
                    バルブ
                  </a>

                  <!-- 主要材質別 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title">
                      主要材質別
                    </a>
                  </li>

                  <!-- 青銅・黄銅バルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/bronze-brass/')); ?>"
                      class="sub-menu-link-text u-mt10">
                      青銅・黄銅バルブ
                    </a>
                  </li>

                  <!-- 鋳鉄バルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/cast-iron/')); ?>" class="sub-menu-link-text">
                      鋳鉄バルブ
                    </a>
                  </li>

                  <!-- ダクタイルバルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/ductile/')); ?>" class="sub-menu-link-text">
                      ダクタイルバルブ
                    </a>
                  </li>

                  <!-- ステンレス鋼バルブ鋳鋼バルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/stainless-steel/')); ?>" class="sub-menu-link-text">
                      ステンレス鋼バルブ
                    </a>
                  </li>

                  <!-- 鋳鋼バルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/cast-steel/')); ?>" class="sub-menu-link-text">
                      鋳鋼バルブ
                    </a>
                  </li>

                  <!-- 特殊材料・対腐食材料 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/special-materials/')); ?>"
                      class="sub-menu-link-text">
                      特殊材料・対腐食材料
                    </a>
                  </li>

                  <!-- 弁種別 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title">
                      弁種別
                    </a>
                  </li>

                  <!-- ボールバルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/ball/')); ?>" class="sub-menu-link-text">
                      ボールバルブ
                    </a>
                  </li>

                  <!-- バタフライバルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/butterfly/')); ?>" class="sub-menu-link-text">
                      バタフライバルブ
                    </a>
                  </li>

                  <!-- ベローズバルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/bellows/')); ?>" class="sub-menu-link-text">
                      ベローズバルブ
                    </a>
                  </li>

                  <!-- ダイヤフラムバルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/diaphragm/')); ?>" class="sub-menu-link-text">
                      ダイヤフラムバルブ
                    </a>
                  </li>

                  <!-- ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/ggc/')); ?>" class="sub-menu-link-text">
                      ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ
                    </a>
                  </li>

                  <!-- 自動操作バルブ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/actuation/')); ?>" class="sub-menu-link-text">
                      自動操作バルブ
                    </a>
                  </li>

                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title">
                      市場分野別
                    </a>
                  </li>

                  <!-- 建築設備 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/building/')); ?>" class="sub-menu-link-text">
                      建築設備
                    </a>
                  </li>

                  <!-- 機械装置 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/machinery/')); ?>" class="sub-menu-link-text">
                      機械装置
                    </a>
                  </li>

                  <!-- 石油化学 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/petrochemicals/')); ?>" class="sub-menu-link-text">
                      石油化学
                    </a>
                  </li>

                  <!-- 石油化学 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/hydrogen/')); ?>" class="sub-menu-link-text">
                      水素・脱炭素
                    </a>
                  </li>

                  <!-- 機能性化学 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/fine-chemical/')); ?>" class="sub-menu-link-text">
                      機能性化学
                    </a>
                  </li>

                  <!-- 半導体装置 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/semiconductor-equipment/')); ?>"
                      class="sub-menu-link-text">
                      半導体装置
                    </a>
                  </li>

                  <!-- フィルター -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/product/filters/')); ?>" class="sub-menu-link-text">
                      フィルター
                    </a>
                  </li>

                </div>

                <div>
                  <!-- 水素ソリューション -->
                  <li class=" menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo esc_url(home_url('/product/hydrogen-related/')); ?>" rel="noopener"
                      class="title">
                      水素ソリューション
                    </a>

                    <!-- サブメニュー -->
                    <ul class="l-navi-sub-menu-list">

                      <!-- 水素ステーション -->
                      <li class="sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/hydrogen-hrs/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          水素ステーション
                        </a>
                      </li>

                      <!-- 水電解水素発生ユニット -->
                      <li class="sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/hydrogen-production/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          水電解水素発生ユニット
                        </a>
                      </li>

                      <!-- 水素ステーション用高圧バルブシリーズ -->
                      <li class=" sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/hydrogen-valve/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          水素ステーション用高圧バルブシリーズ
                        </a>
                      </li>

                      <!-- 液化水素用バルブ -->
                      <li class=" sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/hydrogen-lh2/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          液化水素用バルブ
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- 航空宇宙用バルブ -->
                  <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo esc_url(home_url('/product/aerospace/')); ?>" rel="noopener"
                      class="title u-mt20">
                      航空宇宙用バルブ
                    </a>
                  </li>

                  <!-- メンテナンス -->
                  <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo esc_url(home_url('/product/maintenance/')); ?>" rel="noopener"
                      class="title u-mt20">
                      メンテナンス
                    </a>

                    <!-- サブメニュー -->
                    <ul class="l-navi-sub-menu-list">

                      <!-- KISMOS -->
                      <li class="sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/kismos/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          KISMOS
                        </a>
                      </li>

                      <!-- 安全管理ソリューション -->
                      <li class="sub-menu-item">
                        <a href="<?php echo esc_url(home_url('/product/maintenance/solution/')); ?>"
                          class="sub-menu-link u-fontWeight">
                          安全管理ソリューション
                        </a>
                      </li>
                    </ul>
                  </li>
                </div>

                <div>
                  <!-- 水処理ソリューション -->
                  <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo esc_url(home_url('/product/water-solutions/')); ?>" rel="noopener"
                      class="title">
                      水処理ソリューション
                    </a>

                    <!-- サブメニュー -->
                    <ul class=" l-navi-sub-menu-list">

                      <!-- キッツウォーターソリューションズ -->
                      <li class="sub-menu-item">
                        <a href="https://www.kitz.co.jp/kws/" target="_blank" rel="noopener"
                          class="sub-menu-link u-fontWeight">
                          キッツウォーターソリューションズ
                        </a>
                      </li>

                      <!-- 水循環ソリューション／産業 -->
                      <li class="sub-menu-item">
                        <a class="sub-menu-link u-fontWeight"
                          href="<?php echo esc_url(home_url('/product/water-solutions/#water')); ?>">
                          水循環ソリューション／産業
                        </a>
                      </li>

                      <!-- 地域の水ソリューション／地域 -->
                      <li class="sub-menu-item">
                        <a class="sub-menu-link u-fontWeight"
                          href="<?php echo esc_url(home_url('/product/water-solutions/#region')); ?>">
                          地域の水ソリューション／地域
                        </a>
                      </li>

                      <!-- 家庭の水ソリューション -->
                      <li class="sub-menu-item">
                        <a class="sub-menu-link u-fontWeight"
                          href="<?php echo esc_url(home_url('/product/water-solutions/#home')); ?>">
                          家庭の水ソリューション
                        </a>
                      </li>
                    </ul>

                  </li>

                  <!-- 調達関連情報 -->
                  <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo esc_url(home_url('/product/procurement/')); ?>" rel="noopener"
                      class="title u-mt20">
                      調達関連情報
                    </a>

                    <!-- サブメニュー -->
                    <ul class="l-navi-sub-menu-list">

                      <!-- お取引明細web照会サービス -->
                      <li class="sub-menu-item">
                        <a href="https://rbginger.eco-serv.jp/kitz/mypage/" target="_blank" rel="noopener"
                          class="sub-menu-link u-fontWeight">
                          お取引明細web照会サービス
                        </a>
                      </li>

                      <!-- 貨物情報サービス -->
                      <li class="sub-menu-item">
                        <a href="https://www.kitz.co.jp/kamotsu/index_s.html" target="_blank" rel="noopener"
                          class="sub-menu-link u-fontWeight">
                          貨物情報サービス
                        </a>
                      </li>
                    </ul>
                  </li>
                </div>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </li>

    <!-- 技術情報 -->
    <li class="l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">技術・品質関連情報</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="<?php echo esc_url(home_url('/technical-info/technology/')); ?>">技術</a>
          </p>

          <ul>
            <div>
              <!-- KITZ Group イノベーションセンター -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/innovation-center/')); ?>" target="_blank" rel="noopener"
                  class="title">
                  KITZ Group イノベーションセンター
                </a>
              </li>

              <!-- 技術 -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a class="title" href="<?php echo esc_url(home_url('/technical-info/technology/#strong')); ?>">
                  私たちの強み
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!--　一貫生産の強み -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/strength/')); ?>"
                      class="sub-menu-link">
                      一貫生産の強み
                    </a>
                  </li>

                  <!-- 研究開発 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/research_and_development/')); ?>"
                      class="sub-menu-link">
                      研究開発
                    </a>
                  </li>

                  <!-- 製造・品質管理 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/production/')); ?>"
                      class=" sub-menu-link">
                      製造・品質管理
                    </a>
                  </li>

                  <!-- ネットワーク力 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/global/')); ?>"
                      class=" sub-menu-link">
                      ネットワーク力
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- バルブの基礎知識 -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/reference/')); ?>" class="title">
                  バルブの基礎知識
                </a>
              </li>

              <!-- 技術研修 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/training/')); ?>" class="title">
                  技術研修
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- バルブの基礎（集合研修） -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/valve/')); ?>" class="sub-menu-link">
                      バルブの基礎（集合研修）
                    </a>
                  </li>

                  <!-- バルブの基礎（オンライン研修） -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/valve_online/')); ?>" class="sub-menu-link">
                      バルブの基礎（オンライン研修）
                    </a>
                  </li>

                  <!-- 自動弁の基礎講座（集合研修） -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/automatic/')); ?>" class=" sub-menu-link">
                      自動弁の基礎講座（集合研修）
                    </a>
                  </li>

                  <!-- 自動弁の基礎講座（オンライン研修） -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/automatic_online/')); ?>" class=" sub-menu-link">
                      自動弁の基礎講座（オンライン研修）
                    </a>
                  </li>

                  <!-- お問い合わせ -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/inquiry/')); ?>" class=" sub-menu-link">
                      お問い合わせ
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- バルブ選定ツール -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/technical-info/selection-tool/')); ?>" class="title">
                  バルブ選定ツール
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- 製品検索 -->
                  <li class="sub-menu-item">
                    <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener"
                      class=" sub-menu-link">
                      製品検索
                    </a>
                  </li>

                  <!-- BIMデータ ダウンロード -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/bim/')); ?>" class=" sub-menu-link">
                      BIMデータ ダウンロード
                    </a>
                  </li>

                  <!-- CV値計算、圧力損失計算、単位換算、他 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/calculator/')); ?>" class="sub-menu-link">
                      CV値計算、圧力損失計算、単位換算、他
                    </a>
                  </li>

                  <!-- バルブサイジングシステム -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/valve_sizing_system/')); ?>" class="sub-menu-link">
                      バルブサイジングシステム
                    </a>
                  </li>

                  <!-- 圧力損失および流体特性システム -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/press_loss_and_flow_char/')); ?>"
                      class=" sub-menu-link">
                      圧力損失および流体特性システム
                    </a>
                  </li>

                  <!-- 逆止弁（チャッキ弁）適正流量／チャダリング確認システム -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/check_valve_selection/')); ?>"
                      class=" sub-menu-link">
                      逆止弁（チャッキ弁）適正流量／チャダリング確認システム
                    </a>
                  </li>

                  <!-- 新型空気圧式アクチュエータ（BXシリーズ）取付セット判定 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/bx_actuator/')); ?>" class=" sub-menu-link">
                      新型空気圧式アクチュエータ（BXシリーズ）取付セット判定
                    </a>
                  </li>

                  <!-- バルブ選定によくある質問 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class=" sub-menu-link">
                      バルブ選定によくある質問
                    </a>
                  </li>

                  <!-- トラブルシューティング -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troubleshooting/')); ?>" class=" sub-menu-link">
                      トラブルシューティング
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- 技術支援ツール -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a class="u-hoverNone title">
                  技術支援ツール
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- お困りごとサポート -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troublesupport/')); ?>" class="sub-menu-link">
                      お困りごとサポート
                    </a>
                  </li>

                  <!-- 品質のお困りごと・トラブルの未然防止に関わるお問い合わせ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troublesupport/consultation/')); ?>" class="sub-menu-link">
                      品質のお困りごと・トラブルの未然防止に関わるお問い合わせ
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <p class="l-navi__menu--mega__open-menu__ttl">
              <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質</a>
            </p>

            <div>

              <!-- 品質向上（品質保証） -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">

                <a class="u-hoverNone title">
                  品質向上（品質保証）
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- キッツグループ品質理念 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/philosophy/')); ?>" class="sub-menu-link">
                      キッツグループ品質理念
                    </a>
                  </li>

                  <!-- 品質の取り組み -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/initiatives/')); ?>" class="sub-menu-link">
                      品質の取り組み
                    </a>
                  </li>

                  <!-- キッツグループの取得認証 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/acquired-certifications/')); ?>"
                      class="sub-menu-link">
                      キッツグループの取得認証
                    </a>
                  </li>

                  <!-- グローバルサポート体制 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/global-support/')); ?>"
                      class="sub-menu-link">
                      グローバルサポート体制
                    </a>
                  </li>
                </ul>
              </li>
            </div>
          </ul>
        </div>
      </div>

    </li>

    <!-- サステナビリティ -->
    <li class=" l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">サステナビリティ</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="/sustainability/">サステナビリティ</a>
          </p>

          <ul>
            <div>
              <!-- 新着情報 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/news/')); ?>" class="title">
                  新着情報
                </a>
              </li>

              <!-- ピックアップ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/pickup/')); ?>" class="title">
                  ピックアップ
                </a>
              </li>

              <!-- 担当役員メッセージ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/statement/')); ?>" class="title">
                  担当役員メッセージ
                </a>
              </li>

              <!-- キッツグループのサステナビリティ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/about_sustainability/')); ?>" class="title">
                  キッツグループのサステナビリティ
                </a>

                <ul class="l-navi-sub-menu-list">

                  <!-- サステナビリティマネジメント -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/management/')); ?>">
                      サステナビリティマネジメント
                    </a>
                  </li>

                  <!-- マテリアリティ（経営重点テーマ） -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/keythemes/')); ?>">
                      マテリアリティ（経営重点テーマ）
                    </a>
                  </li>

                  <!-- イニシアティブへの参画と外部評価 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/external-initiatives/')); ?>">
                      イニシアティブへの参画と外部評価
                    </a>
                  </li>
                </ul>

                <!-- サステナビリティ アクションブック -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/actionbook/')); ?>" class="title">
                  サステナビリティ アクションブック
                </a>
              </li>

              <!--  統合報告書-->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/company/report/')); ?>" class="title">
                  統合報告書
                </a>
              </li>

              <!-- ESGデータ集 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/esg/')); ?>" class="title">
                  ESGデータ集
                </a>
              </li>
    </li>
    </div>

    <!-- 環境 -->
    <div>
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/environment/')); ?>" class="title">
          環境
        </a>

        <!-- サブメニュー -->
        <ul class="l-navi-sub-menu-list">

          <!-- キッツグループ環境方針・環境長期ビジョン -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_plan/')); ?>">
              キッツグループ環境方針・環境長期ビジョン
            </a>
          </li>

          <!-- 環境マネジメントシステム -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_management/')); ?>">
              環境マネジメントシステム
            </a>
          </li>

          <!-- 環境会計 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_account/')); ?>">
              環境会計
            </a>
          </li>

          <!-- 製品・サービスにおける環境配慮 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_products/')); ?>">
              製品・サービスにおける環境配慮
            </a>
          </li>

          <!-- 気候変動への対応（TCFDに沿った開示） -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_warming/')); ?>">
              気候変動への対応（TCFDに沿った開示）
            </a>
          </li>

          <!-- 省資源 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_resource/')); ?>">
              省資源
            </a>
          </li>

          <!-- 廃棄物の管理 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_waste/')); ?>">
              廃棄物の管理
            </a>
          </li>

          <!-- 化学物質の適正管理と削減 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_chemical/')); ?>">
              化学物質の適正管理と削減
            </a>
          </li>

          <!-- 事業活動と環境負荷（マテリアルバランス） -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_material_balance/')); ?>">
              事業活動と環境負荷（マテリアルバランス）
            </a>
          </li>

          <!-- 環境リスクへの対応 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_risk/')); ?>">
              環境リスクへの対応
            </a>
          </li>

          <!-- 物流のグリーン化 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_distribution/')); ?>">
              物流のグリーン化
            </a>
          </li>

          <!-- グループ会社別データ -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/group-company/')); ?>">
              グループ会社別データ
            </a>
          </li>

          <!-- 編集方針 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/policy/')); ?>">
              編集方針
            </a>
          </li>

          <!-- 算定基準 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/standard/')); ?>">
              算定基準
            </a>
          </li>

          <!-- キッツグループの事業活動 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/business/')); ?>">
              キッツグループの事業活動
            </a>
          </li>

          <!-- キッツグループ環境・安全衛生ダイジェスト -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/environment/pdf/')); ?>">
              キッツグループ環境・安全衛生ダイジェスト
            </a>
          </li>
        </ul>
      </li>
    </div>

    <!-- 社会 -->
    <div>
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/social/')); ?>" class="title">
          社会
        </a>

        <ul class="l-navi-sub-menu-list">

          <!-- 人権尊重 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/human-rights/')); ?>">
              人権尊重
            </a>
          </li>

          <!-- 多様な人財の活躍 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/initiatives/')); ?>">
              多様な人財の活躍
            </a>
          </li>

          <!-- 健康経営と労働安全衛生の確保 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/safety-health/')); ?>">
              健康経営と労働安全衛生の確保
            </a>
          </li>

          <!-- サプライチェーンマネジメント -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/procurement/')); ?>">
              サプライチェーンマネジメント
            </a>
          </li>

          <!-- 社会貢献活動 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/social/report/')); ?>">
              社会貢献活動
            </a>
          </li>
        </ul>
      </li>

      <!-- ガバナンス -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/governance/')); ?>" class="title">
          ガバナンス
        </a>

        <ul class="l-navi-sub-menu-list">

          <!-- コーポレートガバナンス -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/corporate-governance/')); ?>">
              コーポレートガバナンス
            </a>
          </li>

          <!-- 内部統制システム -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/internal-control-system/')); ?>">
              内部統制システム
            </a>
          </li>

          <!-- コンプライアンス -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/compliance/')); ?>">
              コンプライアンス
            </a>
          </li>

          <!-- リスクマネジメント -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/risk-management/')); ?>">
              リスクマネジメント
            </a>
          </li>
        </ul>
      </li>
    </div>

    <div>
      <!-- 持続的な成長に向けた技術・知財戦略 -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/products/')); ?>" class="title">
          持続的な成長に向けた技術・知財戦略
        </a>

        <!-- サブメニュー -->
        <ul class="l-navi-sub-menu-list">

          <!-- 技術・知財戦略の基本方針 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/intellectual/')); ?>">
              技術・知財戦略の基本方針
            </a>
          </li>

          <!-- 素材・成形技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/materials-molding/')); ?>">
              素材・成形技術
            </a>
          </li>

          <!-- シール技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/sealing/')); ?>">
              シール技術
            </a>
          </li>

          <!-- 分離・浄水技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/water-purification/')); ?>">
              分離・浄水技術
            </a>
          </li>

          <!-- バルブの状態把握・故障予知技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/valve/')); ?>">
              バルブの状態把握・故障予知技術
            </a>
          </li>

          <!-- 半導体製造プロセス向けクリーン対応技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/clean/')); ?>">
              半導体製造プロセス向けクリーン対応技術
            </a>
          </li>

        </ul>
      </li>

      <!-- 品質向上（品質保証） -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>" class="title">
          品質向上（品質保証）
        </a>
      </li>

      <!-- ステークホルダーとの対話 -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/stakeholders/')); ?>" class="title">
          ステークホルダーとの対話
        </a>
      </li>

      <!-- サステナビリティファイナンス -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/slb/')); ?>" class="title">
          サステナビリティファイナンス
        </a>
      </li>

    </div>
  </ul>
  </div>
  </div>
  </li>

  <!-- IR情報 -->
  <li class="l-navi__menu--mega">

    <a href="javascript:void(0)" class="l-navi__menu--mega-sp">IR情報</a>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/investor_ir/">IR情報</a>
        </p>

        <ul>
          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/')); ?>" class="title">
                経営方針・戦略
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- トップメッセージ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/message/')); ?>"
                    class="sub-menu-link">
                    トップメッセージ
                  </a>
                </li>

                <!-- 長期経営ビジョン -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_vision/')); ?>"
                    class="sub-menu-link">
                    長期経営ビジョン
                  </a>
                </li>

                <!-- 中期経営計画 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_plan/')); ?>"
                    class=" sub-menu-link">
                    中期経営計画
                  </a>
                </li>

                <!-- ディスクロージャー・ポリシー -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/disclosure_policy/')); ?>"
                    class=" sub-menu-link">
                    ディスクロージャー・ポリシー
                  </a>
                </li>
              </ul>
            </li>

            <!-- IRニュース -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>" class="title">
                IRニュース
              </a>
            </li>

            <!-- IRカレンダー -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/calendar/')); ?>" class="title">
                IRカレンダー
              </a>
            </li>

            <!-- IRに関するよくあるご質問（FAQ）-->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/faq/')); ?>" class="title">
                IRに関するよくあるご質問（FAQ）
              </a>
            </li>

            <!-- IRに関するお問い合わせ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/inquiry/company/?inquiry-cat=ir')); ?>" class="title">
                IRに関するお問い合わせ
              </a>
            </li>
          </div>

          <div>
            <!-- 業績・財務ハイライト -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/financial-highlights/')); ?>" class="title">
                業績・財務ハイライト
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 連結業績 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/consolidated-results/')); ?>"
                    class="sub-menu-link">
                    連結業績
                  </a>
                </li>

                <!-- セグメント別 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/segment/')); ?>" class="sub-menu-link">
                    セグメント別
                  </a>
                </li>

                <!-- 財務状況 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/highlight/')); ?>" class=" sub-menu-link">
                    財務状況
                  </a>
                </li>

                <!-- キャッシュ・フローの状況 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/cash-flows/')); ?>" class=" sub-menu-link">
                    キャッシュ・フローの状況
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>
            <!-- IRライブラリー -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/library/')); ?>" class="title">
                IRライブラリー
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 統合報告書 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/company/report/')); ?>" class="sub-menu-link">
                    統合報告書
                  </a>
                </li>

                <!-- 決算短信 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-results/')); ?>"
                    class="sub-menu-link">
                    決算短信
                  </a>
                </li>

                <!-- 決算補足説明資料・決算説明会（質疑応答・動画） -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/materials/')); ?>" class="sub-menu-link">
                    決算補足説明資料・決算説明会（質疑応答・動画）
                  </a>
                </li>

                <!-- 有価証券報告書 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/annual-securities-report/')); ?>"
                    class=" sub-menu-link">
                    有価証券報告書
                  </a>
                </li>

                <!-- Corporate Profile・財務データ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-data/')); ?>"
                    class=" sub-menu-link">
                    Corporate Profile・財務データ
                  </a>
                </li>

                <!-- 外部レポート -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/external-reports/')); ?>"
                    class=" sub-menu-link">
                    外部レポート
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>

            <!-- 株式関連情報 -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/')); ?>" class="title">
                株式関連情報
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 株主総会 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/meetings/')); ?>"
                    class="sub-menu-link">
                    株主総会
                  </a>
                </li>

                <!-- 定款・株式取扱規程 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/handling-regulations/')); ?>"
                    class="sub-menu-link">
                    定款・株式取扱規程
                  </a>
                </li>

                <!-- 株式の状況 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/status-shares/')); ?>"
                    class=" sub-menu-link">
                    株式の状況
                  </a>
                </li>

                <!-- 配当方針・配当金 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/dividend/')); ?>"
                    class=" sub-menu-link">
                    配当方針・配当金
                  </a>
                </li>

                <!-- 社債・格付情報・アナリストカバレッジ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/debenture/')); ?>"
                    class=" sub-menu-link">
                    社債・格付情報・アナリストカバレッジ
                  </a>
                </li>

                <!-- 株主優待 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/complimentary/')); ?>"
                    class=" sub-menu-link">
                    株主優待
                  </a>
                </li>

                <!-- 株式手続きのご案内 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/procedure/')); ?>"
                    class=" sub-menu-link">
                    株式手続きのご案内
                  </a>
                </li>

                <!-- 株券電子化について -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/electronic/')); ?>"
                    class=" sub-menu-link">
                    株券電子化について
                  </a>
                </li>

                <!-- 決算公告 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/public/')); ?>"
                    class=" sub-menu-link">
                    決算公告
                  </a>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- お知らせ -->
  <li class=" l-navi__menu--mega">

    <a href="javascript:void(0)" class="l-navi__menu--mega-sp">お知らせ</a>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/notice/">お知らせ</a>
        </p>

        <ul>
          <div>
            <!-- ニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/notice/')); ?>" class="title">
                ニュース
              </a>
            </li>
          </div>

          <div>
            <!-- IRニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>" class="title">
                IRニュース
              </a>
            </li>
          </div>

          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/news/')); ?>" class="title">
                ニュース（製品プロダクト）
              </a>
            </li>
          </div>

          <div>
            <!-- メンテナンス -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/maintenance/')); ?>" class="title">
                メンテナンス
              </a>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- 採用情報 -->
  <li>
    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" target="_blank" rel="noopener">採用情報</a>
  </li>
  </ul>

  <ul class="l-header__nav__list u-spDb">

    <!-- キッツについて -->
    <li class="l-navi__menu--mega">

      <a class="l-navi__menu--mega-sp" href="javascript:void(0)">キッツについて</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="<?php echo esc_url(home_url('/company/')); ?>">キッツについて</a>
          </p>

          <ul>
            <!-- 企業理念・長期経営ビジョン・行動指針 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/philosophy/')); ?>">
                企業理念・長期経営ビジョン・行動指針
              </a>
            </li>

            <!-- トップメッセージ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/message/')); ?>">トップメッセージ</a>
            </li>

            <!-- 会社概要 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/overview/')); ?>">
                会社概要
              </a>
            </li>

            <!-- キッツとは -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/about/')); ?>">キッツとは</a>
            </li>

            <!-- 国内外拠点 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/group_s/')); ?>">
                国内外拠点
              </a>
            </li>

            <!-- キッツグループ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/group_g/')); ?>">
                キッツグループ
              </a>
            </li>

            <!-- キッツのあゆみ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/history//')); ?>">
                キッツのあゆみ
              </a>
            </li>

            <!-- 数字でわかるキッツ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/understand_with_numbers/')); ?>">
                数字でわかるキッツ
              </a>
            </li>

            <!-- 統合報告書（コーポレートレポート） -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/report/')); ?>">
                統合報告書（コーポレートレポート）
              </a>
            </li>

            <!-- KITZブランド -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/brand')); ?>" target="_blank">KITZブランド</a>
            </li>

            <!-- キッツグループイメージソング -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/song/')); ?>">
                キッツグループイメージソング
              </a>
            </li>

            <!-- 企業広告 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/ad/')); ?>">企業広告</a>
            </li>

            <!-- 須﨑優衣選手特設応援サイト -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/susaki/')); ?>" target="_blank" rel="noopener">
                須﨑優衣選手特設応援サイト
              </a>
            </li>

            <!-- DX戦略
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo esc_url(home_url('/company/dx/')); ?>">DX戦略</a>
                      </li>-->

            <!-- 資材調達情報 -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/procurement/')); ?>">
                資材調達情報
              </a>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <!-- 製品・ソリューション -->
    <li class="l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">製品・ソリューション</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="/product/">製品・ソリューション</a>
          </p>

          <ul>

            <div class="u-gap">
              <!-- バルブ製品検索 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener">
                  バルブ製品検索
                </a>
              </li>

              <!-- 価格表・カタログ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&amp;volumeID=KTZ00001&amp;categoryID=4040000&amp;designID=catalog_JPN"
                  target="_blank" rel="noopener">
                  価格表・カタログ
                </a>
              </li>
              <!-- BIMデータ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page u-button">
                <a href="<?php echo esc_url(home_url('/bim/')); ?>" rel="noopener">
                  BIMデータ
                </a>
              </li>
            </div>

            <!-- バルブ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a>
                バルブ
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 主要材質別 -->
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title">
                    主要材質別
                  </a>
                </li>

                <!-- 青銅・黄銅バルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/bronze-brass/')); ?>" class="sub-menu-link-text">
                    青銅・黄銅バルブ
                  </a>
                </li>

                <!-- 鋳鉄バルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/cast-iron/')); ?>" class="sub-menu-link-text">
                    鋳鉄バルブ
                  </a>
                </li>

                <!-- ダクタイルバルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/ductile/')); ?>" class="sub-menu-link-text">
                    ダクタイルバルブ
                  </a>
                </li>

                <!-- ステンレス鋼バルブ鋳鋼バルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/stainless-steel/')); ?>" class="sub-menu-link-text">
                    ステンレス鋼バルブ
                  </a>
                </li>

                <!-- 鋳鋼バルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/cast-steel/')); ?>" class="sub-menu-link-text">
                    鋳鋼バルブ
                  </a>
                </li>

                <!-- 特殊材料・対腐食材料 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/special-materials/')); ?>" class="sub-menu-link-text">
                    特殊材料・対腐食材料
                  </a>
                </li>
              </ul>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">
                <!-- 弁種別 -->
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title">
                    弁種別
                  </a>
                </li>

                <!-- ボールバルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/ball/')); ?>" class="sub-menu-link-text">
                    ボールバルブ
                  </a>
                </li>

                <!-- バタフライバルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/butterfly/')); ?>" class="sub-menu-link-text">
                    バタフライバルブ
                  </a>
                </li>

                <!-- ベローズバルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/bellows/')); ?>" class="sub-menu-link-text">
                    ベローズバルブ
                  </a>
                </li>

                <!-- ダイヤフラムバルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/diaphragm/')); ?>" class="sub-menu-link-text">
                    ダイヤフラムバルブ
                  </a>
                </li>

                <!-- ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/ggc/')); ?>" class="sub-menu-link-text">
                    ゲートバルブ・グローブバルブ・チャッキバルブ・ストレーナ
                  </a>
                </li>

                <!-- 自動操作バルブ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/actuation/')); ?>" class="
                                      sub-menu-link-text">
                    自動操作バルブ
                  </a>
                </li>
              </ul>

              <!-- 市場分野別 -->
              <ul class="l-navi-sub-menu-list">
                <li class="sub-menu-item">
                  <a class="sub-menu-link-title">
                    市場分野別
                  </a>
                </li>

                <!-- 建築設備 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/building/')); ?>" class="sub-menu-link-text">
                    建築設備
                  </a>
                </li>

                <!-- 機械装置 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/machinery/')); ?>" class="sub-menu-link-text">
                    機械装置
                  </a>
                </li>

                <!-- 石油化学 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/petrochemicals/')); ?>" class="sub-menu-link-text">
                    石油化学
                  </a>
                </li>

                <!-- 石油化学 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/hydrogen/')); ?>" class="sub-menu-link-text">
                    水素・脱炭素
                  </a>
                </li>

                <!-- 機能性化学 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/fine-chemical/')); ?>" class="sub-menu-link-text">
                    機能性化学
                  </a>
                </li>

                <!-- 半導体装置 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/semiconductor-equipment/')); ?>"
                    class="sub-menu-link-text">
                    半導体装置
                  </a>
                </li>

                <!-- フィルター -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/filters/')); ?>" class="sub-menu-link-text">
                    フィルター
                  </a>
                </li>
              </ul>
            </li>

            <!-- 水素ソリューション -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/hydrogen-related/')); ?>" rel="noopener">
                水素ソリューション
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 水素ステーション -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/hydrogen-hrs/')); ?>"
                    class="sub-menu-link u-fontWeight">
                    水素ステーション
                  </a>
                </li>

                <!-- 水電解水素発生ユニット -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/hydrogen-production/')); ?>"
                    class="sub-menu-link u-fontWeight">
                    水電解水素発生ユニット
                  </a>
                </li>

                <!-- 水素ステーション用高圧バルブシリーズ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/hydrogen-valve/')); ?>"
                    class="sub-menu-link u-fontWeight">
                    水素ステーション用高圧バルブシリーズ
                  </a>
                </li>

                <!-- 液化水素用バルブ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/hydrogen-lh2/')); ?>"
                    class="sub-menu-link u-fontWeight">
                    液化水素用バルブ
                  </a>
                </li>
              </ul>
            </li>

            <!-- 航空宇宙用バルブ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/aerospace/')); ?>" rel="noopener">
                航空宇宙用バルブ
              </a>
            </li>

            <!-- メンテナンス -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/maintenance/')); ?>" rel="noopener">
                メンテナンス
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- KISMOS -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/kismos/')); ?>" class="sub-menu-link u-fontWeight">
                    KISMOS
                  </a>
                </li>

                <!-- 安全管理ソリューション -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/product/maintenance/solution/')); ?>"
                    class="sub-menu-link u-fontWeight">
                    安全管理ソリューション
                  </a>
                </li>
              </ul>
            </li>

            <div class=" u-mt">
              <!-- 水処理ソリューション -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/product/water-solutions/')); ?>" rel="noopener">
                  水処理ソリューション
                </a>

                <!-- サブメニュー -->
                <ul class=" l-navi-sub-menu-list">

                  <!-- キッツウォーターソリューションズ -->
                  <li class="sub-menu-item">
                    <a href="https://www.kitz.co.jp/kws/" target="_blank" rel="noopener"
                      class="sub-menu-link u-fontWeight">
                      キッツウォーターソリューションズ
                    </a>
                  </li>

                  <!-- 水循環ソリューション／産業 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link u-fontWeight"
                      href="<?php echo esc_url(home_url('/product/water-solutions/#water')); ?>">
                      水循環ソリューション／産業
                    </a>
                  </li>

                  <!-- 地域の水ソリューション／地域 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link u-fontWeight"
                      href="<?php echo esc_url(home_url('/product/water-solutions/#region')); ?>">
                      地域の水ソリューション／地域
                    </a>
                  </li>

                  <!-- 家庭の水ソリューション -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link u-fontWeight"
                      href="<?php echo esc_url(home_url('/product/water-solutions/#home')); ?>">
                      家庭の水ソリューション
                    </a>
                  </li>
                </ul>

              </li>

              <!-- 調達関連情報 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/product/procurement/')); ?>" rel="noopener">
                  調達関連情報
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- お取引明細web照会サービス -->
                  <li class="sub-menu-item">
                    <a href="https://rbginger.eco-serv.jp/kitz/mypage/" target="_blank" rel="noopener"
                      class="sub-menu-link u-fontWeight">
                      お取引明細web照会サービス
                    </a>
                  </li>

                  <!-- 貨物情報サービス -->
                  <li class="sub-menu-item">
                    <a href="https://www.kitz.co.jp/kamotsu/index_s.html" target="_blank" rel="noopener"
                      class="sub-menu-link u-fontWeight">
                      貨物情報サービス
                    </a>
                  </li>
                </ul>
              </li>
            </div>
          </ul>
        </div>
      </div>
    </li>

    <!-- 技術情報 -->
    <li class="l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">技術・品質関連情報</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="<?php echo esc_url(home_url('/technical-info/technology/')); ?>">技術</a>
          </p>

          <ul>
            <div>
              <!-- KITZ Group イノベーションセンター -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/innovation-center/')); ?>" target="_blank" rel="noopener">
                  KITZ Group イノベーションセンター
                </a>
              </li>

              <!-- 技術 -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/technical-info/technology/#strong')); ?>">
                  私たちの強み
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!--　一貫生産の強み -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/strength/')); ?>"
                      class="sub-menu-link">
                      一貫生産の強み
                    </a>
                  </li>

                  <!-- 研究開発 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/research_and_development/')); ?>"
                      class="sub-menu-link">
                      研究開発
                    </a>
                  </li>

                  <!-- 製造・品質管理 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/production/')); ?>"
                      class=" sub-menu-link">
                      製造・品質管理
                    </a>
                  </li>

                  <!-- ネットワーク力 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/technology/global/')); ?>"
                      class=" sub-menu-link">
                      ネットワーク力
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- バルブの基礎知識 -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/reference/')); ?>">
                  バルブの基礎知識
                </a>
              </li>

              <!-- 技術研修 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/training/')); ?>">
                  技術研修
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- バルブの基礎（集合研修） -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/valve/')); ?>" class="sub-menu-link">
                      バルブの基礎（集合研修）
                    </a>
                  </li>

                  <!-- バルブの基礎（オンライン研修） -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/valve_online/')); ?>" class="sub-menu-link">
                      バルブの基礎（オンライン研修）
                    </a>
                  </li>

                  <!-- 自動弁の基礎講座（集合研修） -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/automatic/')); ?>" class=" sub-menu-link">
                      自動弁の基礎講座（集合研修）
                    </a>
                  </li>

                  <!-- 自動弁の基礎講座（オンライン研修） -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/automatic_online/')); ?>" class=" sub-menu-link">
                      自動弁の基礎講座（オンライン研修）
                    </a>
                  </li>

                  <!-- お問い合わせ -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/training/inquiry/')); ?>" class=" sub-menu-link">
                      お問い合わせ
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- バルブ選定ツール -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/technical-info/selection-tool/')); ?>">
                  バルブ選定ツール
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- 製品検索 -->
                  <li class="sub-menu-item">
                    <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" rel="noopener"
                      class=" sub-menu-link">
                      製品検索
                    </a>
                  </li>

                  <!-- BIMデータ ダウンロード -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/bim/')); ?>" class=" sub-menu-link">
                      BIMデータ ダウンロード
                    </a>
                  </li>

                  <!-- CV値計算、圧力損失計算、単位換算、他 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/calculator/')); ?>" class="sub-menu-link">
                      CV値計算、圧力損失計算、単位換算、他
                    </a>
                  </li>

                  <!-- バルブサイジングシステム -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/valve_sizing_system/')); ?>" class="sub-menu-link">
                      バルブサイジングシステム
                    </a>
                  </li>

                  <!-- 圧力損失および流体特性システム -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/press_loss_and_flow_char/')); ?>"
                      class=" sub-menu-link">
                      圧力損失および流体特性システム
                    </a>
                  </li>

                  <!-- 逆止弁（チャッキ弁）適正流量／チャダリング確認システム -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical/check_valve_selection/')); ?>"
                      class=" sub-menu-link">
                      逆止弁（チャッキ弁）適正流量／チャダリング確認システム
                    </a>
                  </li>

                  <!-- バルブ選定によくある質問 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class=" sub-menu-link">
                      バルブ選定によくある質問
                    </a>
                  </li>

                  <!-- トラブルシューティング -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troubleshooting/')); ?>" class=" sub-menu-link">
                      トラブルシューティング
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div>
              <!-- 技術支援ツール -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a class="u-hoverNone">
                  技術支援ツール
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- お困りごとサポート -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troublesupport/')); ?>" class="sub-menu-link">
                      お困りごとサポート
                    </a>
                  </li>

                  <!-- 品質のお困りごと・トラブルの未然防止に関わるお問い合わせ -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/troublesupport/consultation/')); ?>" class="sub-menu-link">
                      品質のお困りごと・トラブルの未然防止に関わるお問い合わせ
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <p class="l-navi__menu--mega__open-menu__ttl">
              <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質</a>
            </p>

            <div>

              <!-- 品質向上（品質保証） -->
              <li class=" menu-item menu-item-type-post_type menu-item-object-page">

                <a class="u-hoverNone">
                  品質向上（品質保証）
                </a>

                <!-- サブメニュー -->
                <ul class="l-navi-sub-menu-list">

                  <!-- キッツグループ品質理念 -->
                  <li class="sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/philosophy/')); ?>" class="sub-menu-link">
                      キッツグループ品質理念
                    </a>
                  </li>

                  <!-- 品質の取り組み -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/initiatives/')); ?>" class="sub-menu-link">
                      品質の取り組み
                    </a>
                  </li>

                  <!-- キッツグループの取得認証 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/acquired-certifications/')); ?>"
                      class="sub-menu-link">
                      キッツグループの取得認証
                    </a>
                  </li>

                  <!-- グローバルサポート体制 -->
                  <li class=" sub-menu-item">
                    <a href="<?php echo esc_url(home_url('/technical-info/qa/global-support/')); ?>"
                      class="sub-menu-link">
                      グローバルサポート体制
                    </a>
                  </li>
                </ul>
              </li>
            </div>
          </ul>
        </div>
      </div>

    </li>

    <!-- サステナビリティ -->
    <li class=" l-navi__menu--mega">

      <a href="javascript:void(0)" class="l-navi__menu--mega-sp">サステナビリティ</a>

      <div class="l-navi__menu--mega__container" style="display: none;">
        <div class="l-navi__menu--mega__open-menu">

          <p class="l-navi__menu--mega__open-menu__ttl">
            <a href="/sustainability/">サステナビリティ</a>
          </p>

          <ul>
            <div>
              <!-- 新着情報 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/news/')); ?>">
                  新着情報
                </a>
              </li>

              <!-- ピックアップ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/pickup/')); ?>">
                  ピックアップ
                </a>
              </li>

              <!-- 担当役員メッセージ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/statement/')); ?>">
                  担当役員メッセージ
                </a>
              </li>

              <!-- キッツグループのサステナビリティ -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/about_sustainability/')); ?>">
                  キッツグループのサステナビリティ
                </a>

                <ul class="l-navi-sub-menu-list">

                  <!-- サステナビリティマネジメント -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/management/')); ?>">
                      サステナビリティマネジメント
                    </a>
                  </li>

                  <!-- マテリアリティ（経営重点テーマ） -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/keythemes/')); ?>">
                      マテリアリティ（経営重点テーマ）
                    </a>
                  </li>

                  <!-- イニシアティブへの参画と外部評価 -->
                  <li class="sub-menu-item">
                    <a class="sub-menu-link-title"
                      href="<?php echo esc_url(home_url('/sustainability/about_sustainability/external-initiatives/')); ?>">
                      イニシアティブへの参画と外部評価
                    </a>
                  </li>
                </ul>

                <!-- サステナビリティ アクションブック -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/actionbook/')); ?>">
                  サステナビリティ アクションブック
                </a>
              </li>

              <!--  統合報告書-->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/company/report/')); ?>">
                  統合報告書
                </a>
              </li>

              <!-- ESGデータ集 -->
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="<?php echo esc_url(home_url('/sustainability/esg/')); ?>">
                  ESGデータ集
                </a>
              </li>
    </li>
    </div>

    <!-- 環境 -->
    <div>
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/environment/')); ?>">
          環境
        </a>

        <!-- サブメニュー -->
        <ul class="l-navi-sub-menu-list">

          <!-- キッツグループ環境方針・環境長期ビジョン -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_plan/')); ?>">
              キッツグループ環境方針・環境長期ビジョン
            </a>
          </li>

          <!-- 環境マネジメントシステム -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_management/')); ?>">
              環境マネジメントシステム
            </a>
          </li>

          <!-- 環境会計 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_account/')); ?>">
              環境会計
            </a>
          </li>

          <!-- 製品・サービスにおける環境配慮 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_products/')); ?>">
              製品・サービスにおける環境配慮
            </a>
          </li>

          <!-- 気候変動への対応（TCFDに沿った開示） -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_warming/')); ?>">
              気候変動への対応（TCFDに沿った開示）
            </a>
          </li>

          <!-- 省資源 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_resource/')); ?>">
              省資源
            </a>
          </li>

          <!-- 廃棄物の管理 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_waste/')); ?>">
              廃棄物の管理
            </a>
          </li>

          <!-- 化学物質の適正管理と削減 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_chemical/')); ?>">
              化学物質の適正管理と削減
            </a>
          </li>

          <!-- 事業活動と環境負荷（マテリアルバランス） -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_material_balance/')); ?>">
              事業活動と環境負荷（マテリアルバランス）
            </a>
          </li>

          <!-- 環境リスクへの対応 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_risk/')); ?>">
              環境リスクへの対応
            </a>
          </li>

          <!-- 物流のグリーン化 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/env_distribution/')); ?>">
              物流のグリーン化
            </a>
          </li>

          <!-- グループ会社別データ -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/group-company/')); ?>">
              グループ会社別データ
            </a>
          </li>

          <!-- 編集方針 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/policy/')); ?>">
              編集方針
            </a>
          </li>

          <!-- 算定基準 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/standard/')); ?>">
              算定基準
            </a>
          </li>

          <!-- キッツグループの事業活動 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/environment/business/')); ?>">
              キッツグループの事業活動
            </a>
          </li>

          <!-- キッツグループ環境・安全衛生ダイジェスト -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/environment/pdf/')); ?>">
              キッツグループ環境・安全衛生ダイジェスト
            </a>
          </li>
        </ul>
      </li>
    </div>

    <!-- 社会 -->
    <div>
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/social/')); ?>">
          社会
        </a>

        <ul class="l-navi-sub-menu-list">

          <!-- 人権尊重 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/human-rights/')); ?>">
              人権尊重
            </a>
          </li>

          <!-- 多様な人財の活躍 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/initiatives/')); ?>">
              多様な人財の活躍
            </a>
          </li>

          <!-- 健康経営と労働安全衛生の確保 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/safety-health/')); ?>">
              健康経営と労働安全衛生の確保
            </a>
          </li>

          <!-- サプライチェーンマネジメント -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/social/procurement/')); ?>">
              サプライチェーンマネジメント
            </a>
          </li>

          <!-- 社会貢献活動 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/social/report/')); ?>">
              社会貢献活動
            </a>
          </li>
        </ul>
      </li>

      <!-- ガバナンス -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/governance/')); ?>">
          ガバナンス
        </a>

        <ul class="l-navi-sub-menu-list">

          <!-- コーポレートガバナンス -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/corporate-governance/')); ?>">
              コーポレートガバナンス
            </a>
          </li>

          <!-- 内部統制システム -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/internal-control-system/')); ?>">
              内部統制システム
            </a>
          </li>

          <!-- コンプライアンス -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/compliance/')); ?>">
              コンプライアンス
            </a>
          </li>

          <!-- リスクマネジメント -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/governance/risk-management/')); ?>">
              リスクマネジメント
            </a>
          </li>
        </ul>
      </li>
    </div>

    <div>
      <!-- 持続的な成長に向けた技術・知財戦略 -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/products/')); ?>">
          持続的な成長に向けた技術・知財戦略
        </a>

        <!-- サブメニュー -->
        <ul class="l-navi-sub-menu-list">

          <!-- 技術・知財戦略の基本方針 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/intellectual/')); ?>">
              技術・知財戦略の基本方針
            </a>
          </li>

          <!-- 素材・成形技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/materials-molding/')); ?>">
              素材・成形技術
            </a>
          </li>

          <!-- シール技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/sealing/')); ?>">
              シール技術
            </a>
          </li>

          <!-- 分離・浄水技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title"
              href="<?php echo esc_url(home_url('/sustainability/products/water-purification/')); ?>">
              分離・浄水技術
            </a>
          </li>

          <!-- バルブの状態把握・故障予知技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/valve/')); ?>">
              バルブの状態把握・故障予知技術
            </a>
          </li>

          <!-- 半導体製造プロセス向けクリーン対応技術 -->
          <li class="sub-menu-item">
            <a class="sub-menu-link-title" href="<?php echo esc_url(home_url('/sustainability/products/clean/')); ?>">
              半導体製造プロセス向けクリーン対応技術
            </a>
          </li>

        </ul>
      </li>

      <!-- 品質向上（品質保証） -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">
          品質向上（品質保証）
        </a>
      </li>

      <!-- ステークホルダーとの対話 -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/stakeholders/')); ?>">
          ステークホルダーとの対話
        </a>
      </li>

      <!-- サステナビリティファイナンス -->
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php echo esc_url(home_url('/sustainability/slb/')); ?>">
          サステナビリティファイナンス
        </a>
      </li>

    </div>
  </ul>
  </div>
  </div>
  </li>

  <!-- IR情報 -->
  <li class="l-navi__menu--mega">

    <a href="javascript:void(0)" class="l-navi__menu--mega-sp">IR情報</a>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/investor_ir/">IR情報</a>
        </p>

        <ul>
          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/')); ?>">
                経営方針・戦略
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- トップメッセージ -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/message/')); ?>"
                    class="sub-menu-link">
                    トップメッセージ
                  </a>
                </li>

                <!-- 長期経営ビジョン -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_vision/')); ?>"
                    class="sub-menu-link">
                    長期経営ビジョン
                  </a>
                </li>

                <!-- 中期経営計画 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/m_plan/')); ?>"
                    class=" sub-menu-link">
                    中期経営計画
                  </a>
                </li>

                <!-- ディスクロージャー・ポリシー -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/management-policy/disclosure_policy/')); ?>"
                    class=" sub-menu-link">
                    ディスクロージャー・ポリシー
                  </a>
                </li>
              </ul>
            </li>

            <!-- IRニュース -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">
                IRニュース
              </a>
            </li>

            <!-- IRカレンダー -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/calendar/')); ?>">
                IRカレンダー
              </a>
            </li>

            <!-- IRに関するよくあるご質問（FAQ）-->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/faq/')); ?>">
                IRに関するよくあるご質問（FAQ）
              </a>
            </li>

            <!-- IRに関するお問い合わせ -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/company/inquiry/company/?inquiry-cat=ir')); ?>">
                IRに関するお問い合わせ
              </a>
            </li>
          </div>

          <div>
            <!-- 業績・財務ハイライト -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/financial-highlights/')); ?>">
                業績・財務ハイライト
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 連結業績 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/consolidated-results/')); ?>"
                    class="sub-menu-link">
                    連結業績
                  </a>
                </li>

                <!-- セグメント別 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/segment/')); ?>" class="sub-menu-link">
                    セグメント別
                  </a>
                </li>

                <!-- 財務状況 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/highlight/')); ?>" class=" sub-menu-link">
                    財務状況
                  </a>
                </li>

                <!-- キャッシュ・フローの状況 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/cash-flows/')); ?>" class=" sub-menu-link">
                    キャッシュ・フローの状況
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>
            <!-- IRライブラリー -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/library/')); ?>">
                IRライブラリー
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 統合報告書 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/company/report/')); ?>" class="sub-menu-link">
                    統合報告書
                  </a>
                </li>

                <!-- 決算短信 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-results/')); ?>"
                    class="sub-menu-link">
                    決算短信
                  </a>
                </li>

                <!-- 決算補足説明資料・決算説明会（質疑応答・動画） -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/materials/')); ?>" class="sub-menu-link">
                    決算補足説明資料・決算説明会（質疑応答・動画）
                  </a>
                </li>

                <!-- 有価証券報告書 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/annual-securities-report/')); ?>"
                    class=" sub-menu-link">
                    有価証券報告書
                  </a>
                </li>

                <!-- Corporate Profile・財務データ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/financial-data/')); ?>"
                    class=" sub-menu-link">
                    Corporate Profile・財務データ
                  </a>
                </li>

                <!-- 外部レポート -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/library/external-reports/')); ?>"
                    class=" sub-menu-link">
                    外部レポート
                  </a>
                </li>
              </ul>
            </li>
          </div>

          <div>

            <!-- 株式関連情報 -->
            <li class=" menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/')); ?>">
                株式関連情報
              </a>

              <!-- サブメニュー -->
              <ul class="l-navi-sub-menu-list">

                <!-- 株主総会 -->
                <li class="sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/meetings/')); ?>"
                    class="sub-menu-link">
                    株主総会
                  </a>
                </li>

                <!-- 定款・株式取扱規程 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/handling-regulations/')); ?>"
                    class="sub-menu-link">
                    定款・株式取扱規程
                  </a>
                </li>

                <!-- 株式の状況 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/status-shares/')); ?>"
                    class=" sub-menu-link">
                    株式の状況
                  </a>
                </li>

                <!-- 配当方針・配当金 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/dividend/')); ?>"
                    class=" sub-menu-link">
                    配当方針・配当金
                  </a>
                </li>

                <!-- 社債・格付情報・アナリストカバレッジ -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/debenture/')); ?>"
                    class=" sub-menu-link">
                    社債・格付情報・アナリストカバレッジ
                  </a>
                </li>

                <!-- 株主優待 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/complimentary/')); ?>"
                    class=" sub-menu-link">
                    株主優待
                  </a>
                </li>

                <!-- 株式手続きのご案内 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/procedure/')); ?>"
                    class=" sub-menu-link">
                    株式手続きのご案内
                  </a>
                </li>

                <!-- 株券電子化について -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/electronic/')); ?>"
                    class=" sub-menu-link">
                    株券電子化について
                  </a>
                </li>

                <!-- 決算公告 -->
                <li class=" sub-menu-item">
                  <a href="<?php echo esc_url(home_url('/investor_ir/stock-information/public/')); ?>"
                    class=" sub-menu-link">
                    決算公告
                  </a>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- お知らせ -->
  <li class=" l-navi__menu--mega">

    <a href="javascript:void(0)" class="l-navi__menu--mega-sp">お知らせ</a>

    <div class="l-navi__menu--mega__container" style="display: none;">
      <div class="l-navi__menu--mega__open-menu">

        <p class="l-navi__menu--mega__open-menu__ttl">
          <a href="/notice/">お知らせ</a>
        </p>

        <ul>
          <div>
            <!-- ニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/notice/')); ?>">
                ニュース
              </a>
            </li>
          </div>

          <div>
            <!-- IRニュース -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">
                IRニュース
              </a>
            </li>
          </div>

          <div>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/product/news/')); ?>">
                ニュース（製品プロダクト）
              </a>
            </li>
          </div>

          <div>
            <!-- メンテナンス -->
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
              <a href="<?php echo esc_url(home_url('/maintenance/')); ?>">
                メンテナンス
              </a>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </li>

  <!-- 採用情報 -->
  <li>
    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" target="_blank" rel="noopener">採用情報</a>
  </li>
  </ul>

  <div class="l-header__nav__container none">
    <ul class="l-header__nav__links">
      <li class="link--global">
        <a href="https://www.kitz.com/en/" target="_blank" class="u-poppins">
          <span>ENGLISH</span>
        </a>
      </li>
      <li class="link--contact">
        <a href="/company/inquiry/">
          <span>お問い合わせ</span>
        </a>
      </li>
    </ul>
  </div>
  </nav>
  </div>

  <!-- /.l-header__inner -->
  <div class="l-header__search">
    <div class="l-header__search--mask"></div>
    <div class="l-header__search--container">
      <div class="inner">
        <dl>
          <dd>
            <ul class="l-header__search--links">
              <li><a target="_blank"
                  href="https://www.kitz-valvesearch.com/valve-search/ja/top">バルブ製品名や型番での検索はこちら</a><span>価格表・図面・CAD・カタログ・取扱説明書・<br>安全保障貿易書類（非該当証明書）など</span>
              </li>
              <li><a href="/faq/">バルブに関する<br>よくある質問</a></li>
              <li><a href="/troubleshooting/">バルブに関する<br>トラブルシューティング</a></li>
            </ul>
          </dd>
          <div class="l-header__search--box">
            <dt>
              キッツのサイト内を検索<br class="u-sp">
              <span>（バルブ製品名や型番での検索は、<br class="u-sp">上のボタンより検索してください）</span>
            </dt>
            <dd>
              <form id="cse-search-box" action="/search/">
                <input class="search-input" type="text" name="q" placeholder="キーワードを入力して下さい" />
                <input type="submit" name="sa" value="検索" />
              </form>
              <script async src="https://cse.google.com/cse.js?cx=a78156648cc2a43b3"></script>
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
  </div>
  </header>
  </div>

  <?php $show_floating_links = is_front_page() || is_page('product') || is_post_type_archive('product-news') || is_singular('product-news') || get_field('floating'); ?>
  <!-- floatingButton -->
  <div class="l-floatingButton<?php echo $show_floating_links ? '' : ' l-floatingButton--pagetop-only'; ?>">
    <ul class="l-floatingButton__list">
      <?php if ($show_floating_links): ?>
        <li class="l-floatingButton__item">
          <a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank" class="l-floatingButton__link">
            <span>
              バルブ<br class="u-br">製品検索
            </span>
          </a>
        </li>
        <li class="l-floatingButton__item">
          <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&volumeID=KTZ00001&categoryID=4040000&designID=catalog_JPN"
            target="_blank" class="l-floatingButton__link">
            <span>
              価格表•<br class="u-br">カタログ
            </span>
          </a>
        </li>
        <li class="l-floatingButton__item">
          <a href="https://www.kitz-valvesearch.com/user-management/ja/top?redirectUrl=%2Fvalve-search%2Fja%2FsecurityServices%2Fdeclaration"
            target="_blank" class="l-floatingButton__link">
            <span>
              安全保障<br class="u-br">貿易書類
            </span>
          </a>
        </li>
      <?php endif; ?>
      <li class="l-floatingButton__item l-floatingButton__item--pagetop">
        <button class="l-footer-pagetop l-footer-pagetop--pc">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop.svg" alt="PAGETOP"
            class="u-pc">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop-sp.png" alt="PAGETOP"
            class="u-pc-none">
        </button>
      </li>
    </ul>
  </div>