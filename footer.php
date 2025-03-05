<?php $permalink = $_SERVER['REQUEST_URI']; ?>

<?php if (!preg_match('/^\/en\/investor_ir\//', $permalink)) : ?>
  <div class="l-contact">
    <div class="l-contact__inner">
      <div class="l-contact__inner__product">
        <h2 class="c-ttl--type01">Contact us</h2>
        <p>For inquiries about product technology, product purchases, <br>catalogs, and quality</p>
        <div class="l-contact__inner__link"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="c-btn--type01">Contact us</a></div>
      </div><!-- /.l-contact__inner__product -->
    </div><!-- /.l-contact__inner -->
  </div><!-- /.l-contact -->
<?php endif; ?>
<?php if (is_home()) : ?>
  <div class="l-bnr">
    <div class="l-bnr__inner">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>company/report/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec08-img05.png" alt="Integrated Report (Corporate Report)"></a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/pdf/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec08-img08.png" alt="KITZ Group Environmental and Safety Digest"></a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>susaki/" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec08-img11.png" alt="YUI SUSAKI"></a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>reference/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-sec08-img02.png" alt="Basic Knowledge of Valves"></a></li>
      </ul>
    </div><!-- /.l-bnr__inner -->
  </div><!-- /.l-bnr -->
<?php endif; ?>
</div><!-- /.p-page-valve -->
</main><!-- /.p-main -->
<?php if (is_singular('product') || is_singular('product-news')): ?>
  <!-- photo_zoom -->
  <div id="photo_zoom">
  <p class="photo_zoom_close"><a href="javascript:void(0);">×</a></p>
  </div>
  <div id="photo_zoom_bg"></div>
<?php endif; ?>
<footer class="l-footer">
  <div class="l-footer-sitemap">
    <div class="l-footer-sitemap__inner">
      <div class="l-footer-sitemap__inner__info">
        <div class="l-footer-sitemap__inner__info__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo-footer.svg" alt="KITZ Corporation"></a></div>
        <dl>
          <dt>Head Office Address</dt>
          <dd>
            <p>Tokyo Shiodome Building, 1-9-1,<br>Higashi-Shimbashi, Minato-ku,<br>Tokyo 105-7305, Japan</p>
          </dd>
        </dl>
      </div><!-- /.l-footer-sitemap__inner__info -->
      <div class="l-footer-sitemap__inner__nav">
        <div class="l-footer-sitemap__inner__nav__summary">
          <ul class="l-footer-sitemap__inner__nav__list footer-sp__link">
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>product/">Valve Products</a></li>
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>fluid-control/">Fluid Control Products</a></li>
            <li class="l-footer-sitemap__inner__nav__item"><a href="https://www.kitz-valvesearch.com/frontparts/language.php?mode=change&language=2&url=/index.php" target="_blank" class="link__external">Valve Search</a></li>
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>product/?id=useful">Useful Information</a></li>
          </ul>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <ul class="l-footer-sitemap__inner__nav__list">
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>company/" class="u-pc">Corporate Profile</a>
              <input type="checkbox" id="f-menu2" class="f-menu_sp">
              <label class="f-menu_ttl u-pc-none" for="f-menu2">Corporate Profile</label>
              <ul class="f-menu_list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/message/">Top Message</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/philosophy/">Corporate Mission, <br>Long-Term Management Vision, and Action Guide</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>who/">What is KITZ?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/history/">History</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>understand_with_numbers">KITZ by the Numbers</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/group_g/">KITZ Group</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/group_s/">Domestic Network</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/report/">Integrated Report</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>procurement/">Procurement information</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <ul class="l-footer-sitemap__inner__nav__list footer-sp__link">
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>business/">Our Businesses</a></li>
          </ul>
          <ul class="l-footer-sitemap__inner__nav__list">
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/" class="u-pc">IR</a>
              <input type="checkbox" id="f-menu3" class="f-menu_sp">
              <label class="f-menu_ttl u-pc-none" for="f-menu3">IR data</label>
              <ul class="f-menu_list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/">IR NEWS</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/individual-investors/">For Individual Investors</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/calendar/">IR Calendar</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/">Management Policy and Strategy</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/financial-highlights/">Business Performance and Financial Highlights</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/">IR Library</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/">Shareholder Information</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="l-footer-sitemap__inner__nav__summary">
          <ul class="l-footer-sitemap__inner__nav__list footer-sp__link">
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>sustainability/">Sustainability (ESG/SDGs)</a></li>
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>news/">NEWS</a></li>
            <li class="l-footer-sitemap__inner__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>contact/">Contact Us</a></li>
          </ul>
        </div>
      </div><!-- /.l-footer-sitemap__inner__nav -->
    </div><!-- /.l-footer-sitemap__inner -->
    <div class="l-footer-sitemap__bottom">
      <div class="l-footer-sitemap__bottom__inner">
        <ul class="l-footer-sitemap__bottom__links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>guide/">Terms of Use</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>privacy/">Privacy Policy</a></li>
<?php /*
          <li><a href="<?php echo esc_url(home_url('/')); ?>cookie_policy/">GDPR Privacy Notice</a></li>
*/ ?>
          <li class="l-footer-sitemap__bottom__links__social">
            <a href="<?php echo esc_url(home_url('/')); ?>social_policy/">Social Media Policy</a>
            <ul>
              <li><a href="https://twitter.com/kitz_sns" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-twitter.png" alt="Twitter"></a></li>
              <li><a href="https://www.facebook.com/kitzsns/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-facebook.png" alt="Facebook"></a></li>
              <li><a href="https://www.linkedin.com/company/kitz-sns/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-linkedin.png" alt="LinkedIn"></a></li>
              <li><a href="https://www.instagram.com/kitz_sns/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-instagram.png" alt="Instagram"></a></li>
            </ul>
          </li>
        </ul>
        <div class="l-footer-sitemap__bottom__symbol">
          <p><i><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-kiku_handle.svg" alt="CHRYSANTHEMUM-HANDLE"></i><span><span>A &ldquo;CHRYSANTHEMUM-HANDLE<sup>&reg;</sup>&rdquo; is a symbol of KITZ, the brand of valve reliability.</span></span></p>
        </div>
      </div><!-- /.l-footer-sitemap__bottom__inner -->
      <p class="l-footer-sitemap__bottom__copy"><small>© KITZ Corporation</small></p>
    </div><!-- /.l-footer-sitemap__bottom -->
  </div><!-- /.l-footer-sitemap -->
</footer><!-- /.l-footer -->
<button class="l-footer-pagetop" id="page-top"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop.svg" alt="PAGETOP" class="u-pc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn-pagetop-sp.png" alt="PAGETOP" class="u-pc-none"></button>
<?php /*
<div class="l-flt-bnr">
  <span class="l-flt-bnr__close"></span>
  <a href="/susaki/" target="_blank" rel="noopener">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr-susaki.png" alt="キッツ所属　須﨑 優衣選手応援サイトはこちら">
  </a>
</div>
*/ ?>
</div><!-- /.p-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<?php if (is_home()) : ?>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/top.js?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/js/top.js')); ?>" defer="defer"></script>
<?php endif; ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/page.js?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/js/page.js')); ?>" defer="defer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.js"></script>
<?php if( is_page('7185') || is_page('7613') ) : ?><script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/reference_location.js"></script><?php endif; ?>
<?php $url = $_SERVER['REQUEST_URI'];
if(strstr($url,'structure')==true): ?>
<script>document.addEventListener('DOMContentLoaded',function(){var main=new Splide('#main-carousel',{type:'fade',rewind:!0,pagination:!1,arrows:!1,});var thumbnails=new Splide('#thumbnail-carousel',{fixedWidth:176,fixedHeight:120,gap:20,rewind:!0,pagination:!1,arrows:!0,cover:!0,isNavigation:!0,breakpoints:{1080:{arrows:!0,},767:{fixedWidth:120,fixedHeight:90,gap:15,},},});main.sync(thumbnails);main.mount();thumbnails.mount()});</script>
<?php endif; ?>

<?php if (is_page('contact') || is_page('m_vision')): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
  <script>
    imageMapResize();
  </script>
<?php endif; ?>

<?php if (is_page('4249')): ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
  <script>
    imageMapResize();
  </script>

<?php endif; ?>

<?php if (is_singular('product') || is_singular('product-news')): ?>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/module_layout.js" defer="defer"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
