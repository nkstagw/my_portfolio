<?php get_header(); ?>

<main>
    <section class="first-view move">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/first-view.jpg" alt="">
        <div class="first-view__title">
            <h2 class="first-view__title-first">shota's</h2>
            <h2 class="first-view__title-second">portfolio</h2>
        </div>
    </section>
    
    <section class="profile fade-in-bottom">
        <div class="profile__wrapper">
            <div class="profile__inner">
                <div class="profile__content">
                    <h2>Profile</h2>
                    <h3>Who am I ...</h3>
                    <p>Web Creator… Web Designer… etc…..</p>
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
            <div class="works__inner">
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
            <div class="contact__inner">
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


<!-- 以下は元のコード。一応残しておく -->
<!-- <div id="main_cover">
    <div class="first-view">
        <h2>いらないものを省いて<span>かしこい結婚式</span></h2>
    </div>

    <div class="point1">
        <div class="point1-container">
            <div class="point-text-wrapper">
                <h3>予算内で人気のゲストハウスから一流ホテルまで選べる</h3>
                <h4>理想の式場でリーズナブルな結婚式を</h4>
                <p>ホテルやゲストハウスは高い費用のイメージがあるかと思いますが、「高いから…」と諦めず、まずはTHE KYOTO-KONへ相談！
                    THE KYOTO-KONのオリジナルプランはリーズナブルな価格で夢の会場での結婚式が叶います。</p>
                <h4>内容が充実したオリジナルプラン</h4>
                <p>価格だけではなく内容にも満足できるプラン。プラン外の追加で予算を遥に超えた…！なんて心配もいりません。費用の心配はせず、安心して当日を迎えましょう。</p>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/point1.png" alt="" class="fade-in-bottom">

        </div>
    </div>
</div> -->
<?php get_footer();
