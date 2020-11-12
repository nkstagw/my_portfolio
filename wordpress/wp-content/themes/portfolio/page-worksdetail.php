<?php
/**
 * Template Name: page-worksdetail
 */
get_header();
?>

<section class="work-thumbnail">
  <div class="work-thumbnail__wrapper inner">
    <div class="work-thumbnail__image-pc">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc-thumbnail-<?php echo attribute_escape($post->post_name);?>.jpg" alt="">
    </div>
    <div class="work-thumbnail__image-sp">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sp-thumbnail-<?php echo attribute_escape($post->post_name);?>.jpg" alt="">
    </div>
  </div>
</section>

<section class="work-content">
  <div class="work-content__wrapper inner">
    <h2 class="work-content__title"><?php the_title(); ?></h2>
    <div class="work-content__text"><?php the_content(); ?></div>
  </div>
</section>

<section class="work-full">
  <div class="work-full__wrapper inner">
    <div class="work-full__image-left">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc-full-left-<?php echo attribute_escape( $post->post_name);?>.jpg" alt="">
    </div>
    <div class="work-full__image-right">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc-full-right-<?php echo attribute_escape( $post->post_name);?>.jpg" alt="">
    </div>
  </div>
</section>

<section class="back">
  <a  class="back__btn" href="http://localhost:8000/works/"><span>Back</spa></a>
</section>

<?php get_footer(); ?>
