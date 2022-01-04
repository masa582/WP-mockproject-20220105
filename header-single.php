<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COACHTECH_mock_site</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?php echo get_template_directory_uri(); ?>/css/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/locomotive-scroll.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<script>
  var userAgent = window.navigator.userAgent;
  if (userAgent.indexOf('Trident') != -1 || userAgent.indexOf('MSIE') != -1) {
    alert(
      'お使いのブラウザは閲覧推奨環境ではありません。\nウェブサイトが正しく表示されない、動作しない等の現象が起こる場合がありますので予めご了承ください。\nchromeまたはEdgeブラウザのご利用をおすすめいたします。');
  }
</script>
<noscript>
  <p style="color: #f00; font-weight: bold; padding: 5px; background: #eee; text-align: center;">
    このページはJavaScriptを使用しています。JavaScriptを有効にしてご覧ください。</p>
</noscript>

<body>
  <div class="wrarpper">
    <div class="header-wrap">
      <header class="header">
        <div class="header-logo-wrap">
          <a href="/">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/estra_logo.png" alt="estra.,inc">
          </a>
        </div>
        <div>
          <nav class="header-nav">
            <ul class="navigationInnerList">
              <li><a href="<?php echo esc_url(home_url('/')); ?>"><span class="c-border c-border-font">ホーム</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/news/')); ?>"><span class="c-border c-border-font">ニュース</span></a></li>
              <li><a href="<?php echo esc_url(home_url('/inquiry/')); ?>"><span class="c-border c-border-font">お問い合わせ</span></a></li>
            </ul>
          </nav>
        </div>
      </header>