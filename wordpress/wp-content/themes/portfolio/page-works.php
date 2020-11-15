<?php
/**
 * Template Name: page-works
 */
get_header();
?>

<main>
  <section class="top">
    <div class="top__wrapper inner">
      <h2 class="top__title"><?php the_title(); ?></h2>
      <div class="top__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt="プロフィール部分の画像">
      </div>
    </div>
  </section>

  <section class="main-works">
    <div class="main-works__wrapper inner">

      <div class="main-works__card">
        <a href="http://localhost:8000/works/frog-school/" class="main-works__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/FrogSchool_image.jpg" alt="">
        </a>
        <h3 class="main-works__title">Frog School 【模写】</h3>
        <p class="main-works__content">
          <span class="main-works__text">トップページのサイト模写になります。ファーストビュー部分の動画の挿入やインタビュー音声なども実装しております。またお問い合わせ部分も実際に機能しており、実装には「formrun」というアプリケーションを使用しております。</span>
          <span class="main-works__text">製作日数：5日</span>
          <span class="main-works__text">使用スキル:HTML/CSS(Sass)/Bootstrap</span>
        </p>
      </div>

      <div class="main-works__card">
        <a href="http://localhost:8000/works/now-room/" class="main-works__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nowroom_image.jpg" alt="">
        </a>
        <h3 class="main-works__title">お試しNOW ROOM【模写】</h3>
        <p class="main-works__content">
          <span class="main-works__text">トップページのサイト模写になります。ファーストビュー部分の動画の挿入やYoutubeやTwitterのリンク挿入も行っています。またアコーディオンやハンバーガーメニューなどの動的パーツも実装しております。</span>
          <span class="main-works__text">製作日数：3日</span>
          <span class="main-works__text">使用スキル:HTML/CSS(Sass)/JavaScript(jQuery)</span>
        </p>
      </div>

    </div>
  </section>

  <section class="sub-works">
    <h2 class="sub-works__title">その他の実績</h2>
    <div class="sub-works__slider">
      <ul class="slider">
        <li><a href="http://localhost:8000/works-detail/airbnb2/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/airbnb2.jpg" alt=""></a></li>
        <li><a href="http://localhost:8000/works-detail/ninja-code/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ninjacode.jpg" alt=""></a></li>
        <li><a href="http://localhost:8000/works-detail/airbnb1/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/airbnb1.jpg" alt=""></a></li>
        <li><a href="http://localhost:8000/works-detail/corporate-site/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/corporate.jpg" alt=""></a></li>
        <li><a href="http://localhost:8000/works-detail/task1/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/task1.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>

      </ul>
    </div>
  </section>

<?php get_footer(); ?>