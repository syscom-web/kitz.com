(function($){
  window.onload = function(){
  
  if(document.URL.match(/recruit/)) {
    $("body").append('<div class="cookie-consent is-recruit"><div class="cookie-text">当サイトでは、お客様により良いサービスを提供するため、クッキーを利用しています。<br>クッキーの使用に同意いただける場合は「同意」ボタンをクリックし、クッキーに関する情報や設定については「<a href="/cookie_policy/">クッキーポリシー</a>」をご覧ください。</div><div class="cookie-agree">同意</div></div>');
  }else{
    $("body").append('<div class="cookie-consent"><div class="cookie-text">当サイトでは、お客様により良いサービスを提供するため、クッキーを利用しています。<br>クッキーの使用に同意いただける場合は「同意」ボタンをクリックし、クッキーに関する情報や設定については「<a href="/cookie_policy/">クッキーポリシー</a>」をご覧ください。</div><div class="cookie-agree">同意</div></div>');
  }

    
  const expire = 365; // 有効期限（日）
  let cc = document.querySelector('.cookie-consent');
  let ca = document.querySelector('.cookie-agree');
  const flag = localStorage.getItem('popupFlag');
  if (flag != null) {
    const data = JSON.parse(flag);
    if (data['value'] == 'true') {
      popup();
    } else {
      const current = new Date();
      if (current.getTime() > data['expire']) {
        setWithExpiry('popupFlag', 'true', expire);
        popup();
      }
      $("body").addClass("is-cookie");
    }

  } else {
    setWithExpiry('popupFlag', 'true', expire);
    popup();

  }
  ca.addEventListener('click', function () {
    cc.classList.add('cc-hide1');
    setWithExpiry('popupFlag', 'false', expire);
    $("body").addClass("is-cookie");
  });

  function setWithExpiry(key, value, expire) {
    const current = new Date();
    expire = current.getTime() + expire * 24 * 3600 * 1000;
    const item = {
      value: value,
      expire: expire
    };
    localStorage.setItem(key, JSON.stringify(item));
  }

  function popup() {
    cc.classList.add('is-show');
  }
}
})(jQuery);
