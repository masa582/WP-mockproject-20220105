  <footer class="footer">
    <div class="footerCnt">
      <p class="footer_logo"> <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estra_whitelogo.png" alt="estra.,inc"></a></p>
      <p class="footer_address">〒151-0051 <br>東京都渋谷区千駄ヶ谷5-8-4 第七瑞穂ビル 4階</p>
    </div>
    <div class="footerBtm">
      <p class="footerCright">Copyright <?php echo date('Y'); ?> marumaru-ya.site All rights reserved</p>
      <div class="footerSns">
        <div>
          <p class="footerSnsttl">Follow us</p>
          <div class="footerSnsflex">
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook_icon.png" alt="facebookアイコン"></a> <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" alt="twitterアイコン"></a> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_icon.png" alt="instagramアイコン"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/js/picturefill.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
  <?php if (is_home()) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-controll.js"></script>
    <?php endif; ?>
    <?php if (is_archive('news')) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sort-newslist.js"></script>
  <?php endif; ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/locomotive-scroll.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <script>
    $(window).on('load', () => {
      $('.loading-screen').fadeOut(2000);
    })
  </script>
  <?php wp_footer(); ?>

  </body>

  </html>