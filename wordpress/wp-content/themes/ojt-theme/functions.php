<?php
// サムネ追加
  add_theme_support('post-thumbnails');
  // 426*426
  // モバイルとPCで切り替え時のモバイルからipadを抜く
  function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
// navメニュー表示
function menu_setup() {
  register_nav_menus( array(
    'global' => 'グローバルメニュー') );
}
add_action( 'after_setup_theme', 'menu_setup' );

// ６件以上でもっと見るボタン
// 投稿数取得
function count_user_posttype($userid,$posttype) {
    global $wpdb;
    $where = get_posts_by_author_sql($posttype, true, $userid,true);
    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
    return $count;
}

// スライダー

define('SLIDESHOW_SECTION', 'slideshow_section');
define('SLIDESHOW_IMAGE_URL01', 'image_url01');
define('SLIDESHOW_IMAGE_URL01_SP', 'image_url01_sp');
define('SLIDESHOW_IMAGE_URL02', 'image_url02');
define('SLIDESHOW_IMAGE_URL02_SP', 'image_url02_sp');
define('SLIDESHOW_IMAGE_URL03', 'image_url03');
define('SLIDESHOW_IMAGE_URL03_SP', 'image_url03_sp');


//テーマカスタマイザーの登録
function my_theme_customizer( $wp_customize ) {

    //スライドショー
    $wp_customize->add_section( SLIDESHOW_SECTION , array(
        'title' => 'トップページスライドショー', //セクション名
        'priority' => 32, //カスタマイザー項目の表示順
        'description' => 'トップページのスライドショー用画像です。最大アップロードサイズは2Mまでです。', //セクションの説明
    ));

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL01 );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL01 , array(
        'label' => '画像01(PC)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL01 , //セッティングID
        'description' => 'パソコン用スライドショー画像をセットします',
    ) ) );

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL01_SP );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL01_SP , array(
        'label' => '画像01(スマホ)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL01_SP , //セッティングID
        'description' => 'スマホ用スライドショー画像をセットします',
    ) ) );

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL02 );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL02 , array(
        'label' => '画像02(PC)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL02 , //セッティングID
        'description' => 'パソコン用スライドショー画像をセットします',
    ) ) );

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL02_SP );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL02_SP , array(
        'label' => '画像02(スマホ)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL02_SP , //セッティングID
        'description' => 'スマホ用スライドショー画像をセットします',
    ) ) );

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL03 );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL03 , array(
        'label' => '画像03(PC)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL03 , //セッティングID
        'description' => 'パソコン用スライドショー画像をセットします',
    ) ) );

    $wp_customize->add_setting( SLIDESHOW_IMAGE_URL03_SP );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL03_SP , array(
        'label' => '画像03(スマホ)', //設定ラベル
        'section' => SLIDESHOW_SECTION, //セクションID
        'settings' =>  SLIDESHOW_IMAGE_URL03_SP , //セッティングID
        'description' => 'スマホ用スライドショー画像をセットします',
    ) ) );



    // $wp_customize->add_setting( SLIDESHOW_IMAGE_URL03 );

    // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL03 , array(
    //     'label' => '画像03(PC)', //設定ラベル
    //     'section' => SLIDESHOW_SECTION, //セクションID
    //     'settings' =>  SLIDESHOW_IMAGE_URL03 , //セッティングID
    //     'description' => 'パソコン用スライドショー画像をセットします',
    // ) ) );
    // $wp_customize->add_setting( SLIDESHOW_IMAGE_URL03_SP );

    // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,  SLIDESHOW_IMAGE_URL03_SP , array(
    //     'label' => '画像03(スマホ)', //設定ラベル
    //     'section' => SLIDESHOW_SECTION, //セクションID
    //     'settings' =>  SLIDESHOW_IMAGE_URL03_SP , //セッティングID
    //     'description' => 'スマホ用スライドショー画像をセットします',
    // ) ) );
}

add_action( 'customize_register', 'my_theme_customizer' );//カスタマイザーに登録

function get_slider_img($img){
  $src = '<picture class="slideshow">';
  $src .= '<source media="(min-width: 768px)" srcset='.esc_url( get_theme_mod( $img ) ).'>';
  $src .= '<img src='.esc_url( get_theme_mod( $img.'_sp' ) ).'>';
  $src .= '</picture>';
  return $src;
}
// function get_slider_img($img){
//   $src = '<img src='.esc_url( get_theme_mod( $img ) ).'>';

//   return $src;
// }
// function get_slider_img(){
//   $src = '<picture>';
//   $src .= '<source media="(min-width: 768px)" srcset='.esc_url( get_theme_mod( 'image_url01' ) ).'>';
//   $src .= '<img src='.esc_url( get_theme_mod( 'image_url01'.'_sp' ) ).'>';
//   $src .= '</picture>';
//   // return $src;

//   $src = '<picture>';
//   $src .= '<source media="(min-width: 768px)" srcset='.esc_url( get_theme_mod( 'image_url02' ) ).'>';
//   $src .= '<img src='.esc_url( get_theme_mod( 'image_url02'.'_sp' ) ).'>';
//   $src .= '</picture>';
//   // return $src;

//   $src = '<picture>';
//   $src .= '<source media="(min-width: 768px)" srcset='.esc_url( get_theme_mod( 'image_url03' ) ).'>';
//   $src .= '<img src='.esc_url( get_theme_mod( 'image_url03'.'_sp' ) ).'>';
//   $src .= '</picture>';

//   return $src;
// }

// function get_slider_img(){
//   for($i = 1;$i <= 4;$i++ ){
//   $src = '<picture>';
//   $src .= '<source media="(min-width: 768px)" srcset='.esc_url( get_theme_mod('image_url0'.$i)).'>';
//   $src .= '<img src='.esc_url( get_theme_mod('image_url0'. $i. '_sp')).'>';
//   $src .= '</picture>';
//   }
//   return $src;
// }
