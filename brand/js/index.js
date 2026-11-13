document.addEventListener("DOMContentLoaded", () => {
  // headerスクロールで色変える
  if (document.body.classList.contains("brandPage")) {
    const logoImg = document.querySelector(".p-brand-header__logo__img");
    const header = document.querySelector(".p-brand-header");
    const ham = document.querySelector(".p-brand-header__ham");

    if (header && ham) {
      const whiteLogo = logoImg?.dataset.logoWhite;
      const blueLogo = logoImg?.dataset.logoBlue;

      const toggleHeaderState = () => {
        const scrolled = window.scrollY >= 100;
        header.classList.toggle("is-scroll", scrolled);
        ham.classList.toggle("is-scroll", scrolled);

        if (logoImg && whiteLogo && blueLogo) {
          logoImg.src = scrolled ? blueLogo : whiteLogo;
        }
      };

      toggleHeaderState();
      window.addEventListener("scroll", toggleHeaderState);
    }
  }

  // gsap
  gsap.utils.toArray(".gsap-trigger").forEach((el) => {
    gsap.fromTo(
      el,
      {
        autoAlpha: 0,
        y: 50,
      },
      {
        autoAlpha: 1,
        y: 0,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: {
          trigger: el,
          start: "top 80%",
          toggleActions: "play none none none",
        },
      },
    );
  });

  // swiper
  function remToPx(rem) {
    return (
      rem * parseFloat(getComputedStyle(document.documentElement).fontSize)
    );
  }

  const initSwiper = () => {
    const swiper = new Swiper(".p-brand-character__slide", {
      loop: true,
      slidesPerView: "auto",
      speed: 6000,
      allowTouchMove: false,
      spaceBetween: 20,

      breakpoints: {
        768: {
          spaceBetween: remToPx(3.5),
          spaceBetween: 30,
        },
      },

      autoplay: {
        delay: 0,
      },
    });

    const swiper02 = new Swiper(".p-brand-symbol__swiper", {
      loop: true,
      slidesPerView: 3,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },

      breakpoints: {
        500: {
          slidesPerView: 6,
        },
      },

      speed: 6000,
      allowTouchMove: false,
    });
  };

  initSwiper();

  // 白背景回転する
  const bgImages = document.querySelectorAll(".js-bg-img");

  bgImages.forEach((img, index) => {
    const startDeg = index * 15;

    img.style.transform = `rotate(${startDeg}deg)`;

    const delay = (startDeg / 360) * 10;
    img.style.animationDelay = `-${delay}s`;
  });

  // ハンバーガーメニュー
  const ham = document.querySelector(".p-brand-header__ham.u-spDb");
  const hamContent = document.querySelector(
    ".p-brand-header__ham__content.u-spDb",
  );
  const hamLine = document.querySelectorAll(".p-brand-header__ham.u-spDb span");

  ham.addEventListener("click", () => {
    ham.classList.toggle("is-active");

    hamContent.classList.toggle("is-active");

    hamLine.forEach((line) => {
      line.classList.toggle("is-active");
    });
  });

  // トップへ戻る
  const pagetop = document.querySelector(".p-brand-footer__pagetop");
  const footer = document.querySelector(".p-brand-footer");

  // トップへ戻る
  pagetop.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  function handleScroll() {
    const scrollTop = window.scrollY;
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const footerHeight = footer.offsetHeight;
    const position = scrollTop + windowHeight;

    // active 表示（100px以上スクロールしたら）
    if (scrollTop > 100) {
      pagetop.classList.add("active");
    } else {
      pagetop.classList.remove("active");
    }

    // フッターに近づいたら translateYで押し上げる
    const isSp = window.innerWidth <= 768;
    const isBottom = Math.abs(position - documentHeight) < 5;
    let overlap = Math.max(0, footerHeight - (documentHeight - position));

    if (isSp) {
      overlap += 0;
    }

    pagetop.style.transform = `translateY(0px)`;

    if (isSp && isBottom) {
      pagetop.classList.add("is-bottom");
    } else {
      pagetop.classList.remove("is-bottom");
    }
  }

  window.addEventListener("load", handleScroll);
  window.addEventListener("scroll", handleScroll);

  // gif画像
  const gif1Elements = document.querySelectorAll(".gif1");
  const gif2Elements = document.querySelectorAll(".gif2");

  gif1Elements.forEach((gif1, index) => {
    const gif2 = gif2Elements[index];
    if (!gif2) return;

    const observer = new IntersectionObserver((entries, observerInstance) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          observerInstance.unobserve(entry.target);

          gif1.src = gif1.src;

          setTimeout(() => {
            gif1.style.display = "none";
            gif2.style.display = "block";
            2;

            gif2.src = gif2.src;
          }, 1500);
        }
      });
    });

    observer.observe(gif1);
  });

  const windowWidth = $(window).width();
  const windowSm = 959;
  const headerHeight = 100;
  const headerHeightSp = 180;

  $('a[href^="#"]').on("click", function (event) {
    event.preventDefault();

    const targetId = $(this).attr("href");
    const $target =
      targetId === "#" || targetId === "" ? $("html") : $(targetId);

    if (!$target.length) return; // 対象がない場合は何もしない

    const isCharacter = targetId === "#character";
    const headerOffset =
      windowWidth <= windowSm ? headerHeightSp : headerHeight;

    let extraOffset = 0;
    if (isCharacter) {
      extraOffset = windowWidth <= windowSm ? 50 : 220;
    }

    const position = $target.offset().top - headerOffset - extraOffset;

    $("html, body").animate({ scrollTop: position }, 1000, "swing");
  });

  $(".p-brand-header__ham__content a").click(function () {
    $(".p-brand-header__ham__content").removeClass("is-active");
    $(".p-brand-header__ham span").removeClass("is-active");
    $(".p-brand-header__ham").removeClass("is-active");
  });

  document.oncontextmenu = function () {
    return false;
  };

  const images = document.querySelectorAll("img");
  images.forEach(function (image) {
    image.ondragstart = function () {
      return false;
    };
  });

  document.addEventListener("copy", function (e) {
    const selection = window.getSelection();
    const selectedText = selection.toString();
    e.clipboardData.setData("text/plain", selectedText);
    e.preventDefault();
  });
});
