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
  <div id="loader-bg">
    <div class="loader-bg--container">
      <p class="loader-bg--container__load-text">Hello,American Village</p>
    </div>
  </div>
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
        <a class="menu">
          <span class="menu__line menu__line--top"></span>
          <span class="menu__line menu__line--center"></span>
          <span class="menu__line menu__line--bottom"></span>
        </a>
        <nav class="gnav">
          <div class="gnav__wrap">
            <ul class="gnav__menu">
              <li class="gnav__menu__item"><a href="">Menu01</a></li>
              <li class="gnav__menu__item"><a href="">Menu02</a></li>
              <li class="gnav__menu__item"><a href="">Menu03</a></li>
              <li class="gnav__menu__item"><a href="">Menu04</a></li>
            </ul>
          </div>
        </nav>
        <!-- /スマホのみ　ハンバーガー -->
      </div>
    </div>
    <?php wp_head();?>
  </header>
