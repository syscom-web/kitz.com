$(function () {
  const currentPath = window.location.pathname;
  const targetPathPattern1 = /\/sustainability\/governance\/compliance\//;
  const targetPathPattern2 = /\/sustainability\/governance\/risk-management\//;

  document.oncontextmenu = function () {
    return false;
  };

  const images = document.querySelectorAll("img");
  images.forEach(function (image) {
    image.ondragstart = function () {
      return false;
    };
  });

  // すべてのページでコピーイベントを監視
  document.addEventListener("copy", function (e) {
    const selection = window.getSelection();
    const selectedText = selection.toString();
    e.clipboardData.setData("text/plain", selectedText);
    e.preventDefault();
  });

  // if (targetPathPattern1.test(currentPath) || targetPathPattern2.test(currentPath)) {
  //   document.oncopy = function () {
  //     return false;
  //   }
  // }

  // すべての video 要素を取得し、右クリックメニューを無効化
  document.querySelectorAll("video").forEach((video) => {
    video.addEventListener("contextmenu", (e) => e.preventDefault());
  });

  // Lity ライトボックスが開かれたときの処理
  $(document).on("lity:ready", (event, instance) => {
    // Lity のコンテナ要素内の iframe を取得
    const iframe = instance.element().find("iframe").get(0);

    // iframe が存在する場合
    if (iframe) {
      // iframe の読み込み完了を待つ
      $(iframe).on("load", () => {
        // iframe 内のドキュメントにアクセス
        const iframeDocument =
          iframe.contentDocument || iframe.contentWindow.document;

        // iframe内のすべてのvideo要素に対して処理を適用
        $(iframeDocument)
          .find("video")
          .each(function () {
            // コントロールメニューからダウンロードを禁止
            this.setAttribute("controlsList", "nodownload");

            // 右クリックメニューを無効化
            $(this).on("contextmenu", (e) => e.preventDefault());
          });
      });
    }
  });

  //sp-nav
  $(".l-header__menu").on("click", function () {
    $(".l-header__menu").toggleClass("active");
    $(".l-header__nav").toggleClass("show");
    if ($(this).hasClass("active")) {
      var navHeight = $(".l-header__nav").innerHeight();
      $("body").css({ overflow: "hidden", height: navHeight + 82 });
    } else {
      $("body").css({ overflow: "auto", height: "auto" });
    }
    return false;
  });
  //fv100vh
  function setHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  }
  setHeight();
  window.addEventListener("resize", setHeight);
  //scroll
  var headerHeight = $("header").height();
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $("body,html").stop().animate({ scrollTop: position }, 600);
    return false;
  });
  //pagetop
  const pagetopBtn = document.querySelector("#page-top");
  pagetopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
  $("#page-top").hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $("#page-top").fadeIn();

      let floating = document.cookie.indexOf("floating");
      if (floating == -1) {
        $(".l-flt-bnr").fadeIn();
      }
    } else {
      $("#page-top").fadeOut();
    }
  });
  //toggle
  $(".toggle").on("click", function () {
    if ($(window).width() < 768) {
      $(this).next().slideToggle(200);
      $(this).toggleClass("toggle-active");
    }
  });
  //MEGA MENU
  $("body").prepend('<div id="overlay"></div>');
  megaMenu();
  $(".l-navi__menu--mega__container > div > div > ul li").mouseenter(
    function () {
      if (window.innerWidth > 768) {
        if ($(this).attr("data-parent")) {
          let parent = $(this).attr("data-parent");

          $(this).addClass("is-current").siblings().removeClass("is-current");
          $(this)
            .closest("div")
            .next("div")
            .fadeIn(200)
            .find("[data-child=" + parent + "]")
            .show()
            .siblings()
            .hide();
          if (parent !== "sustainability03") {
            $(this)
              .closest("div")
              .next("div")
              .find("[data-parent]")
              .removeClass("is-current");
            $(this).closest("div").next("div").next("div").fadeOut(200);
          }
        } else {
          $(this).siblings().removeClass("is-current");
          $(this)
            .closest("div")
            .next("div")
            .fadeOut(200)
            .next("div")
            .fadeOut(200);
        }
      }
    }
  );
  $(".l-navi__menu--mega").click(function () {
    if ($(window).width() < 768) {
      $(this).children(".l-navi__menu--mega__container").slideToggle(200);
      $(this).children("a").toggleClass("active");
    }
  });

  //search
  $(".header-search_btn a").on("click", function () {
    $(".l-header__search").fadeToggle(300);
    $(this).toggleClass("active");
  });
  $(".l-header__search--mask").on("click", function () {
    $(".l-header__search").fadeOut(200);
    $(".header-search_btn a").removeClass("active");
  });

  //
  const Hheight = $(".l-header").height();
  $(".p-page-mv,.p-top__news").css("margin-top", Hheight);
});

// $(function () {
//   var timer = false;
//   var prewidth = $(window).width();
//   $(window).resize(function () {
//     if (timer !== false) {
//       clearTimeout(timer);
//     }
//     timer = setTimeout(function () {
//       var nowWidth = $(window).width();
//       if (prewidth !== nowWidth) {
//         location.reload();
//       }
//       prewidth = nowWidth;
//     }, 200);
//   });
// });

$(function () {
  $(".p-faq__list dt").on("click", function () {
    $(this).toggleClass("is-open").next().stop().slideToggle();
  });
  $(".p-calculator dl dt button").on("click", function () {
    let open_text = `<span></span>Open description`;
    let close_text = `<span></span>Close description`;

    $(this).parent().toggleClass("is-open").next().stop().slideToggle();
    if ($(this).parent().hasClass("is-open")) {
      $(this).html(close_text);
    } else {
      $(this).html(open_text);
    }
  });

  $(".p-sustainability-envwarming__accordion dl dt").on("click", function () {
    $(this).toggleClass("is-open").next().stop().slideToggle();
  });
});

$(window).on("load", function () {
  var linkOffset = $(".l-header").outerHeight() + 60;
  var url = $(location).attr("href");
  if (url.indexOf("id=") != -1) {
    var id = url.split("id=");
    var target = $("#" + id[id.length - 1]);
    if (target.length) {
      var position = target.offset().top - linkOffset;
      $("html, body").animate({ scrollTop: position }, 0);
    }
  }
});

$(function () {
  $(".l-flt-bnr__close").on("click", function () {
    $(this).parent().addClass("is-hidden");
    document.cookie = "floating=false; path=/";
  });
});

/* inquiry-cat */
$(function () {
  // 現在のURLのクエリパラメータを取得
  let queryParams = new URLSearchParams(location.search);

  // クエリパラメータの値を取得
  let paramValue = queryParams.get("country");

  // お問い合わせ内容のvalue属性を設定
  if (paramValue) {
    $('input[name="area"]').val(paramValue);
  }
});

function megaMenu() {
  let mega = false;
  let megaTimer = 0;
  let fixed = false;

  $(".l-header__nav__list > li").on("mouseenter", function () {
    if (window.innerWidth > 768) {
      $this = $(this);
      if (megaTimer) {
        clearTimeout(megaTimer);
      }

      if ($(this).find(".l-navi__menu--mega__container").length) {
        if (!$(this).hasClass("menu-current")) {
          if (!fixed) {
            megaTimer = setTimeout(function () {
              closeMegaMenu($this);
              openMegaMenu($this);
            }, 400);
          }
        }
      } else {
        if (mega) {
          mega = false;
        }
        if (fixed) {
          fixed = false;
        }
        closeMegaMenu($(".l-header__nav__list > li"));
        return false;
      }
    }
  });

  $(".l-header__nav__list > li").on("mouseleave", function () {
    if (window.innerWidth > 768) {
      $this = $(this);
      if ($(this).find(".l-navi__menu--mega__container").length) {
        if (megaTimer) {
          clearTimeout(megaTimer);
        }
        megaTimer = setTimeout(function () {
          closeMegaMenu($this);
        }, 500);
      }
    }
  });

  $(".l-header__nav__list").on("mouseleave", function () {
    if (window.innerWidth > 768) {
      mega = false;
      fixed = false;
    }
  });

  // navi fixed
  $(".l-navi__menu--mega").on("click", function () {
    if (window.innerWidth > 768) {
      mega = true;
      fixed = true;

      if (!$(this).hasClass("menu-current")) {
        megaTimer = setTimeout(function () {
          closeMegaMenu($this);
          openMegaMenu($this);
        }, 400);
      }
    }
  });

  function openMegaMenu(parent) {
    $("#overlay").addClass("l-overlay-active");
    parent.addClass("menu-current");
    if (mega) {
      parent.children(".l-navi__menu--mega__container").slideDown(0);
    } else {
      parent.children(".l-navi__menu--mega__container").slideDown(250);
      mega = true;
    }
    parent.siblings().removeClass("menu-current");
    parent.siblings().children(".l-navi__menu--mega__container").hide();
    parent
      .children(".l-navi__menu--mega__container")
      .find("li[data-parent]")
      .removeClass("is-current");
    parent.find(".l-navi__menu--mega__container > div > div + div").hide();
  }

  function closeMegaMenu(parent) {
    $("#overlay").removeClass("l-overlay-active");
    parent.removeClass("menu-current");
    parent.children(".l-navi__menu--mega__container").hide();
  }
}
