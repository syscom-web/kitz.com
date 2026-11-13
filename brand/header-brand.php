<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google Tag Managerの前に設定 -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ganalytics.php?v=1"></script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M9D8MBP');
  </script>
  <!-- End Google Tag Manager -->

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ZCSP7W4CEE', {
      'custom_map': {
        'dimension1': 'ip_address',
        'dimension2': 'access_time',
      },
      'ip_address': getIPAddress(),
      'access_time': getAccessTime(),
    });
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" id="swiper-style" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://use.typekit.net/zla6llb.css">
  <link rel='stylesheet' id='mytheme_style-css' href='<?php echo esc_url(get_theme_file_uri('/brand/assets/css/style.css')); ?>?ver=<?php echo esc_attr(filemtime(get_theme_file_path('/brand/assets/css/style.css'))); ?>' type='text/css' media='all' />

  <script type='text/javascript' defer src='<?php echo get_theme_file_uri('/innovation-center/js/jquery-3.6.1.min.js?ver=1.0') ?>'></script>

  <?php wp_head(); ?>

</head>

<body class="brandPage">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9D8MBP" height="0" width="0"></iframe></noscript>

  <header class="p-brand-header">
    <div class="p-brand-header__inner">
      <!-- ロゴ -->
      <div>
        <h1 class="p-brand-header__logo">
          <a href="" class="p-brand-header__logo__link">
            <img
              src="<?php echo esc_url(get_theme_file_uri('/brand/assets/images/common/header_logo_white_en.svg')); ?>"
              data-logo-white="<?php echo esc_url(get_theme_file_uri('/brand/assets/images/common/header_logo_white_en.svg')); ?>"
              data-logo-blue="<?php echo esc_url(get_theme_file_uri('/brand/assets/images/common/header_logo_blue_en.svg')); ?>"
              alt="バルブの総合メーカー株式会社キッツ"
              class="p-brand-header__logo__img" style="object-fit: cover;">
          </a>
        </h1>
        <div class="p-brand-footer__btn">
          <a href="<?php echo home_url(); ?>/" class="p-brand-footer__btn__link" target="_blank">
            KITZ Website
            <span class="p-brand-header-arrow">
            </span>
          </a>
        </div>
      </div>
      <!-- ./ ロゴ -->

      <!-- ナビゲーション -->
      <nav class="p-brand-header__nav flex u-pcDb">
        <ul class="p-brand-header__nav__list">
          <li class="p-brand-header__nav__item">
            <a href="#essence" class="p-brand-header__nav__link">
              BRAND ESSENCE
            </a>
          </li>
          <li class="p-brand-header__nav__item">
            <a href="#logo" class="p-brand-header__nav__link">
              KITZ LOGO
            </a>
          </li>
          <li class="p-brand-header__nav__item">
            <a href="#symbol" class="p-brand-header__nav__link">
              SYMBOL OF KITZ
            </a>
          </li>
          <li class="p-brand-header__nav__item">
            <a href="#protection" class="p-brand-header__nav__link">
              BRAND PROTECTION
            </a>
          </li>
          <li class="p-brand-header__nav__item">
            <a href="#spirit" class="p-brand-header__nav__link">
              KITZ GROUP SPIRIT MARK
            </a>
          </li>
          <li class="p-brand-header__nav__item">
            <a href="#character" class="p-brand-header__nav__link">
              CHARACTER
            </a>
          </li>
        </ul>
      </nav>

      <div class="p-brand-header__ham u-spDb">
        <button>
          <span></span>
          <span></span>
        </button>
      </div>
      <!-- ./ ナビゲーション -->
    </div>
    <div class="p-brand-header__ham__content u-spDb">
      <nav>
        <ul>
          <li>
            <a href="#essence">
              BRAND ESSENCE
            </a>
          </li>
          <li>
            <a href="#logo">
              KITZ LOGO
            </a>
          </li>
          <li>
            <a href="#symbol">
              SYMBOL OF KITZ
            </a>
          </li>
          <li>
            <a href="#protection">
              BRAND PROTECTION
            </a>
          </li>
          <li>
            <a href="#spirit">
              KITZ GROUP SPIRIT MARK
            </a>
          </li>
          <li>
            <a href="#character">
              CHARACTER
            </a>
          </li>
          <li>
            <a href="/">
              KITZホームページ
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>