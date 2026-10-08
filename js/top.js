$(function () {
  var topNews = document.querySelector(".p-top__news");

  function updateFloatingButtonTop() {
    if (!floatingButton) {
      return;
    }

    var headerHeight = header ? header.getBoundingClientRect().height : 0;
    var newsHeight = topNews ? topNews.getBoundingClientRect().height : 0;
    var floatingButtonTop = headerHeight + newsHeight;
    var mvHeight = topMv
      ? topMv.getBoundingClientRect().height
      : window.innerHeight - floatingButtonTop;

    document.documentElement.style.setProperty(
      "--floating-button-top",
      floatingButtonTop + "px",
    );
    document.documentElement.style.setProperty(
      "--floating-button-height",
      mvHeight + "px",
    );
  }

  updateFloatingButtonTop();

  if ("ResizeObserver" in window) {
    var floatingButtonResizeObserver = new ResizeObserver(
      updateFloatingButtonTop,
    );
    if (header) {
      floatingButtonResizeObserver.observe(header);
    }
    if (topNews) {
      floatingButtonResizeObserver.observe(topNews);
    }
    if (topMv) {
      floatingButtonResizeObserver.observe(topMv);
    }
  } else {
    $(window).on("resize", updateFloatingButtonTop);
  }

  $(window).on("load resize", updateFloatingButtonTop);

  //slide
  Splide.defaults = {
    type: "loop",
    autoplay: true,
    interval: 2000,
    perMove: 1,
    pagination: false,
  };
  new Splide("#slider1", {
    perPage: 5,
    arrows: false,
    interval: 4500,
    speed: 500,
  }).mount();
  new Splide("#slider2", {
    perPage: 6,
    fixedWidth: "164px",
    gap: "30px",
  }).mount();

  var maxHeight = 0;

  $(".p-top__news > ul li").each(function () {
    var height = $(this).outerHeight();
    if (height > maxHeight) {
      maxHeight = height;
    }
  });

  $(".p-top__news > ul li").height(maxHeight);

  $(".p-top__news > ul")
    .slick({
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 4500,
      arrows: false,
      vertical: true,
      speed: 500,
    })
    .on("afterChange", function (event, slick, currentSlide, nextSlide) {
      $(this).slick("slickSetOption", "autoplaySpeed", 4000);
      updateFloatingButtonTop();
    });

  updateFloatingButtonTop();
});
