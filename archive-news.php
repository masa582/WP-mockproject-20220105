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
      <dl>
       <dt><?php the_time('Y年m月d日'); ?></dt>
       <dd class="newsCard <?php echo get_field('news_category')['value']; ?>"><?php echo get_field('news_category')['label']; ?></dd>
       <dd class="newsCnt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
      </dl>

     <?php endwhile; ?>

    <?php else : ?>
     <!-- 投稿が無い場合の処理 -->

    <?php endif; ?>


    <!--  <?php the_posts_pagination(
           array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
            'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
           )
          ); ?> -->
    <?php
    $args = array(
     'mid_size' => 1,
     'prev_text' => '&lt;&lt;前へ',
     'next_text' => '次へ&gt;&gt;',
     'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>


   </div>
  </div>
 </section>

</main>

<?php get_footer(); ?>