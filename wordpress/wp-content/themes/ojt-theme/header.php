<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <title>Hello,AmericanVillage!!</title>
</head>
<body>
<header>
  <div class="header">
    <div class="header-width-wrapper">
      <div class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ:アメリカンビレッジ">
      </div>
        <!-- PCのみ -->
        <div class="header__nav">
          <?php wp_nav_menu(); ?>
        </div>
        <!-- スマホのみ　ハンバーガー -->
        <div class="header__hamburger">
          <span></span>
        </div>
        <!-- /スマホのみ　ハンバーガー -->
      </div>
    </div>
    <?php wp_head();?>
  </header>
