<footer class="p-brand-footer">
  <p class="p-brand-footer__pagetop"></p>
  <div class="p-brand-footer__inner">
    <div class="p-brand-footer__item">
      <div class="p-brand-footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/brand/assets/images/common/footer_logo_black.svg" alt="ロゴ" class="p-brand-footer__logo__img">
      </div>

      <div class="p-brand-footer__btn">
        <a href="<?php echo home_url(); ?>/" class="p-brand-footer__btn__link" target="_blank">
          KITZ Website
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/brand/assets/images/common/arrow_right_blue.svg">
          </span>
        </a>
      </div>
    </div>

  </div>
  <div class="p-brand-footer__item">
    <div class="p-brand-footer__copyright">
      <small class="p-brand-footer__copyright__txt">
        &copy; KITZ Corporation
      </small>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/brand/assets/js/index.js"></script>
</body>

</html>