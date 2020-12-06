$(function() {
  // トップ背景切替
  $('.bg-slider').bgSwitcher({
    images: ['../img/top-image1.png','../img/top-image2.png','../img/top-image3.png'], // 切り替える背景画像を指定
    Interval: 5000, //切り替えの間隔 1000=1秒
    start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
    loop: true, //切り替えをループする
    shuffle: false, //背景画像の順番をシャッフルする
    effect: "fade", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
    duration: 2000, //エフェクトの時間 1000=1秒
    easing: "swing", //エフェクトのイージング "swing" "linear"
  });

  // ページ内リンク スムーズスクロール
  $('a[href^="#"]').click(function(){
    var speed = 600;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    if (window.matchMedia("(max-width: 768px)").matches) {
      $("html, body").animate({scrollTop:position - $('.nav-responsive').outerHeight()}, speed, "swing");
    } else {
      $("html, body").animate({scrollTop:position}, speed, "swing");
    }
    
    if ($('.globalMenuSp').hasClass('active')) {
      $('.navToggle').removeClass('active');
      $('.globalMenuSp').removeClass('active');
  }

  if(  $('.color-change').hasClass('bg-black')) {
    $('.color-change').removeClass('bg-black');
  }

  if(  $('.color-change').hasClass('text-white')) {
    $('.color-change').removeClass('text-white');
  }
    return false;
  });

    // レスポンシブメニュー スクロールで変更
    $(window).scroll(function() {
      var wrapperHeight = $('#topImageFade-res').height(); 

      if ($(this).scrollTop() > wrapperHeight || $('.globalMenuSp').hasClass('.active')) {
        $('.logo').addClass('mini');
        $('.nav-responsive').addClass('bg-black-border');
      } else {
        $('.logo').removeClass('mini');
        $('.nav-responsive').removeClass('bg-black-border');
      }
    });

    // アコーディオンメニュー
    $('.open-menu').click(function() {
      $('.fa-caret-right').toggleClass('open');
      $('.menu-toggler').slideToggle(400);
    });

    // アコーディオンメニュー レスポンシブ
    $('.open-menu-res').click(function() {
      $('.color-change').toggleClass('bg-black');
      $('.color-change').toggleClass('text-white');
      $('.angle-down').toggleClass('transform');
      $('.menu-toggler').slideToggle();
    });

    // ハンバーガーメニュー
    $('.navToggle').click(function() {
      $('.logo').addClass('mini');
      $('.angle-down').removeClass('transform');
      $('.menu-toggler').hide();
      $('.color-change').removeClass('bg-black');
      $('.color-change').removeClass('text-white');
      $('.nav-responsive').addClass('bg-black-border');
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
          $('.nav-responsive').addClass('bg-black-border');
      } else {
          $('.globalMenuSp').removeClass('active');
      }
  });

  // モーダル画像の表示
  $('.js-modal-open').each(function() {
    $(this).on('click', function() {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn();
      return false;
    });

    $('.js-modal-close').on('click', function() {
      $('.js-modal').fadeOut();
    });
  });

  // トップに戻るボタン
  var goTop = $('.go-top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      goTop.fadeIn(300);
    } else {
      goTop.fadeOut(300);
    }
  });  
  goTop.click(function () {
  $('body, html').animate({ scrollTop: 0 }, 500);
  return false;
  });

});