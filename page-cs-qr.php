<?php
/**
 * Template Name: トラブル解決サポート
 *
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9D8MBP');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" id="viewport">
<link rel="stylesheet" href="/cms/wp-content/themes/kitz/css/cs-qr.css">
<link rel="stylesheet" href="/cms/wp-content/themes/kitz/css/modal-video.min.css" />
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9D8MBP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- .l-wrapper -->
<div class="l-wrapper">
<!-- .l-header -->
<header class="l-header">
<p class="l-header__logo">
<a href="/">
<img src="/cms/wp-content/themes/kitz/images/common/logo.svg" width="183" height="45" alt="KITZ">
</a>
</p>
</header>
<!-- /.l-header -->
<!-- .l-main -->
<main class="l-main">
  <section class="p-top-mv">
    <h1>
      <span>EA Series Troubleshooting</span>
      EAシリーズの<br class="u-sp">トラブル解決サポート
    </h1>
    <p>製品の使い方やよくある質問などを掲載しています。</p>
  </section>
  

  <section class="p-top-qa">
    <div class="p-top-qa__sec">
      <h2 class="p-top-qa__sec__ttl">動画で確認する</h2>
      <div class="p-top-qa__sec__content">
        <!--<h3>EAシリーズ</h3>-->
        <ul>
        <?php if(have_rows('ea-movie')): ?>
        <?php while(have_rows('ea-movie')): the_row(); ?>
          <?php
          $url = stristr(get_sub_field('ea-movie-url'),"=");
          $url = str_replace("=","",$url);
          ?>
          <li class="p-top-qa__sec__movie" data-video-id="<?php echo $url; ?>"><span><?php the_sub_field('ea-movie-title'); ?></span></li>
        <?php endwhile; ?>
        <?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="p-top-qa__sec">
      <h2 class="p-top-qa__sec__ttl">取扱説明書で確認する</h2>
      <div class="p-top-qa__sec__content">
        <!--<h3>EAシリーズ</h3>-->
        <ul>
          <?php if(have_rows('ea-instructions')): ?>
          <?php while(have_rows('ea-instructions')): the_row(); ?>
            <?php if(get_sub_field('ea-instructions-url')): ?>
              <li class="p-top-qa__sec__pdf"><a target="_blank" href="<?php the_sub_field('ea-instructions-url'); ?>"><?php the_sub_field('ea-instructions-title'); ?></a></li>
            <?php elseif(get_sub_field('ea-instructions-file')): ?>
              <li class="p-top-qa__sec__pdf"><a target="_blank" href="<?php the_sub_field('ea-instructions-file'); ?>"><?php the_sub_field('ea-instructions-title'); ?></a></li>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    
    <div class="p-top-qa__sec">
      <h2 class="p-top-qa__sec__ttl">使い方のよくある質問</h2>
      <div class="p-top-qa__sec__content">     
        <?php if(have_rows('ea-qa')): ?>
        <?php while(have_rows('ea-qa')): the_row(); ?>
        <dl>
          <dt><?php the_sub_field('ea-qa-q'); ?></dt>
          <dd><?php echo get_sub_field('ea-qa-a'); ?></dd>
        </dl>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      
    </div>
    <div class="p-top-qa__sec">
      <h2 class="p-top-qa__sec__ttl">お問い合わせ窓口</h2>
      <div class="p-top-qa__sec__contact">
        <p class="p-top-qa__sec__contact__lead"></p>
        <p class="p-top-qa__sec__contact__ttl">上記で解決できない場合はこちら<br>
        <small>初期配管結線時、試運転時に作動しない場合は以下までご連絡ください。</small></p>
        <ul>
          <li>
            <dl>
              <dt>カスタマーサポート部（東日本）</dt>
              <dd>TEL.<a href="tel:043-299-0119">043-299-0119</a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>カスタマーサポート部（西日本）</dt>
              <dd>TEL.<a href="tel:06-7636-1062">06-7636-1062</a></dd>
            </dl>
          </li>
        </ul>
        <p class="p-top-qa__sec__contact__ttl">製品の仕様に関するお問合せはこちら</p>					
        <ul>
          <li>
            <dl>
              <dt>営業技術部</dt>
              <dd>TEL.<a href="tel:043-299-0134">043-299-0134</a></dd>
            </dl>
          </li>
        </ul>
        <p class="p-top-qa__sec__contact__time">受付時間：平日 8:45～17:30 <span>(土・日・祝日、夏季休業、年末年始を除く)</span></p>
      </div>
    </div>
  </section>
</main>
<!-- /.l-main -->

<!-- .l-footer -->
<footer class="l-footer">
  <p class="l-footer-logo"><img src="/cms/wp-content/themes/kitz/images/cs-qr/logo-footer.svg" alt=""></p>
  <p class="l-footer-copy">&copy; KITZ Corporation</p>
</footer>
<!-- /.l-footer -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/cms/wp-content/themes/kitz/js/cs-qr.js"></script>
<script src="/cms/wp-content/themes/kitz/js/jquery-modal-video.min.js"></script>
</body>
</html>
