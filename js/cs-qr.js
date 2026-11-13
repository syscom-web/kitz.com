$(function () {
  $(".p-top-qa__sec__ttl").click(function(){
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });
  
  if ($(".p-top-qa__sec__movie").length) {
    
    $(".p-top-qa__sec__movie").each(function(i, elem) {
      $(elem)
        .modalVideo({
        channel: "youtube",
        youtube: {
          rel: 0, //関連動画の指定
          autoplay: 1, //自動再生の指定
          controls: 1, //コントロールさせるかどうかの指定
        },
      });
    });
  }
});