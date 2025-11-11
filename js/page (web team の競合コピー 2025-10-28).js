$(function () {
  // const copy = document.querySelector('body');
  // copy.oncopy = function () {
  //   return false;
  // }
  // document.oncontextmenu = function () { return false; }
	
  //sp-nav
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
  //scroll
  var headerHeight = $('header').height();
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({ scrollTop: position }, 600);
    return false;
  });
  //pagetop
  const pagetopBtn = document.querySelector('#page-top');
  pagetopBtn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
  $('#page-top').hide();
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 200) {
      $('#page-top').fadeIn();

      let floating = document.cookie.indexOf('floating');
      if (floating == -1) {
        $('.l-flt-bnr').fadeIn();
      }
    } else {
      $('#page-top').fadeOut();
    }
  });
  //toggle
  $('.toggle').on('click', function () {
    if ($(window).width() < 768) {
      $(this).next().slideToggle(200);
      $(this).toggleClass('toggle-active');
    }
  });
  //MEGA MENU
  $('body').prepend('<div id="overlay"></div>');
  megaMenu();
  $(".l-navi__menu--mega__container > div > div > ul li").mouseenter(
    function () {
      if (window.innerWidth > 768) {
        if ($(this).attr('data-parent')) {
          let parent = $(this).attr('data-parent');

          $(this).addClass('is-current').siblings().removeClass('is-current');
          $(this).closest('div').next('div').fadeIn(200).find('[data-child=' + parent + ']').show().siblings().hide();
          if (parent !== 'sustainability03') {
            $(this).closest('div').next('div').find('[data-parent]').removeClass('is-current');
            $(this).closest('div').next('div').next('div').fadeOut(200);
          }
        } else {
          $(this).siblings().removeClass('is-current');
          $(this).closest('div').next('div').fadeOut(200).next('div').fadeOut(200);
        }
      }
    }
  );
  $(".l-navi__menu--mega").click(function () {
    if ($(window).width() < 768) {
      $(this).children(".l-navi__menu--mega__container").slideToggle(200);
      $(this).children("a").toggleClass('active');
    }
  });
	
	//search
	$(".header-search_btn a").on('click', function(){
		$(".l-header__search").fadeToggle(300);
		$(this).toggleClass('active');
	});
	$('.l-header__search--mask').on('click', function(){
		$('.l-header__search').fadeOut(200);
		$(".header-search_btn a").removeClass('active');
	});
	
	//
	const Hheight = $(".l-header").height();
  $(".p-page-mv,.p-top-mv").css("margin-top", Hheight);
	
});

$(function () {
  var timer = false;
  var prewidth = $(window).width();
  $(window).resize(function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      var nowWidth = $(window).width();
      if (prewidth !== nowWidth) {
        location.reload();
      }
      prewidth = nowWidth;
    }, 200);
  });
});

$(function () {
  $('.p-faq__list dt').on('click', function () {
    $(this).toggleClass('is-open').next().stop().slideToggle();
  });
});

/* $(window).on('load', function () {
  var linkOffset = $('.l-header').outerHeight() + 60;
  var url = $(location).attr('href');
  if (url.indexOf('id=') != -1) {
    var id = url.split('id=');
    var target = $('#' + id[id.length - 1]);
    if (target.length) {
      var position = target.offset().top - linkOffset;
      $('html, body').animate({ scrollTop: position }, 500);
    }
  }
}); */
$(window).on('load', function() {
  let linkOffset = $('.l-header').outerHeight();
  let urlHash = location.hash;
  if (urlHash) {
    let position = $(urlHash).offset().top - linkOffset;
    $('html, body').animate({ scrollTop: position }, 0);
  }
});

$(function () {
  $('.l-flt-bnr__close').on('click', function () {
    $(this).parent().addClass('is-hidden');
    document.cookie = 'floating=false; path=/';
  });
});

$(window).on('load',function(){
	var formheight = $(".l-header").outerHeight();
	var posy = $( '.c-form-body' ).offset().top;
	posy = posy + parseInt( mwform_scroll.offset );
	posy = posy - formheight;
	$('html,body').animate({scrollTop: posy}, 0);
});

function megaMenu() {
  let mega = false;
  let megaTimer = 0;

  $(".l-navi__menu--mega").mouseenter(function () {
    if (window.innerWidth > 768) {
      $this = $(this);
      if (megaTimer) {
        clearTimeout(megaTimer);
      }

      if ($(this).find('.l-navi__menu--mega__container').length) {
        if (!$(this).hasClass('menu-current')) {
          megaTimer = setTimeout(function () {
            closeMegaMenu($this);
            openMegaMenu($this);
          }, 400);
        }
      } else {
        closeMegaMenu($this);
        return false;
      }
    }
  });
  $(".l-navi__menu--mega").mouseleave(function () {
    if (window.innerWidth > 768) {
      $this = $(this);
      if ($(this).find('.l-navi__menu--mega__container').length) {
        if (megaTimer) {
          clearTimeout(megaTimer);
        }
        megaTimer = setTimeout(function () {
          closeMegaMenu($this);
        }, 500);
      }
    }
  });
  $('.l-header__nav__list').mouseleave(function () {
    if (mega) {
      mega = false;
    }
  });

  function openMegaMenu(parent) {
    $('#overlay').addClass('l-overlay-active');
    parent.addClass('menu-current');
    if (mega) {
      parent.children(".l-navi__menu--mega__container").slideDown(0);
    } else {
      parent.children(".l-navi__menu--mega__container").slideDown(250);
      mega = true;
    }
    parent.siblings().removeClass('menu-current');
    parent.siblings().children(".l-navi__menu--mega__container").hide();
    parent.children(".l-navi__menu--mega__container").find('li[data-parent]').removeClass('is-current');
    parent.find(".l-navi__menu--mega__container > div > div + div").hide();
  }

  function closeMegaMenu(parent) {
    $('#overlay').removeClass('l-overlay-active');
    parent.removeClass('menu-current');
    parent.children(".l-navi__menu--mega__container").hide();
  }
}
