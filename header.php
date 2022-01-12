<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- <meta charset="UTF-8" /> -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COACHTECH_mock_site</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?php echo get_template_directory_uri(); ?>/css/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/locomotive-scroll.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
  <?php wp_head(); ?>
</head>

<body data-aos-easing="ease" data-aos-duration="500" data-aos-delay="0" cz-shortcut-listen="true" <?php body_class('index typesquare_option is-load'); ?>>

  <noscript>
    <p style="color: #f00; font-weight: bold; padding: 5px; background: #eee; text-align: center;">
      このページはJavaScriptを使用しています。JavaScriptを有効にしてご覧ください。</p>
  </noscript>

  <div class="wrapper">
    <header class="header">
      <div class="header-wrap">
        <a href="/">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/estra_whitelogo.png" alt="estra.,inc">
        </a>
      </div>
      <div>
        <nav class="header-nav">
          <ul class="navigationInnerList">
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><span class="c-border">ホーム</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/news/')); ?>"><span class="c-border">ニュース</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/inquiry/')); ?>"><span class="c-border">お問い合わせ</span></a></li>
          </ul>
        </nav>
      </div>
    </header>