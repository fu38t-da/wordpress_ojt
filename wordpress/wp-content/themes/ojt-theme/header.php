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
  <div class="width-wrapper">
    <header>
      <div class="header">
        <h1 class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ:アメリカンビレッジ">
        </h1>
        <!-- PCのみ -->
        <div class="header__nav">
          <ul>
            <li>Menu01</li>
            <li>Menu02</li>
            <li>Menu03</li>
            <li>Menu04</li>
          </ul>
        </div>
        <!-- スマホのみ　ハンバーガー -->
        <div class="header__hamburger">
          <span></span>
        </div>
        <!-- /スマホのみ　ハンバーガー -->
      </div>
      <?php wp_head();?>
    </header>
