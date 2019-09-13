jQuery(function () {
  $('.menu').on('click', function () {
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
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

  $('.toggleImg').slick({
    slidesToShow: 1,
    fade: true,
    speed: 3000,
    pauseOnHover: true,
    swipe: true,
    infinite: true,
  });

  // レスポンシブ
  // $(function () {
  //   let width = $(window).width();
  //   if (width < 768) {
  //     $(".toggleImg").each(function () {
  //       $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
  //     })
  //   }
  // });
  // $(function () {
  // let $slideshow =
  // if (jQuery(window).width() < 768) {
  // sp画像を取得？_spがついているもの
  // ループ処理 .lengthで値を取得？
  // 最後まで行ったら最初の画像に戻る処理
  // } else {
  // pc画像を取得？_pcがついているもの
  // ループ処理 .lengthで値を取得？
  // 最後まで行ったら最初の画像に戻る処理
  // }
  //   })
});
