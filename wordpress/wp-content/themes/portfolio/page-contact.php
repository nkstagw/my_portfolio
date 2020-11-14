<?php
/**
 * Template Name: page-contact
 */
get_header();
?>

<main>
  <section class="top">
    <div class="top__wrapper inner">
      <h2 class="top__title"><?php the_title(); ?></h2>
      <div class="top__image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/contact.jpg" alt="プロフィール部分の画像">
      </div>
    </div>
  </section>


<section class="contact">
  <div class="contact__wrapper">
    <h2 class="contact__title">お問い合わせ</h2>
    <div class="contact__twitter">
      <h3>Twitter DMでのお問い合わせ</h3>
      <p>TwitterのDMからのお問い合わせも受け付けております。</p>
      <a class="contact__twitterbtn" href="https://twitter.com/nk_Nshouse" target="_blank" rel="noopener noreferrer">DMはこちらから</a>
    </div>
    <div class="contact__mail">
      <h3>メールフォームでのお問い合わせ</h3>
      <?php the_content(); ?></div>
  </div>
</section>

<?php get_footer(); ?>