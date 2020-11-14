<?php get_header(); ?>

<main>
    <section class="first-view">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/first-view.jpg" alt="">
        <div class="first-view__title">
            <h2 class="first-view__title-first">N's house</h2>
            <h2 class="first-view__title-second">- Shota's portfolio -</h2>
        </div>
    </section>
    
    <section class="profile fade-in-bottom">
        <div class="profile__wrapper">
            <div class="profile__inner inner">
                <div class="profile__content">
                    <h2>Profile</h2>
                    <h3>Who am I ...</h3>
                    <p>Web Creator&Designer… etc…..</p>
                    <a href="">And more</a>
                </div>
                <a href="#" class="profile__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" alt="プロフィール部分の画像">
                </a>
            </div>
        </div>
    </section>
    
    <section class="works fade-in-bottom">
        <div class="works__wrapper">
            <div class="works__inner inner">
                <div class="works__content">
                    <h2>Works</h2>
                    <h3>What Can I Do…</h3>
                    <p>Work… Work… Work…..</p>
                    <a href="">And more</a>
                </div>
                <a href="#" class="works__image">
                    <div class="image-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/frogschool.jpg" alt=""></div>
                    <div class="image-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ninjacode.jpg" alt=""></div>
                    <div class="image-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nowroom.jpg" alt=""></div>
                    <div class="image-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/airbnb.jpg" alt=""></div>
                </a>
            </div>
        </div>
    </section>
    
    <section class="contact fade-in-bottom">
        <div class="contact__wrapper">
            <div class="contact__inner inner">
                <div class="contact__content">
                    <h2>Contact</h2>
                    <h3>Can I be Connected…</h3>
                    <p>Please Your Information…..</p>
                    <a href="">And more</a>
                </div>
                <a href="#" class="contact__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/contact.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
