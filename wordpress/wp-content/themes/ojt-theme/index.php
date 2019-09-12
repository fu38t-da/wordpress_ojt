<?php  get_header();?>
  <main>
    <div class="width-wrapper">
      <div class="main">
        <div class="main-img">
          <div class="main-img__bg">
            <?php if ( is_mobile() ) : ?>
            <?php echo do_shortcode('[smartslider3 slider=3]');?>
            <?php else: ?>
            <?php echo do_shortcode('[smartslider3 slider=2]');?>
            <?php endif; ?>
          </div>
          <div class="main-img__text--sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="テキスト:American Village">
          </div>
          <div class="main-img__text--pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="テキスト:American Village">
          </div>
        </div>
      </div>
      <h1 class="main-text">
        進化し続ける「街」<br class="br-sp">アメリカンヴィレッジマガジン
      </h1>
      <section>
        <h2 class="subtitle">Latest Articles</h2>
        <div class="flex-wrapper">
          <?php $args = [
        'orderby' => 'date', //並べ替えの方法
        // 'cat'=>'category', //カテゴリーを出力
        'order' => 'DESC', //降順(昇順 ASC)
        'post_status' => 'publish', //記事の公開ステータス
        'post_type' => 'post', //記事のタイプ
        'posts_per_page' => 6, //出力する数。全出力したい場合は-1
      ];?>
        <?php //クエリをセット
              $the_query = new WP_Query($args);?>
            <?php if ($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()):
          $the_query->the_post();?>
          <div class="card-container">
            <div class="blog-images">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('thumbnail', ['class'=>'blog-img']); ?>
            <?php else: ?>
              <img src="https://placehold.jp/630x400.png" alt="画像がありません" height="400" width="630" class="blog-img">
              </div>
            <?php endif; ?>
            </div>
            <div class="blog-contents">
              <p class="date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time></p>
              <h3 class="blog-title"><?php the_title()?></h3>
              <p class="text"><?php the_excerpt(); ?></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
          <?php endwhile;?>
        <?php else:?>
          <p>まだ記事はありません。</p>
        <?php
        endif;
        wp_reset_postdata();//ループをリセット
        ?>
        </div>
      </section>
    </div>
  </main>
<?php  get_footer();?>
