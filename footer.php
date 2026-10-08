<?php $permalink = $_SERVER['REQUEST_URI']; ?>

<?php if (!preg_match('/^\/investor_ir\//', $permalink)): ?>

  <?php if (is_home()): ?>
    <div class="l-contact">
      <div class="l-contact__inner">
        <div class="l-contact__inner__product">
          <h2 class="c-ttl--type01">製品・お取引のお問い合わせ</h2>
          <p>製品技術、製品購入、カタログ、品質に関する<br>お問い合わせはこちらから</p>
          <div class="l-contact__inner__link">
            <a href="<?php echo esc_url(home_url('/')); ?>company/inquiry/?id=topPageLinkAdd" class="c-btn--type01">
              Contact us
            </a>
          </div>
        </div><!-- /.l-contact__inner__product -->
        <div class="l-contact__inner__company">
          <h2 class="c-ttl--type01">会社情報のお問い合わせ</h2>
          <p>会社情報、投資・総会・IR情報、プライバシーポリシー、<br>その他のお問い合わせはこちらから</p>
          <div class="l-contact__inner__link">
            <a href="<?php echo esc_url(home_url('/')); ?>company/inquiry/?id=company" class="c-btn--type01">Contact us</a>
          </div>
        </div><!-- /.l-contact__inner__company -->
      </div><!-- /.l-contact__inner -->
    </div><!-- /.l-contact -->
  <?php endif; ?>

  <div class="l-recruit">
    <div class="l-recruit__inner">
      <h2 class="c-ttl--type01 u-poppins">RECRUIT<em>採用情報</em></h2>
      <p>一緒に働ける仲間を募集しています。</p>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>recruit/information" target="_blank" rel="noopener"
            class="c-btn--type01 link--external-white">新卒採用情報</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>recruit/career/" target="_blank" rel="noopener"
            class="c-btn--type01 link--external-white">社会人採用情報</a></li>
      </ul>
    </div><!-- /.l-recruit__inner -->
  </div><!-- /.l-recruit -->
<?php endif; ?>
</div><!-- /.p-page-valve -->
</main><!-- /.p-main -->
<!-- photo_zoom -->
<div id="photo_zoom">
  <p class="photo_zoom_close"><a href="javascript:void(0);">×</a></p>
</div>
<div id="photo_zoom_bg"></div>

<footer class="l-footer">
  <div class="l-footer-sitemap">
    <div class="l-footer-sitemap__inner">
      <div class="l-footer-sitemap__inner__info">
        <div class="l-footer-sitemap__inner__info__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo-footer.svg" alt="株式会社キッツ">
          </a>
        </div>
        <dl>
          <dt>本社所在地</dt>
          <dd>
            <p>〒105-7305　東京都港区東新橋一丁目9番1号　東京汐留ビルディング</p>
          </dd>
        </dl>
      </div><!-- /.l-footer-sitemap__inner__info -->
      <nav class="l-footer-sitemap__inner__nav" aria-label="フッターサイトマップ">
        <div class="l-footer-sitemap__inner__nav__summary">
          <p class="l-footer-sitemap__inner__nav__title"><a href="<?php echo esc_url(home_url('/company/')); ?>"
              aria-expanded="false" aria-controls="footer-about-menu">キッツについて</a>
          </p>
          <div class="l-footer-sitemap__inner__nav__summary__body" id="footer-about-menu">
            <ul class="l-footer-sitemap__inner__nav__list">
              <li class="u-sp"><a href="<?php echo esc_url(home_url('/company/')); ?>">キッツについて</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/philosophy/')); ?>">企業理念・長期経営ビジョン・行動指針</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/message/')); ?>">トップメッセージ</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/overview/')); ?>">会社概要</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/about/')); ?>">キッツとは</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/group_s/')); ?>">国内外拠点</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/group/')); ?>">キッツグループ</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/history/')); ?>">キッツのあゆみ</a></li>
              <li><a href="<?php echo esc_url(home_url('/understand_with_numbers/')); ?>">数字でわかるキッツ</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/report/')); ?>">統合報告書（コーポレートレポート）</a></li>
              <li><a href="<?php echo esc_url(home_url('/brand/')); ?>" target="_blank" rel="noopener">KITZブランド</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/song/')); ?>">キッツグループイメージソング</a></li>
              <li><a href="<?php echo esc_url(home_url('/company/ad/')); ?>">企業広告</a></li>
              <li><a href="<?php echo esc_url(home_url('/susaki/')); ?>" target="_blank"
                  rel="noopener">須﨑優衣選手特設応援サイト</a></li>
              <li><a href="<?php echo esc_url(home_url('/procurement/')); ?>">資材調達情報</a></li>
            </ul>
          </div>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <p class="l-footer-sitemap__inner__nav__title"><a href="<?php echo esc_url(home_url('/product/')); ?>"
              aria-expanded="false" aria-controls="footer-product-menu">製品・ソリューション</a>
          </p>
          <div class="l-footer-sitemap__inner__nav__summary__body" id="footer-product-menu">
            <ul class="l-footer-sitemap__inner__nav__list l-footer-sitemap__inner__nav__list--button">
              <li><a href="https://www.kitz-valvesearch.com/valve-search/ja/top" target="_blank"
                  rel="noopener">バルブ製品検索</a></li>
              <li><a
                  href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&amp;volumeID=KTZ00001&amp;categoryID=4040000&amp;designID=catalog_JPN"
                  target="_blank" rel="noopener">価格表・カタログ</a></li>
              <li><a href="<?php echo esc_url(home_url('/bim/')); ?>">BIMデータ</a></li>
            </ul>
            <ul class="l-footer-sitemap__inner__nav__list">
              <li class="u-sp"><a href="<?php echo esc_url(home_url('/product/')); ?>">製品・ソリューション</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/')); ?>">バルブ</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/hydrogen-related/')); ?>">水素ソリューション</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/water-solutions/')); ?>">水処理ソリューション</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/aerospace/')); ?>">航空宇宙用バルブ</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/maintenance/')); ?>">メンテナンス</a></li>
              <li><a href="<?php echo esc_url(home_url('/product/procurement/')); ?>">調達関連情報</a></li>
            </ul>
          </div>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <p class="l-footer-sitemap__inner__nav__title"><button type="button" aria-expanded="false"
              aria-controls="footer-technical-menu">技術・品質関連情報</button></p>
          <div class="l-footer-sitemap__inner__nav__summary__body" id="footer-technical-menu">
            <div class="l-footer-sitemap__inner__nav__group">
              <p><a href="<?php echo esc_url(home_url('/technical-info/technology/')); ?>">技術</a></p>
              <ul class="l-footer-sitemap__inner__nav__list l-footer-sitemap__inner__nav__list--child">
                <li><a href="<?php echo esc_url(home_url('/innovation-center/')); ?>" target="_blank"
                    rel="noopener">KITZ Group イノベーションセンター</a></li>
                <li><a href="<?php echo esc_url(home_url('/technical-info/technology/#strong')); ?>">私たちの強み</a></li>
                <li><a href="<?php echo esc_url(home_url('/reference/')); ?>">バルブ基礎知識</a></li>
                <li><a href="<?php echo esc_url(home_url('/training/')); ?>">技術研修</a></li>
                <li><a href="<?php echo esc_url(home_url('/technical-info/selection-tool/')); ?>">バルブ選定ツール</a></li>
                <li><a href="<?php echo esc_url(home_url('/cs-qr/')); ?>">技術支援ツール</a></li>
              </ul>
            </div>
            <div class="l-footer-sitemap__inner__nav__group">
              <p><a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質</a></p>
              <ul class="l-footer-sitemap__inner__nav__list l-footer-sitemap__inner__nav__list--child">
                <li><a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質向上（品質保証）</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <p class="l-footer-sitemap__inner__nav__title"><a href="<?php echo esc_url(home_url('/sustainability/')); ?>"
              aria-expanded="false" aria-controls="footer-sustainability-menu">サステナビリティ</a></p>
          <div class="l-footer-sitemap__inner__nav__summary__body" id="footer-sustainability-menu">
            <ul class="l-footer-sitemap__inner__nav__list">
              <li class="u-sp"><a href="<?php echo esc_url(home_url('/sustainability/')); ?>">サステナビリティ</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/news/')); ?>">新着情報</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/pickup/')); ?>">ピックアップ</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/statement/')); ?>">担当役員メッセージ</a></li>
              <li><a
                  href="<?php echo esc_url(home_url('/sustainability/about_sustainability/')); ?>">キッツグループのサステナビリティ</a>
              </li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/environment/')); ?>">環境</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/social/')); ?>">社会</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/governance/')); ?>">ガバナンス</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/products/')); ?>">持続的な成長に向けた技術・知財戦略</a></li>
              <li><a href="<?php echo esc_url(home_url('/technical-info/qa/')); ?>">品質向上（品質保証）</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/stakeholders/')); ?>">ステークホルダーとの対話</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/slb/')); ?>">サステナビリティファイナンス</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/actionbook/')); ?>">サステナビリティアクションブック</a></li>
              <li><a href="<?php echo esc_url(home_url('/sustainability/esg/')); ?>">ESGデータ集</a></li>
            </ul>
          </div>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <p class="l-footer-sitemap__inner__nav__title"><a href="<?php echo esc_url(home_url('/investor_ir/')); ?>"
              aria-expanded="false" aria-controls="footer-ir-menu">IR情報</a></p>
          <div class="l-footer-sitemap__inner__nav__summary__body" id="footer-ir-menu">
            <ul class="l-footer-sitemap__inner__nav__list">
              <li class="u-sp"><a href="<?php echo esc_url(home_url('/investor_ir/')); ?>">IR情報</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/management-policy/')); ?>">経営方針・戦略</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/ir_news/')); ?>">IRニュース</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/calendar/')); ?>">IRカレンダー</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/faq/')); ?>">IRに関するよくあるご質問（FAQ）</a></li>
              <li><a
                  href="<?php echo esc_url(home_url('/company/inquiry/company/?inquiry-cat=ir')); ?>">IRに関するお問い合わせ</a>
              </li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/financial-highlights/')); ?>">業績・財務ハイライト</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/library/')); ?>">IRライブラリー</a></li>
              <li><a href="<?php echo esc_url(home_url('/investor_ir/stock-information/')); ?>">株式関連情報</a></li>
            </ul>
          </div>
          <ul class="l-footer-sitemap__inner__nav__list l-footer-sitemap__inner__nav__list--notice">
            <li>
              <a href="<?php echo esc_url(home_url('/notice/')); ?>">お知らせ</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/recruit/')); ?>" target="_blank" rel="noopener">採用情報</a>
            </li>
          </ul>
        </div>
      </nav><!-- /.l-footer-sitemap__inner__nav -->
    </div><!-- /.l-footer-sitemap__inner -->
    <div class="l-footer-sitemap__bottom">
      <div class="l-footer-sitemap__bottom__inner">
        <ul class="l-footer-sitemap__bottom__links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>guide/">本サイトのご利用について</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>cookie_policy/">クッキーポリシー</a></li>
          <li class="l-footer-sitemap__bottom__links__social">
            <a href="<?php echo esc_url(home_url('/')); ?>social_policy/">ソーシャルメディアポリシー</a>
            <ul>
              <li><a href="https://twitter.com/kitz_sns" target="_blank"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-twitter.png"
                    alt="Twitter"></a></li>
              <li><a href="https://www.facebook.com/kitzsns/" target="_blank"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-facebook.png"
                    alt="Facebook"></a></li>
              <li><a href="https://www.linkedin.com/company/kitz-sns/" target="_blank"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-linkedin.png"
                    alt="LinkedIn"></a></li>
              <li><a href="https://www.instagram.com/kitz_sns/" target="_blank"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-instagram.png"
                    alt="Instagram"></a></li>
            </ul>
          </li>
        </ul>
        <div class="l-footer-sitemap__bottom__symbol">
          <p><i><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-kiku_handle.svg"
                alt="菊ハンドル"></i><span>菊ハンドルは信頼されるバルブのブランド「KITZ（キッツ）」のシンボルです。<br><span>A
                &ldquo;CHRYSANTHEMUM-HANDLE<sup>&reg;</sup>&rdquo; is a symbol of KITZ, the brand of valve
                reliability.</span></span></p>
        </div>
      </div><!-- /.l-footer-sitemap__bottom__inner -->
      <p class="l-footer-sitemap__bottom__copy"><small>© KITZ Corporation</small></p>
    </div><!-- /.l-footer-sitemap__bottom -->
  </div><!-- /.l-footer-sitemap -->
</footer><!-- /.l-footer -->

<button class="l-footer-pagetop l-footer-pagetop--sp" id="page-top" style="">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop.svg" alt="PAGETOP"
    class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop-sp.png"
    alt="PAGETOP" class="u-pc-none">
</button>

<?php if (is_front_page()): ?>
  <div class="l-flt-bnr">
    <span class="l-flt-bnr__close"></span>
    <a href="https://www.kitz.co.jp/news/%e3%80%8ckitz-industrial-convention-2026%e3%80%8d%e9%96%8b%e5%82%ac%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"
      target="_blank">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/INDUSTRIAL-banner.png" alt="バナー画像">
    </a>
  </div>
<?php endif; ?>

<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<?php if (is_home()): ?>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick.min.js"></script>
  <script
    src="<?php echo esc_url(get_template_directory_uri()); ?>/js/top.js?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/js/top.js')) ?>"
    defer="defer"></script>
<?php endif; ?>
<script
  src="<?php echo esc_url(get_template_directory_uri()); ?>/js/common.js?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/js/common.js')) ?>"
  defer="defer"></script>
<script
  src="<?php echo esc_url(get_template_directory_uri()); ?>/js/page.js?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/js/page.js')) ?>"
  defer="defer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.js"></script>
<?php if (is_page(6227)): ?>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/reference_location.js"></script><?php endif; ?>
<?php $url = $_SERVER['REQUEST_URI'];
if (strstr($url, 'structure') == true): ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (!document.querySelector('#main-carousel') || !document.querySelector('#thumbnail-carousel')) {
        return;
      }
      var main = new Splide('#main-carousel', {
        type: 'fade',
        rewind: !0,
        pagination: !1,
        arrows: !1,
      });
      var thumbnails = new Splide('#thumbnail-carousel', {
        fixedWidth: 176,
        fixedHeight: 120,
        gap: 20,
        rewind: !0,
        pagination: !1,
        arrows: !0,
        cover: !0,
        isNavigation: !0,
        breakpoints: {
          1080: {
            arrows: !0,
          },
          767: {
            fixedWidth: 120,
            fixedHeight: 90,
            gap: 15,
          },
        },
      });
      main.sync(thumbnails);
      main.mount();
      thumbnails.mount()
    });
  </script>
<?php endif; ?>
<?php if (is_page('m_vision')): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
  <script>
    imageMapResize();
  </script>
<?php endif; ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/module_layout.js" defer="defer"></script>

<?php wp_footer(); ?>
</body>

</html>