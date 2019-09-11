<?php  get_header();?>
    <main>
      <div class="main">
        <div class="main-container">
          <div class="main-img">
            <div class="main-img__bg">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png"">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="画像：アメリカンビレッジ">
              </picture>
              <!-- pcのみ -->
              <div class="main-img__bg--logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ:アメリカンビレッジ">
              </div>
              <!-- /pcのみ -->
            </div>
            <div class="main-img__text--sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="テキスト:American Village">
            </div>
            <div class="main-img__text--pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="テキスト:American Village">
            </div>
          </div>
        </div>
        <div class="main-text">
          進化し続ける「街」<br class="br-sp">アメリカンヴィレッジマガジン
        </div>
      </div>
      <section>
        <h2 class="subtitle">Latest Articles</h2>
        <div class="flex-wrapper">

          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 20</p>
              <h3 class="blog-title">おしゃれカフェがありますよ</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>

          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_2.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 19</p>
              <h3 class="blog-title">あのネオンはいつ交換すのか！？観覧車の謎に迫る！</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_3.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 18</p>
              <h3 class="blog-title">ラソナの社内はこんなのよ</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_4.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 27</p>
              <h3 class="blog-title">お隣のアラハはアロハ？</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_5.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 16</p>
              <h3 class="blog-title">なぜテント？ラソナの人に聞いてみた</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
          <div class="card-container">
            <div class="blog-images">
              <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_6.png" alt="" class="blog-img">
            </div>
            <div class="blog-contents">
              <p class="date">2018 / 5 / 15</p>
              <h3 class="blog-title">ベイエリアおしゃれすぎる問題</h3>
              <p class="text"></p>
              <div class="blog-btn">
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
<?php  get_footer();?>
