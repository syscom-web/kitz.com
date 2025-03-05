jQuery(function ($) {
  document.oncontextmenu = function () {
    return false;
  }

  const images = document.querySelectorAll('img');
  images.forEach(function (image) {
    image.ondragstart = function () {
      return false;
    };
  });

  //parallax
  var elem = $('.u-parallax--wrap, .u-parallax--background');
  var wh = $(window).height();
  func_parallax();
  $(window).bind('scroll', function () {
    func_parallax();
  });
  function func_parallax() {
    var scroll = $(window).scrollTop();
    elem.each(function () {
      var elem_t = $(this).offset().top;
      if (scroll > elem_t - wh + (wh / 2)) {
        $(this).addClass('action');
      }
    });
  }

  // Slider
  $slider = $(".p-page--gallery__slider");
  $slider.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  $thumbnail = $(".p-page--gallery__slider--thumbnail");
  $thumbnail.children("li").each(function (index) {
    $(this).attr('data-number', index);
  });
  $thumbnail.children("li").eq(0).addClass('current');
  $thumbnail.children("li").on('click', function () {
    var number = $(this).attr('data-number');
    $slider.slick('slickGoTo', number, true);
    $(this).siblings().removeClass('current');
    $(this).addClass('current');
  });

  // Schedule
  $(".p-page--schedule__list--li.open + ul").show();
  $(".p-page--schedule__list--li button").click(function () {
    var parent = $(this).parent(".p-page--schedule__list--li");
    if (parent.hasClass("open")) {
      parent.removeClass('open');
      parent.siblings("ul").stop().slideUp(300);
    } else {
      parent.addClass('open');
      parent.siblings("ul").stop().slideDown(300);
    }
    return false;
  });

  // SP menu
  $('.l-header__menu').on('click', function () {
    $('.l-header__menu').toggleClass('active');
    $('.l-header__nav').toggleClass('show');
    if ($(this).hasClass('active')) {
      var navHeight = $('.l-header__nav').innerHeight();
      $('body').css({ 'overflow': 'hidden', 'height': navHeight + 82 });
    } else {
      $('body').css({ 'overflow': 'auto', 'height': 'auto' });
    }
    return false;
  });



  $(".l-footer__pagetop").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 400);
    return false;
  });

  var pos_scroll = 0;
  var target = $('.l-footer__pagetop');
  var pos_sec = $('.l-footer');
  var pos = pos_sec.offset().top - $(window).height();
  $(window).bind('scroll', function () {
    pos_scroll = $(this).scrollTop();
    banner_absolute(target, pos, pos_scroll);
  });
  banner_absolute(target, pos, $(window).scrollTop());
  function banner_absolute(target, pos, pos_scroll) {
    if (pos <= pos_scroll) {
      target.addClass("absolute");
    } else {
      target.removeClass("absolute");
    }
  }

});
