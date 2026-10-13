$(function () {
  const currentPath = window.location.pathname;
  const targetPathPattern1 = /\/sustainability\/governance\/compliance\//;
  const targetPathPattern2 = /\/sustainability\/governance\/risk-management\//;

  // document.oncontextmenu = function () {
  //   return false;
  // };

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
  const menu = document.querySelector(".l-header__menu");
  const nav = document.querySelector(".l-header__nav");
  const updateBodyScrollLock = () => {
    const isMenuOpen = menu && menu.classList.contains("active");
    const isSearchOpen = $(".header-search_btn a").hasClass("active");

    document.body.style.overflow = isMenuOpen || isSearchOpen ? "hidden" : "";
  };

  if (menu && nav) {
    menu.addEventListener("click", (e) => {
      e.preventDefault();

      menu.classList.toggle("active");
      nav.classList.toggle("show");

      if (menu.classList.contains("active")) {
        const navHeight = nav.offsetHeight;

        document.body.style.height = `${navHeight + 82}px`;
      } else {
        document.body.style.height = "";
      }

      updateBodyScrollLock();
    });
  }
  //fv100vh
  function setHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  }
  setHeight();
  window.addEventListener("resize", setHeight);
  //scroll
  $('a[href^="#"]').click(function (e) {
    var hash = $(this).attr("href");

    if ("#" === hash) {
      return;
    }

    var target = document.getElementById(decodeURIComponent(hash.slice(1)));
    if (!target) {
      return;
    }

    e.preventDefault();

    var headerHeight = $(".l-header").outerHeight() || 0;
    var position = Math.max(0, $(target).offset().top - headerHeight);

    $("body, html").stop().animate({ scrollTop: position }, 600);
    return false;
  });
  //pagetop
  const pagetopBtn = document.querySelector("#page-top");
  if (pagetopBtn) {
    pagetopBtn.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
  const $floatingPagetop = $(".l-floatingButton__item--pagetop");
  $(".l-footer-pagetop--pc").on("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  const footerPagetop = document.querySelector(".l-footer-pagetop--sp");
  const footerSymbol = document.querySelector(
    ".l-footer-sitemap__bottom__symbol",
  );
  const updateFooterPagetopPosition = () => {
    if (!footerPagetop || !footerSymbol || window.innerWidth >= 768) {
      footerPagetop?.style.removeProperty("--footer-pagetop-bottom");
      return;
    }

    footerPagetop.style.removeProperty("--footer-pagetop-bottom");
    const defaultBottom = parseFloat(
      window.getComputedStyle(footerPagetop).bottom,
    );
    const symbolTop = footerSymbol.getBoundingClientRect().top;
    const clearance = 16;
    const bottom = Math.max(
      defaultBottom,
      window.innerHeight - symbolTop + clearance,
    );

    footerPagetop.style.setProperty("--footer-pagetop-bottom", `${bottom}px`);
  };

  $("#page-top").hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $("#page-top").fadeIn();
      $floatingPagetop.addClass("is-visible");

      let floating = document.cookie.indexOf("floating");
      if (floating == -1) {
        $(".l-flt-bnr").fadeIn();
      }
    } else {
      $("#page-top").fadeOut();
      $floatingPagetop.removeClass("is-visible");
    }

    updateFooterPagetopPosition();
  });
  $(window).on("resize", updateFooterPagetopPosition);
  $(window).trigger("scroll");
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
  $(
    ".l-navi__menu--mega__container > div:not([class]) > div > ul li",
  ).mouseenter(function () {
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
  });
  $(".l-navi__menu--mega").click(function () {
    if ($(window).width() <= 425) {
      $(this).children(".l-navi__menu--mega__container").slideToggle(200);
      $(this).children("a").toggleClass("active");
    }
  });

  $(
    ".l-footer-sitemap__inner__nav__title a, .l-footer-sitemap__inner__nav__title button",
  ).on("click", function (e) {
    if ($(window).width() <= 425) {
      const $toggle = $(this);
      const isExpanded = $toggle.attr("aria-expanded") === "true";

      e.preventDefault();
      $toggle
        .closest(".l-footer-sitemap__inner__nav__summary")
        .children(".l-footer-sitemap__inner__nav__summary__body")
        .stop()
        .slideToggle(200);
      $toggle
        .toggleClass("active", !isExpanded)
        .attr("aria-expanded", !isExpanded);
    }
  });

  // SP時、リンク先のない見出しを押しても親メニューのクリック処理を実行しない
  $(".l-header .u-hoverNone:not([href])").on("click", function (e) {
    if (window.innerWidth < 768) {
      e.preventDefault();
      e.stopPropagation();
    }
  });

  //search
  $(".header-search_btn a").on("click", function () {
    $(".l-header__search").fadeToggle(300);
    $(this).toggleClass("active");
    updateBodyScrollLock();
  });
  $(".l-header__search--mask").on("click", function () {
    $(".l-header__search").fadeOut(200);
    $(".header-search_btn a").removeClass("active");
    updateBodyScrollLock();
  });

  //
  const Hheight = $(".l-header").height();
  $(".p-page-mv, .p-group, .p-top__news").css("margin-top", Hheight);
});

$(function () {
  $(".p-faq__list dt").on("click", function () {
    $(this).toggleClass("is-open").next().stop().slideToggle();
  });
  $(".p-calculator dl dt button").on("click", function () {
    let open_text = `<span></span>説明を開く`;
    let close_text = `<span></span>説明を閉じる`;

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

jQuery(function ($) {
  $(".mw-wp-form_file").each(function () {
    var $div = $(this);
    var text = $div.text().trim();

    // 削除対象の接頭辞一覧
    var prefixes = ["file01-", "file02-"];

    prefixes.forEach(function (prefix) {
      if (text.startsWith(prefix)) {
        var newText = text.replace(new RegExp("^" + prefix), "");
        $div
          .contents()
          .filter(function () {
            return this.nodeType === 3; // テキストノード
          })
          .first()
          .replaceWith(newText + "\n");
      }
    });
  });

  $(".check_file").on("change", function () {
    var file = $(this).prop("files")[0];
    var fileName = file ? file.name : "ファイル未選択";
    $(this).closest(".file_wrapper").find(".add_text").text(fileName);
  });
});

document
  .querySelectorAll(".p-group_s-result__accordion-button")
  .forEach((button) => {
    button.addEventListener("click", () => {
      const content = button.nextElementSibling;
      const isOpen = button.getAttribute("aria-expanded") === "true";

      button.setAttribute("aria-expanded", String(!isOpen));

      if (isOpen) {
        content.style.maxHeight = "0px";
        content.classList.remove("is-open");
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        content.classList.add("is-open");
      }
    });
  });

document.querySelectorAll("[data-office-filter]").forEach((form) => {
  const inputs = Array.from(
    form.querySelectorAll("[data-office-filter-taxonomy]"),
  );
  const clearInput = form.querySelector("[data-office-filter-clear]");
  const allInputs = Array.from(
    form.querySelectorAll("[data-office-filter-all]"),
  );
  const items = Array.from(document.querySelectorAll("[data-office-item]"));
  const groups = Array.from(
    document.querySelectorAll(".p-group_s-result__group"),
  );
  const resultSections = Array.from(
    document.querySelectorAll(".p-group_s-result__section"),
  );
  const emptyMessage = document.querySelector("[data-office-filter-empty]");

  const selectedValues = (taxonomy) =>
    inputs
      .filter(
        (input) =>
          input.dataset.officeFilterTaxonomy === taxonomy && input.checked,
      )
      .map((input) => input.value);

  const inputsByTaxonomy = (taxonomy) =>
    inputs.filter((input) => input.dataset.officeFilterTaxonomy === taxonomy);

  const matchesSelectedValues = (selected, values) =>
    selected.length === 0 || selected.some((value) => values.includes(value));

  const parseTerms = (value) => {
    try {
      const terms = JSON.parse(value || "[]");
      return Array.isArray(terms) ? terms : [];
    } catch (error) {
      return [];
    }
  };

  const applyFilter = () => {
    const locations = selectedValues("location");
    const bases = selectedValues("base");
    const hasActiveFilter = locations.length > 0 || bases.length > 0;
    let visibleCount = 0;

    items.forEach((item) => {
      const itemLocations = parseTerms(item.dataset.locations);
      const itemBases = parseTerms(item.dataset.bases);
      const isMatch =
        matchesSelectedValues(locations, itemLocations) &&
        matchesSelectedValues(bases, itemBases);

      item.classList.remove("is-context-only");
      item.classList.toggle("is-filtered-out", !isMatch);
      item.style.display = isMatch ? "" : "none";

      if (isMatch) {
        visibleCount += 1;
      }
    });

    groups.forEach((group) => {
      const hasVisibleItem = Array.from(
        group.querySelectorAll("[data-office-item]"),
      ).some((item) => !item.classList.contains("is-filtered-out"));
      const accordionButton = group.querySelector(
        ".p-group_s-result__accordion-button",
      );
      const accordionContent = group.querySelector(
        ".p-group_s-result__accordion-content",
      );
      const parentItem = group.querySelector(
        ".p-group_s-result__item.is-standalone",
      );
      let isParentVisible =
        !parentItem || !parentItem.classList.contains("is-filtered-out");

      if (accordionButton && accordionContent) {
        const childItems = Array.from(
          accordionContent.querySelectorAll("[data-office-item]"),
        );
        const visibleChildItems = childItems.filter(
          (item) => !item.classList.contains("is-filtered-out"),
        );
        const hasVisibleChild = visibleChildItems.length > 0;
        const isParentContextOnly =
          parentItem && !isParentVisible && hasVisibleChild;

        // 子投稿が条件に一致する場合は、親投稿をグループの情報として常に表示する。
        if (isParentContextOnly) {
          parentItem.classList.remove("is-filtered-out");
          parentItem.classList.add("is-context-only");
          parentItem.style.display = "";
          isParentVisible = true;
        }

        childItems.forEach((item) => {
          item.classList.toggle(
            "is-first-visible-child",
            !isParentVisible && item === visibleChildItems[0],
          );
        });

        accordionButton.hidden = !hasVisibleChild || isParentContextOnly;

        if (!hasVisibleChild) {
          accordionButton.setAttribute("aria-expanded", "false");
          accordionContent.style.maxHeight = "0px";
          accordionContent.classList.remove("is-open");
        } else if (!isParentVisible || hasActiveFilter) {
          accordionButton.setAttribute("aria-expanded", "true");
          accordionContent.style.maxHeight =
            accordionContent.scrollHeight + "px";
          accordionContent.classList.add("is-open");
        } else if (accordionContent.classList.contains("is-open")) {
          accordionContent.style.maxHeight =
            accordionContent.scrollHeight + "px";
        }
      }

      group.classList.toggle("is-parent-filtered-out", !isParentVisible);
      group.classList.toggle(
        "is-parent-context-only",
        Boolean(parentItem?.classList.contains("is-context-only")),
      );

      group.classList.toggle("is-filtered-out", !hasVisibleItem);
      group.style.display = hasVisibleItem ? "" : "none";
    });

    resultSections.forEach((section) => {
      const hasVisibleItem = Array.from(
        section.querySelectorAll("[data-office-item]"),
      ).some((item) => !item.classList.contains("is-filtered-out"));

      section.hidden = !hasVisibleItem;
    });

    if (emptyMessage) {
      emptyMessage.classList.toggle("is-filtered-out", visibleCount !== 0);
      emptyMessage.style.display = visibleCount === 0 ? "" : "none";
    }

    if (clearInput) {
      clearInput.checked = locations.length === 0 && bases.length === 0;
    }

    allInputs.forEach((allInput) => {
      const taxonomyInputs = inputsByTaxonomy(allInput.dataset.officeFilterAll);
      const checkedCount = taxonomyInputs.filter(
        (input) => input.checked,
      ).length;

      allInput.checked =
        taxonomyInputs.length > 0 && checkedCount === taxonomyInputs.length;
      allInput.indeterminate =
        checkedCount > 0 && checkedCount < taxonomyInputs.length;
    });
  };

  form.addEventListener("submit", (event) => event.preventDefault());
  inputs.forEach((input) => input.addEventListener("change", applyFilter));

  allInputs.forEach((allInput) => {
    allInput.addEventListener("change", () => {
      inputsByTaxonomy(allInput.dataset.officeFilterAll).forEach((input) => {
        input.checked = allInput.checked;
      });

      applyFilter();
    });
  });

  if (clearInput) {
    clearInput.addEventListener("change", () => {
      if (clearInput.checked) {
        inputs.forEach((input) => {
          input.checked = false;
        });
      }

      applyFilter();
    });
  }

  applyFilter();
});
