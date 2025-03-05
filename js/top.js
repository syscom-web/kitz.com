$(function () {
  //slide
  Splide.defaults = {
    type: 'loop',
    autoplay: true,
    interval: 2000,
    perMove: 1,
    pagination: false,
  }
  new Splide('#slider1', {
    perPage: 5,
    arrows: false,
    interval: 4500,
    speed: 500
  }).mount();
  new Splide('#slider2', {
    perPage: 6,
    fixedWidth: '164px',
    gap: '30px',
  }).mount();

  // news slide
  /* $.fn.animate2 = function (properties, duration, ease) {
    ease = ease || 'ease';
    var $this = this;
    var cssOrig = { transition: $this.css('transition') };
    return $this.queue(function (next) {
      properties['transition'] = 'all ' + duration + 'ms ' + ease;
      $this.css(properties);
      setTimeout(function () {
        $this.css(cssOrig);
        next();
      }, duration);
    });
  };
  $('.p-top-mv__news span').css({ top: 0 }).animate2({ transform: 'translate(0)' }, 900) //１回転 */

  // newsTicker
  var maxHeight = 0;

  $('.p-top__news > ul li').each(function () {
    var height = $(this).outerHeight();
    if (height > maxHeight) {
      maxHeight = height;
    }
  });

  $('.p-top__news > ul li').height(maxHeight);

  $('.p-top__news > ul').slick({
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 4500,
    arrows: false,
    vertical: true,
    speed: 500,
  }).on("afterChange", function (event, slick, currentSlide, nextSlide) {
    $(this).slick('slickSetOption', 'autoplaySpeed', 4000);
  });
});
