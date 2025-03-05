/* =================================================================================================

　モジュールレイアウト

================================================================================================= */

jQuery(function () {
  /* ----------------------------------------------------------------------------
  　tileプラグイン（共通設定）
  ---------------------------------------------------------------------------- */
  (function(e){e.fn.tile=function(t){var n,r,i,s,o,u,a=document.body.style,f=["height"],l=this.length-1;if(!t)t=this.length;u=a.removeProperty?a.removeProperty:a.removeAttribute;return this.each(function(){u.apply(this.style,f)}).each(function(u){s=u%t;if(s==0)n=[];r=n[s]=e(this);o=r.css("box-sizing")=="border-box"?r.outerHeight():r.innerHeight();if(s==0||o>i)i=o;if(u==l||s==t-1){e.each(n,function(){this.css("height",i)})}})}})(jQuery);

  /* ----------------------------------------------------------------------------
  　GETパラメータ取得
  ---------------------------------------------------------------------------- */
  function getParameter(){
    urlParameter = Object();
    try
    {
      var argStr = (window.location.href.match(/\?(.*)$/))[1];
      argStr = argStr.split('#')[0];

      var argList = argStr.split('&');
      for (i = 0; i < argList.length; i++)
      {
        try
        {
          var v = argList[i].match(/^(.+)=(.+)$/);
          urlParameter[v[1]] = v[2];
        } catch(e) {}
      }
    } catch(e) {}
  }

  /* ----------------------------------------------------------------------------
  　パラメータからアンカーリンクで遷移
  ---------------------------------------------------------------------------- */
  getParameter();

  $(window).on("load",function(){
    if(urlParameter.anchor != undefined){
      if(window.matchMedia('(min-width:593px)').matches){
        var position = $("#" + urlParameter.anchor).offset().top - $("header").outerHeight();
      }
      else{
        var position = $("#" + urlParameter.anchor).offset().top - $("header").outerHeight();
      }
      $("html, body").animate({scrollTop:position}, 500);
    }
  });

  /* ----------------------------------------------------------------------------
  　製品リストモジュール
  ---------------------------------------------------------------------------- */
  function productlistModuleSet(){
    if(window.matchMedia('(max-width:592px)').matches){
      $(".productlist_module li .title").tile(2);	
    }
    else{
      $(".productlist_module li .title").tile(4);
    }
  }

  // リサイズ時
  $(window).on("resize",function(){
    productlistModuleSet();
  });

  $(function(){
    productlistModuleSet();
  });


  /* ----------------------------------------------------------------------------
  　画像テキスト小見出しモジュール
  ---------------------------------------------------------------------------- */
  function photoTextMdModuleSet(){
    if(window.matchMedia('(max-width:592px)').matches){
      $(".photo_text_md_module").each(function(){
        $(this).find("li .text").height("auto");
      });
    }
    else{
      $(".photo_text_md_module").each(function(){
        $(this).find("li .text").tile();
      });
    }
  }

  // リサイズ時
  $(window).on("resize",function(){
    photoTextMdModuleSet();
  });

  $(function(){
    photoTextMdModuleSet();
  });


  /* ----------------------------------------------------------------------------
  　写真拡大
  ---------------------------------------------------------------------------- */
  $(".zoom").on('click',function(){

    //$("#modal_photo_close").addClass("active");
    $("#photo_zoom").addClass("active");
    $("#photo_zoom_bg").addClass("active");
    $("#photo_zoom img").remove();
    $("#photo_zoom").append($(this).find(".photo img").clone(true));
    modalPhotoSet();
  });

  $("#photo_zoom .photo_zoom_close a, #photo_zoom_bg").on('click',function(){
    $("#photo_zoom").removeClass("active");
    $("#photo_zoom_bg").removeClass("active");
    $("#photo_zoom img").remove();
  });


  function modalPhotoSet(){
    $("#photo_zoom").width("80%");

    var per = $("#photo_zoom").width() / $("#photo_zoom").height();

    if($("#photo_zoom img").outerHeight() > window.innerHeight - 100){
      $("#photo_zoom").width((window.innerHeight - 100) * per);
    }
    
    $("#photo_zoom").css("top", (window.innerHeight - $("#photo_zoom").outerHeight()) / 2);
    $("#photo_zoom").css("left", (window.innerWidth - $("#photo_zoom").outerWidth()) / 2);
  }

  // リサイズ時
  $(window).on("resize",function(){
    modalPhotoSet();
  });


  /* ----------------------------------------------------------------------------
  　テキスト中リンクスタイルまとめて設定
  ---------------------------------------------------------------------------- */
  $(".text_module a, .photo_text_row_module .text a, .photo_text_module li .text a, .photo_text_md_module li .text a, .explan_module dl dd a").each(function(){
    var domain = window.location.origin;  // ドメインを取得
    var theme = "/en/cms/wp-content/themes/kitz";  // テーマフォルダのパス
    if($(this).attr("href").indexOf(".pdf") != -1){
      $(this).append('<img src="' + domain + theme + '/images/common/icon-pdf.svg" class="icon pdf">');
    }
    else if($(this).attr("target") == "_blank"){
      $(this).append('<img src="' + domain + theme + '/images/common/icon-external_blue.svg" class="icon">');
    }
  });
});