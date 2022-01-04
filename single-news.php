<?php
/*
Template Name: news_list_1
*/
?>
<?php get_header('single'); ?>
</div>
<main class="main">
  <section class="news_mainBg_wrapper">
    <div class="news_maingBg_inner">
      <div class="news_mainBg"></div>
      <div class="news_accent">
        <h1 class="news_accent_ttl">News</h1>
      </div>
    </div>

    <article class="news_mainsec">
      <div>
        <dl>
          <dt>2021年5月30日</dt>
          <dd class="newsCard <?php echo get_field('news_category')['value']; ?>"><?php echo get_field('news_category')['label']; ?></dd>
        </dl>
      </div>
      <h2 class="news_header_title"><?php the_title(); ?></h2>
      <p><?php the_content() ?> </p>
    </article>

    </div>
  </section>


</main>

<?php get_footer(); ?>