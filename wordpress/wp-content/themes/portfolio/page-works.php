<?php
/**
 * Template Name: page-works
 */
get_header();
?>

<main>
  <section class="top">
    <div class="top__wrapper">
      <h2 class="top__title">Works</h2>
      <div class="top__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt="プロフィール部分の画像">
      </div>
    </div>
  </section>

  <section class="main-works">
    <div class="main-works__wrapper">

      <div class="main-works__card">
        <a class="main-works__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt="">
        </a>
        <h3 class="main-works__title">testestestwettet</h3>
        <p class="main-works__content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod magnam labore vel! Atque ad debitis, at recusandae aspernatur iusto itaque quo suscipit, eligendi adipisci voluptate, rem veniam ducimus provident fuga!</p>
      </div>

      <div class="main-works__card">
        <a class="main-works__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt="">
        </a>
        <h3 class="main-works__title">testtesttesttessttest</h3>
        <p class="main-works__content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod magnam labore vel! Atque ad debitis, at recusandae aspernatur iusto itaque quo suscipit, eligendi adipisci voluptate, rem veniam ducimus provident fuga!</p>
      </div>

    </div>
  </section>

  <section class="sub-works">
    <div class="sub-works__slider">
      <ul class="slider">
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>
        <li><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt=""></a></li>

      </ul>
    </div>
  </section>

<?php get_footer(); ?>