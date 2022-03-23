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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/locomotive-scroll.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class('index typesquare_option is-load'); ?>>

  <noscript>
    <p style="color: #f00; font-weight: bold; padding: 5px; background: #eee; text-align: center;">
      このページはJavaScriptを使用しています。JavaScriptを有効にしてご覧ください。</p>
  </noscript>

  <?php if (is_home()) { ?>
    <div class="wrapper">

      <!-- ここからSPの記述 -->



      <!-- ここからPCの記述 -->
      <header class="header">
        <div class="header-wrap">
          <a href="/">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/estra_whitelogo.png" alt="estra.,inc">
          </a>
        </div>

        <!--▽▽ハンバーガーメニュー▽▽-->
        <div id="hamburger">
          <div class="icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!--△△ハンバーガーメニュー△△-->

        <!--▽▽ハンバーガーメニューのリスト▽▽-->
        <div class="sm">
          <nav>
            <ul>
              <li class="menu-list-SP"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
              <li class="menu-list-SP"><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
              <li class="menu-list-SP"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
        <!--△△ハンバーガーメニューのリスト△△-->



        <div class="pc">
          <nav class="header-nav">
            <ul class="navigationInnerList">
              <li class="menu-list"><a href="<?php echo esc_url(home_url('/')); ?>"><span class="c-border">ホーム</span></a></li>
              <li class="menu-list"><a href="<?php echo esc_url(home_url('/news/')); ?>"><span class="c-border">ニュース</span></a></li>
              <li class="menu-list"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>"><span class="c-border">お問い合わせ</span></a></li>
            </ul>
          </nav>
        </div>
      </header>

    <?php } else if (is_404()) { ?>
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
                  <li><a href="/"><span class="c-border c-border-font">ホーム</span></a></li>
                  <li><a href="/news/"><span class="c-border c-border-font">ニュース</span></a></li>
                  <li><a href="/inquiry/"><span class="c-border c-border-font">お問い合わせ</span></a></li>
                </ul>
              </nav>
            </div>
          </header>

        <?php } else if (is_single() || is_archive('news') || is_page('inquiry') || is_page('thankspage')) { ?>

          <body>
            <div class="wrapper">
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
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><span class="c-border c-border-font">ホーム</span></a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/news/')); ?>"><span class="c-border c-border-font">ニュース</span></a></li>
                        <li><a href="<?php echo esc_url(home_url('/inquiry/')); ?>"><span class="c-border c-border-font">お問い合わせ</span></a></li>
                      </ul>
                    </nav>
                  </div>
                </header>

              <?php } else {
            } ?>