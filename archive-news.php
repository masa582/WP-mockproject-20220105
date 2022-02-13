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
            <div class="news_mainsec">
                  <div class="newsCntSec">
                        <?php if (have_posts()) : ?>
                              <?php while (have_posts()) : the_post(); ?>
                                    <dl id="newsCnt-Btline">
                                          <dt id="newsDate"><?php the_time('Y年m月d日'); ?></dt>
                                          <dd id="newsCard2" class="newsCard <?php echo get_field('news_category')['value']; ?>">
                                                <?php echo get_field('news_category')['label']; ?></dd>
                                          <dd id="newsCnt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                                    </dl>

                              <?php endwhile; ?>

                        <?php else : ?>
                              <!-- 投稿が無い場合の処理 -->

                        <?php endif; ?>


                        <?php
                        $args = array(
                              'mid_size' => 1,
                              'prev_text' => '&lt;',
                              'next_text' => '&gt;',
                              'screen_reader_text' => ' ',
                        );
                        the_posts_pagination($args);
                        ?>
                  </div>

                  <div class="combo">
                        <select id="selbox" onchange="change20()">
                              <option value="">カテゴリ</option>
                              <option value="info">お知らせ</option>
                              <option value="service">サービス</option>
                        </select>
                  </div>
            </div>
      </section>

      <div id="Sosen">
            <div id="Oya">
                  <div id="Kodomo">子ども</div>
            </div>
      </div>

</main>

<?php get_footer(); ?>