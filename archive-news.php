<?php
/*
Template Name: news_list_1
*/
?>
<?php get_header(); ?>
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
                                    <dl data-type="<?php echo get_field('news_category')['value']; ?>">
                                          <dt class="newsDate"><?php the_time('Y年m月d日'); ?></dt>
                                          <dd class="newsCard <?php echo get_field('news_category')['value']; ?>">
                                                <?php echo get_field('news_category')['label']; ?></dd>
                                          <dd class="newsCnt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
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
                        <select id="choose_type_select" onchange="refreshList();">
                              <option value="category">カテゴリ</option>
                              <option value="info">お知らせ</option>
                              <option value="service">サービス</option>
                        </select>
                  </div>
            </div>
      </section>

</main>
<script>
	
	// after page load change select to the saved state value
	
	document.addEventListener("DOMContentLoaded", function(){
    	saved_state = localStorage.chtype_select
		if(saved_state != null){
			jQuery("#choose_type_select").val(saved_state).change();
		}
	});
	
	function refreshList(){
		data = jQuery( "#choose_type_select").val();
		// save select state to the storage
		localStorage.chtype_select = data;
		
		if(data == "category"){
			jQuery('[data-type~="info"]').show();
			jQuery('[data-type~="service"]').show();
		}
		
		if(data == "info"){
			jQuery('[data-type~="info"]').show();
			jQuery('[data-type~="service"]').hide();
		}
		
		if(data == "service"){
			jQuery('[data-type~="service"]').show();
			jQuery('[data-type~="info"]').hide();
		}		
	}
</script>	

<?php get_footer(); ?>