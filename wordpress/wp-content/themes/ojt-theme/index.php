<?php  get_header();?>
  <main>
    <div class="width-wrapper">
      <div class="main">
        <div class="main-img">
          <div class="main-img__bg">
            <!-- <div class="list"> -->

            <?php echo get_slider_img('image_url01');?>
            <?php echo get_slider_img('image_url02');?>
            <?php echo get_slider_img('image_url03');?>


            <!-- <?php if ( is_mobile() ) : ?>
            <?php echo do_shortcode('[smartslider3 slider=3]');?>
            <?php else: ?>
            <?php echo do_shortcode('[smartslider3 slider=2]');?>
            <?php endif; ?> -->
          </div>
        <picture class="main-img__text">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="テキスト:American Village">
        </picture>

        </div>
      </div>
      <h1 class="main-text">
        進化し続ける「街」
        <br class="br-sp">
        アメリカンビレッジマガジン
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
        'posts_per_page' => 1, //出力する数。全出力したい場合は-1
      ];?>
        <?php //クエリをセット
              $the_query = new WP_Query($args);?>
            <?php if ($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()):
          $the_query->the_post();?>

            <?php echo do_shortcode('[ajax_load_more container_type="div"  post_type="post" transition_container_classes="flex-wrapper" posts_per_page="6" scroll="false"  images_loaded="true" button_label="もっとみる" button_loading_label="ロード中..."]');?>
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
