<?php
  get_header(); ?>

<main class="l-main p-main">
  <div class="p-hero--home">
    <h1 class="p-hero__headline">DUMMY BURGER</h1>
  </div><!-- /p-hero -->
  <article class="p-main__body">
    <ul class="p-service c-layout--2column">
      <li class="p-service__list--left">
        <a href="<?php echo esc_url( home_url( '/category/takeout/' ) ); ?>" class="c-link--block"></a>
        <section class="p-service__list__inner">
          <h2 class="c-headline--underline">Take Out</h2>
          <div class="c-wrapper">
            <dl class="c-definition">
              <dt class="c-definition__headline">Take Out</dt>
              <dd class="c-definition__description">当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
            <dl class="c-definition">
              <dt class="c-definition__headline">Take Out</dt>
              <dd class="c-definition__description">当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
          </div><!-- /c-wrapper left dl -->
        </section><!-- /p-service__list__inner -->
      </li><!-- /p-service__list--left -->
      <li class="p-service__list--right">
        <a href="<?php echo esc_url( home_url( '/category/eatin/' ) ); ?>" class="c-link--block"></a>
        <section class="p-service__list__inner">
          <h2 class="c-headline--underline">Eat In</h2>
          <div class="c-wrapper">
            <dl class="c-definition">
              <dt class="c-definition__headline">Eat In</dt>
              <dd class="c-definition__description">当店のイートインで利用できる商品を掲載しています</dd>
            </dl>
            <dl class="c-definition">
              <dt class="c-definition__headline">Eat In</dt>
              <dd class="c-definition__description">当店のイートインで利用できる商品を掲載しています</dd>
            </dl>
          </div><!-- /c-wrapper right dl -->
        </section><!-- /p-service__list__inner -->
      </li><!-- /p-service__list--right -->
    </ul><!-- /p-service -->
    <section class="p-info">
      <iframe class="c-map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11556.751098128057!2d124.13901123226616!3d24.45953184125628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345fdd8ded702639%3A0xb79f9d4feeccc73c!2z5bed5bmz5YWs5ZyS5bGV5pyb5Y-w!5e0!3m2!1sja!2sjp!4v1632667153574!5m2!1sja!2sjp"
        width="1553" height="649" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <dl class="c-definition">
        <dt class="c-headline--underline">DUMMY BURGER</dt>
        <dd class="c-definition__description">
          住所　　 ： 〒123-4567</br>
          　　　　　　沖縄県◯◯市△△ 9999−99</br>
          電話番号 ： 9999-99-9999</br>
          営業時間 ： 10:00 ～ 19:00</br>
          定休日　 ： 水曜日</br>
        </dd>
      </dl>
    </section><!-- /p-info -->
  </article><!-- /p-main__body -->
</main>
<div class="c-overlay js-sidebar"></div>

<?php
  get_sidebar(); ?>

<?php
  get_footer(); ?>