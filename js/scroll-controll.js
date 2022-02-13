
// スクロール禁止
function no_scroll() {
  document.addEventListener("mousewheel", scroll_control, { passive: false });  // PCでのスクロール禁止
  document.addEventListener("touchmove", scroll_control, { passive: false });  // スマホでのタッチ操作でのスクロール禁止

  // document.addEventListener("DOMContentLoaded", no_scroll );

}

// スクロール禁止解除
function return_scroll() {
  document.removeEventListener("mousewheel", scroll_control, { passive: false }); // PCでのスクロール禁止解除
  document.removeEventListener('touchmove', scroll_control, { passive: false });  // スマホでのタッチ操作でのスクロール禁止解除

}

 function scroll_control(event) {
    event.preventDefault();
} 

// scroll_control();
no_scroll(); // ファイル読み込み開始時実行
window.setTimeout(return_scroll, 2000); // 画面読み込み完了時実行


