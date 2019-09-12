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
