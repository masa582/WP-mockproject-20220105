

var mySwiper = new Swiper(".swiper-container", {
        // スライドの仕方
        effect: "fade",
        // 最後まで行ったら最初に
        loop: true,
        // 画像がスライドする際にかかる時間
        speed: 500,
        autoplay: {
          delay: 4000, // 画像が何秒ごとに自動スライドするか
          disableOnInteraction: false //ユーザーに操作されても自動再生停止しない
        },
        // ページネーション
        pagination: {
          el: ".swiper-pagination", //ページネーションのクラス
          type: "bullets", //ページネーションの見た目のタイプ
          clickable: true //ページネーションをクリックでスライド移動
        }
      });

/* const selectFoodName = document.getElementById('food-name'); */

// モーダル関連　test用
$(function () {
  $('.js-open').click(function () {
    $('#overlay, .modal-window').fadeIn();
  });
  $('.js-close').click(function () {
    $('#overlay, .modal-window').fadeOut();
  });
});


// モーダル　参照用

const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const modal = document.getElementById('modal');
openBtn.addEventListener('click', () => {
  modal.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
})
window.addEventListener('click', (e) => {
  if (!e.target.closest('.modal__content-inner') && e.target.id !== "openBtn") {
    modal.style.display = 'none';
  }
});


$(function() {

  $('.submit').attr('disabled', 'disabled');

  $('#agree').on('click', function() {
      if ($(this).prop('checked') == false) {
        $('.submit').attr('disabled', 'disabled');
      } else {
        $('.submit').removeAttr('disabled');
      }
    });
 
 });

/*
 * common.funcs.js
 */


$(window).bind('load', function() {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  // window resize
  window.addEventListener('resize', () => {
    vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  });

  AOS.init({
    offset: 400,
    delay: 0,
    duration: 2000,
    easing: 'ease',
    once: true
  });

  $('.c-mainSec').addClass('is-show');
});


$(window).bind('scroll', function() {
  var currentPos = window.pageYOffset;
  var bottom = $('.c-mainSec').height() - 100;

  if ($('body').attr('id') != 'index') {
    if (bottom <= currentPos) {
      $('.header').addClass('is-active');
    } else {
      $('.header').removeClass('is-active');
    }
  }
});

var
  pointer = $(".pointer"),
  fWidth = 20, //フォロワーの大きさ
  delay = 8, //数字を大きくするとフォロワーがより遅れて来る
  mouseX = 0, //マウスのX座標
  mouseY = 0, //マウスのY座標
  posX = 0, //フォロワーのX座標
  posY = 0; //フォロワーのX座標

//カーソルの遅延アニメーション
TweenMax.to({}, .001, {
  repeat: -1,
  onRepeat: function() {
    posX += (mouseX - posX) / delay;
    posY += (mouseY - posY) / delay;

    TweenMax.set(pointer, {
      css: {
        left: posX - (fWidth / 2),
        top: posY - (fWidth / 2)
      }
    });
  }
});


var clientPosX;
var clientPosY;

//マウス座標を取得
$(document).on("load mousemove", function(e) {

  if ($('body').attr('id') == 'index') {
    mouseX = e.pageX;
    mouseY = e.pageY;
  } else {
    mouseX = e.clientX;
    mouseY = e.clientY;
  }

  mouseX = e.clientX;
  mouseY = e.clientY;

  clientPosX = mouseX;
  clientPosY = e.clientY;
});


$("a, button").on({
  "mouseenter": function() {
    pointer.addClass("is-active");
  },
  "mouseleave": function() {
    pointer.removeClass("is-active");
  }
});

// ボタンが要素内にある場合親にクラスをつけてアニメーションさせる
$(".buttonIn").on({
  "mouseenter": function() {
    $(this).addClass("is-hover");
  },
  "mouseleave": function() {
    $(this).removeClass("is-hover");
  }
});



var gNavFunc = function() {
  var timer = false;

  var $menuBtn = $('.menuBtn');
  var $navigation = $('.navigation');
  var $navSub_btn = $('.navSub_btn');
  var $subNavWrap = $('.subNavWrap');
  var $header = $('.header');

  var init = function init() {
    bind();
  };

  var bind = function bind() {
    var lastInnerWidth = 0;
    $(window).bind('load resize', function() {
      if (timer !== false) {
        clearTimeout(timer);
      }
      timer = setTimeout(function() {
        if (window.innerWidth > 960) {
          reset.init();
          isPc();
        } else {
          if (lastInnerWidth != window.innerWidth) {
            reset.init();
            isSp();
          }
        }
        lastInnerWidth = window.innerWidth;
      }, 100);
    });
  };

  var isPc = function isPc() {
    $navigation.show();
    $('.subNavHover').mouseenter(function() {
      setTimeout(function() {
        $header.addClass('has-bg');
        $navSub_btn.addClass('is-open')
          .next($subNavWrap).stop().slideDown();
      }, 300);
    }).mouseleave(function() {
      setTimeout(function() {
        $header.removeClass('has-bg');
        $navSub_btn.removeClass('is-open')
          .next($subNavWrap).stop().slideUp();
      }, 300);
    });

    $('.navigation [data-current]').each(function() {
      if ($('body').attr('id') == $(this).data('current')) {
        $(this).addClass('is-current');
        return false;
      }
    });
  };

  var isSp = function isSp() {
    $navigation.hide();
    $navSub_btn.on('click', function() {
      $navSub_btn.toggleClass('is-open')
        .next($subNavWrap).stop().slideToggle();
      return false;
    });
    $menuBtn.on('click', function() {
      $header.toggleClass('has-bg');
      $(this).toggleClass('is-open');
      $navigation.stop().slideToggle();
      return false;
    });
  };

  var reset = {
    init: function init() {
      // すべてリセット
      $subNavWrap.hide();
      $header.removeClass('has-bg');
      $navSub_btn.off('click mouseenter mouseleave').removeClass('is-open');
      $menuBtn.off('click').removeClass('is-open');
    }
  };

  return {
    init: init
  };
}().init();

// contact form 7でメッセージ送信後に遷移

document.addEventListener( 'wpcf7mailsent', function( event ) {
location = 'http://portfolio3.local/thankspage/';
}, false );

// combobox

//select要素を取得する
// $(function($) {
$("#select").change(function () {
  const str = $("#select").val();

   });
// });
//inquiry.phpの送信ボタンが消える事象に注意
    //ここに処理を記述する

// $("li:has(span)").addClass("big");


jQuery( function() {
    jQuery( '#jquery-api-has tr' ) . has( '.jquery-api-has-yellow' ) . css( {
        backgroundColor: 'yellow',
        color: 'red',
    } );
    jQuery( '#jquery-api-has tr' ) . has( '.jquery-api-has-pink' ) . css( {
        backgroundColor: 'pink',
        color: 'blue',
    } );
    jQuery( '#jquery-api-has tr' ) . has( 'span' ) . css( {
        backgroundColor: 'lightblue',
        color: 'red',
    } );
} );

  