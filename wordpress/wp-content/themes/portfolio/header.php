<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>N's house</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=yes">
  <meta name="description" content="index description">
  <meta name="format-detection" content="telephone=no">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

  <!-- font awesome CSS -->
  <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

  <!-- slick CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

  <!-- テーマを認識させるためのCSS 削除厳禁 -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">

  <!-- ページ毎に読み込むCSSを変えるための部分 -->
  <?php if ( is_front_page()): ?>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/index.css" />
  <?php endif; ?>

  <?php if ( is_page('profile') ): ?>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/profile.css" />
  <?php endif; ?>

  <?php if ( is_page('works') ): ?>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/works.css" />
  <?php endif; ?>
  <?php 
    $parent_id = $post->post_parent; 
    $parent_slug = get_post($parent_id)->post_name; 
  ?>
  <?php if ( $parent_slug == "works-detail"): ?>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/works-detail.css" />
  <?php endif; ?>

  <?php if ( is_page('contact') ): ?>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/contact.css" />
  <?php endif; ?>

  <!-- --------------------------------------- -->

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favcon.png">

  <?php wp_head(); ?>
</head>
<body>
  <header class="header  
  <?php 
    $parent_id = $post->post_parent; 
    $parent_slug = get_post($parent_id)->post_name; 
    echo $parent_slug;
  ?>
  <?php echo attribute_escape( $post->post_name);?>"
  >
    <div class="header__wrapper">
      <h1 class="header-title">
          <a href="/">N's house</a>
      </h1>

      <nav class="menu-container-pc">
        <ul class="menu">
          <li class="menu-item">
            <a href="http://localhost:8000">
            <span>Home</span>
            <span>ホーム</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/profile/">
            <span>Profile</span>
            <span>プロフィール</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/works/">
            <span>Works</span>
            <span>実績</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/contact/">
            <span>Contact</span>
            <span>お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>

      <div id="trigger" class="trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <nav class="menu-container-sp">
        <ul class="menu-sp">
          <li class="menu-item">
            <a href="http://localhost:8000">
              <div class="menu-item__container">
                <span>Home</span>
                <span>ホーム</span>
              </div>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/profile/">
              <div class="menu-item__container">
                <span>Profile</span>
                <span>プロフィール</span>
              </div>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/works/">
              <div class="menu-item__container">  
                <span>Works</span>
                <span>実績</span>
              </div>
            </a>
          </li>
          <li class="menu-item">
            <a href="http://localhost:8000/contact/">
              <div class="menu-item__container">
                <span>Contact</span>
                <span>お問い合わせ</span>
              </div>
            </a>
          </li>
        </ul>
    </nav>

    <div class="loader">
      <div class="loader__inner">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </div>

  </header>
