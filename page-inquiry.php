<?php
/*
Template Name: news_list_1
*/
?>
<?php get_header(); ?>
</div>
<main class="main">
  <section>
    <div class="news_maingBg_inner">
      <div class="news_mainBg"></div>
      <div class="news_accent">
        <h2 class="news_accent_ttl">お問い合わせ(Contact)</h2>
      </div>
  </section>
  <section>
    <div class="inquiry_mainsec">
      <div>
        <p class="formTxt"> <span class="formTxt_ttl">フォームからのお問い合わせ</span>
        </p>
        <p>記入内容の確認後、2～3営業日以内にご連絡させていただきます。</p><br><br><br>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="91" title="お問い合わせフォーム"]'); ?>
    </div>
  </section>
  <!-- </section> -->
</main>

<?php get_footer(); ?>