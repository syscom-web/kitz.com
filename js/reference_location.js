jQuery(function ($) {
      $window = $(window);
      $body = $('body');
      $lHeader = $('.l-header');
      $valveType = $('.valveType');
      $button = $('.valveType--nav button');
      $menu = $('.valveType--menu');
      $item = $('.item', $menu);
      $popupBg = $('.valveType--popup .bg');
      $popupCard = $('.valveType--popup .card');

      // サイズ調整
      const defaultWidth = 1280;
      const defaultHeight = 1029;
      const defaultHeightSp = 949;

      $window.on('resize', function () {
        const headerHeight = $lHeader.outerHeight();
        const useableWidth = $body.width();
        const useableHeight = ($window.height() - headerHeight);
        let rate = Math.min(useableWidth / defaultWidth, useableHeight / defaultHeight, 1);
        if (headerHeight === 0) {
          rate = Math.min(useableWidth / defaultWidth, useableHeight / defaultHeightSp, 1);
        }
        $valveType.css('font-size', (100 * rate) + 'px');
      }).trigger('resize');

      // 表示切替
      $button.on('click', function (ev) {
        ev.preventDefault();
        const $this = $(this);

        if (!$this.hasClass('active')) {
          $button.removeClass('active');
          $menu.removeClass('cat--01 cat--02 cat--03');
          const cat = $(this).addClass('active').attr('data-cat');

          if (cat === 'all') {
            $item.addClass('hide');
            setTimeout(function () {
              $menu.addClass('allHide');
              $item.removeClass('hide');
              setTimeout(function () {
                $menu.addClass('allShow');
                setTimeout(function () {
                  $menu.removeClass('allShow allHide').addClass('cat--01 cat--02 cat--03');
                }, 1000);
              }, 500);
            }, 500);
          } else {
            $item.addClass('hide');
            $menu.removeClass('cat--01 cat--02 cat--03');

            setTimeout(function () {
              $item.filter('.cat--' + cat).addClass('show');
              $menu.addClass('cat--' + cat);
              setTimeout(function () {
                $item.filter('.cat--' + cat).removeClass('hide');
              }, 500);
            }, 500);
          }
        }
      });

      // ポップアップ
      $item.on('click', function (ev) {
        ev.preventDefault(ev);
        const num = $(this).attr('data-pop');
        const $target = $('#popup' + num);

        const windtwHeight = $window.height();
        const scrollTop = $window.scrollTop();
        const targetHeight = $target.outerHeight();
        /*let targetTop = scrollTop;
        if (targetHeight < windtwHeight) {
          targetTop += (windtwHeight - targetHeight) / 2;
        } */

        $popupBg.addClass('show');
        $target.addClass('show');
      });
      $('.valveType--popup .bt--close, .valveType--popup .bg').on('click', function (ev) {
        ev.preventDefault(ev);

        $popupBg.addClass('hide');
        $popupCard.addClass('hide');
        setTimeout(function () {
          $popupBg.removeClass('show hide');
          $popupCard.removeClass('show hide');
        }, 1000);
      });
    });