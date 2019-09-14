jQuery(function () {
  $('.menu').on('click', function () {
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
    $('.gnav ul').addClass('gnav__menu')
    $('.gnav li').addClass('gnav__menu__item')
    $('.gnav ul').removeClass('menu')

  });

  $(function () {
    let h = $(window).height(); //ブラウザウィンドウの高さを取得
    $('.header').css('display', 'none'); //初期状態ではメインコンテンツを非表示

    $('#loader-bg ,#loader').height(h).css('display', 'block'); //ウィンドウの高さに合わせでローディング画面を表示
    $(function () {
      let $allMsg = $('.loader-bg--container__load-text');
      let $wordList = $('.loader-bg--container__load-text').html().split("");
      $('.loader-bg--container__load-text').html("");
      $.each($wordList, function (idx, elem) {
        let newEL = $("<span/>").text(elem).css({ opacity: 0 });
        $('.loader-bg--container__load-text').show();
        newEL.appendTo($allMsg);
        newEL.delay(idx * 70);
        newEL.animate({ opacity: 1 }, 3000);
      });
    });
    $('#loader-bg').delay(3000).fadeOut(900); //または、$('#loader-bg').fadeOut(800);でも可
    $('#loader').delay(3000).fadeOut(500, function () { }); //または、$('#loader').fadeOut(300);でも可
    $('.header').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
  });

  $('.list').slick({
    slidesToShow: 1,
    fade: true,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    swipe: true,
    infinite: true,
    autoplay: true,
    arrow: false,
  });
  // let windowWidth = $(window).width();
  // let windowSm = 767;
  // let src = $('.list').children('img').attr('src')
  // if (windowWidth <= windowSm) {
  //   src.append('_sp')
  // } else {
  //   src
  //   //横幅640px超のとき（タブレット、PC）に行う処理を書く
  // }
});
