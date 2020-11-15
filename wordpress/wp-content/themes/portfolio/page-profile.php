<?php
/**
 * Template Name: page-profile
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


  <section class="introduce">
    <div class="introduce__wrapper inner">
      <div class="introduce__content">
        <span class="name-ja">中川　翔太</span>
        <span class="name-en">Nakagawa Shota</span>
        <p>1993年　兵庫生まれ<br class="br-pc">
          WEB製作を中心に活動しています。<br class="br-pc">
          趣味は野球・サッカー・ゴルフなど体を動かすことが好きです！<br class="br-pc">
          最近は料理にも挑戦中です。
        </p>

        <span class="career">経歴</span>
        <ul>
          <li>
            <span class="date">2015年3月</span>
            <span>岡山大学　機械システム系学科　卒業</span>
          </li>
          <li>
            <span class="date">2017年3月</span>
            <span>岡山大学　大学院　自然科学研究科　卒業</span>
          </li>
          <li>
            <span class="date">2017年4月</span>
            <span>機械設計者として筐体や駆動系の設計業務に従事</span>
          </li>
          <li>
            <span class="date">2020年3月〜</span>
            <span>WEBサイトやLP作成などのWEB製作を中心に活動中</span>
          </li>
        </ul>
      </div>

      <div class="introduce__image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile-image.jpg" alt="">
      </div>
    </div>
  </section>


  <section class="skill">
    <h3 class="skill__title">Skill Set</h3>
    <div class="skill__wrapper inner">
    <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">HTML</h4>
              <span class="skill__ratio">90%</span>
            </div>
            <div class="skill__bar ninety start_animation">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/html_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">CSS</h4>
              <span class="skill__ratio">90%</span>
            </div>
            <div class="skill__bar ninety">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/css_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">Sass</h4>
              <span class="skill__ratio">90%</span>
            </div>
            <div class="skill__bar ninety">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sass_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">Bootstrap</h4>
              <span class="skill__ratio">90%</span>
            </div>
            <div class="skill__bar ninety">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bootstrap_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">jQuery</h4>
              <span class="skill__ratio">80%</span>
            </div>
            <div class="skill__bar eighty">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/jQuery_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">Wordpress</h4>
              <span class="skill__ratio">70%</span>
            </div>
            <div class="skill__bar seventy">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/wordpress_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">Adobe XD</h4>
              <span class="skill__ratio">70%</span>
            </div>
            <div class="skill__bar seventy">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Xd_icon.svg" alt="">
          </div>
      </div>

      <div class="skill__item">
          <div class="skill__content">
            <div class="skill__header">
              <h4 class="skill__name">Git/GitHub</h4>
              <span class="skill__ratio">60%</span>
            </div>
            <div class="skill__bar sixty">
              <div class="skill__statusbar"></div>
            </div>
          </div>
          <div class="skill__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/github_icon.svg" alt="">
          </div>
      </div>
    </div>
  </section>


  <section class="service">
    <h3 class="service__title">Service</h3>
    <div class="service__wrapper inner">
      <div class="service__card">
        <div class="service__image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/code.jpg" alt="">
        </div>
        <div class="service__content">
          <h4>CODING</h4>
          <span>コーディング</span>
          <p>デザインに合わせて忠実にコーディングいたします。早い・正確な作業を意識し、お客様のイメージ通りのページ構築を行っていきます。スマホ・タブレットサイズなどデザインを変化させるレスポンシブ対応も行います。</p>
        </div>
      </div>

      <div class="service__card">
        <div class="service__image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/webdesign.jpg" alt="">
        </div>
        <div class="service__content">
          <h4>DESIGN</h4>
          <span>デザイン</span>
          <p>お客様のイメージにあったデザインをご提供いたします。WEBページの目的が似ていても、業種や取り扱う物・サービスによってデザインは大きく異なります。お客様のイメージを詳細に具現化しお客様の思いを形にいたします。また使いやすいUI/UXを意識してデザインいたします。</p>
        </div>
      </div>

      <div class="service__card">
        <div class="service__image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/wordpress.jpg" alt="">
        </div>
        <div class="service__content">
          <h4 class="text-sp">WORDPRESS</h4>
          <span>ワードプレス</span>
          <p>お知らせやイベント情報など更新が必要なサイトは「WordPress」で実装いたします。コストやスピード感を求められる方は既存テーマのカスタマイズ、しっかり作り込みたい方はテーマ作成などお客様のご要望に合わせた作成を行います。</p>
        </div>
      </div>
  </section>
</main>

<?php get_footer(); ?>