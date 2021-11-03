<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HAMBURGER SHOP</title>
  <meta name="description" content="沖縄の海を見ながら食べるハンバーガー。こだわりのバンズと野菜、肉本来の旨味を追求した究極のパティ。「おいしい」を「おいしい」で挟む幸せ。">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
</head>
<body class="home l-body">
  <header class="l-header p-header">
    <button class="c-headline js-menubtn">Menu</button>
    <div class="c-wrapper">
      <h1 class="c-headline"><a class="c-link" href="#">Hamburger</a></h1>
      <form class="p-search" action="#" method="POST">
        <input class="c-searchbox--icon" type="search" name="search" placeholder="">
        <input class="c-btn--search" type="submit" name="submit" value="検索">
      </form><!-- /p-search -->
    </div>
  </header>
  <main class="l-main p-main">
    <div class="p-hero--home">
      <h1 class="p-hero__headline">DUMMY BURGER</h1>
    </div><!-- /p-hero -->
    <article class="p-main__body">
      <ul class="p-service c-layout--2column">
        <li class="p-service__list--left">
          <a href="#" class="c-link--block"></a>
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
          <a href="#" class="c-link--block"></a>
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
        <iframe class="c-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11556.751098128057!2d124.13901123226616!3d24.45953184125628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345fdd8ded702639%3A0xb79f9d4feeccc73c!2z5bed5bmz5YWs5ZyS5bGV5pyb5Y-w!5e0!3m2!1sja!2sjp!4v1632667153574!5m2!1sja!2sjp" width="1553" height="649" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
  <aside class="l-sidebar p-sidebar js-sidebar">
    <button class="c-close js-menubtn"></button>
    <h2 class="c-headline">Menu</h2>
    <nav class="p-sidebar__nav">
      <ul class="p-gmenu">
        <li class="p-gmenu__list">
          <a class="c-link" href="#">ハンバーガー</a>
          <ul class="p-lmenu">
            <li class="p-lmenu__list"><a class="c-link" href="#">ハンバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">チーズバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">テリヤキバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">アボカドバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">フィッシュバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">ベーコンバーガー</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">チキンバーガー</a></li>
          </ul>
        </li><!-- /p-gmenu__list hamburger -->
        <li class="p-gmenu__list">
          <a class="c-link" href="#">サイド</a>
          <ul class="p-lmenu">
            <li class="p-lmenu__list"><a class="c-link" href="#">ポテト</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">サラダ</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">ナゲット</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">コーン</a></li>
          </ul>
        </li><!-- /p-gmenu__list side menu -->
        <li class="p-gmenu__list">
          <a class="c-link" href="#">ドリンク</a>
          <ul class="p-lmenu">
            <li class="p-lmenu__list"><a class="c-link" href="#">コーラ</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">ファンタ</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">オレンジ</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">アップル</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">紅茶（Ice/Hot）</a></li>
            <li class="p-lmenu__list"><a class="c-link" href="#">コーヒー（Ice/Hot）</a></li>
          </ul>
        </li><!-- /p-gmenu__list drink -->
      </ul>
    </nav>
  </aside><!-- /l-sidebar p-sidebar -->
  <footer class="l-footer p-footer">
    <ul class="p-footer__menu">
      <li class="p-footer__menu__list"><a class="c-link" href="#">ショップ情報</a></li>
      <span class="c-line--vertical"></span>
      <li class="p-footer__menu__list"><a class="c-link" href="#">ヒストリー</a></li>
    </ul>
    <p class="c-copyright">Copyright:RaiseTech</p>
  </footer>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/sidebar.js"></script>
</body>
</html>