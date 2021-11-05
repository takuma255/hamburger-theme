<?php
  get_header(); ?>

<main class="l-main p-main">
  <div class="p-hero--archive">
    <h1 class="p-hero__headline">Search:</h1>
    <p class="p-hero__lead">チーズバーガー</p>
  </div><!-- /p-hero -->
  <article class="p-main__body--archive">
    <h2 class="p-main__body__headline">小見出しが入ります</h2>
    <p class="p-main__body__description">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p><?php
      if( have_posts()): ?>
    <ul class="p-archive">
      <?php
        while( have_posts()): the_post(); ?>
      <li class="p-archive__list">
        <figure class="l-card p-card">
          <?php the_post_thumbnail( 'medium' ) ?>
          <div class="l-card__body p-card__body">
            <h3 class="p-card__body__headline">
              <?php the_title(); ?>
            </h3>
            <h4 class="p-card__body__subheadline">小見出しが入ります</h4>
            <figcaption class="p-card__body__description">
              <?php the_excerpt(); ?>
            </figcaption>
          </div><!-- /l-card__body p-card__body -->
          <div class="l-card__btnarea p-card__btnarea">
            <a href="<?php the_permalink(); ?>" class="c-btn--detail">詳しく見る</a>
          </div><!-- /l-card__detail p-card__detail -->
        </figure><!-- /l-card p-card -->
      </li><!-- /p-archive__list -->
      <?php endwhile; ?>
    </ul><!-- /p-archive -->
    <?php endif; ?>
    <ul class="c-pagination">
      <li class="c-pagination__current">page 1/10</li>
      <li class="c-pagination__mark--prev"><a href="#" class="c-link">&laquo;</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">1</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">2</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">3</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">4</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">5</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">6</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">7</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">8</a></li>
      <li class="c-pagination__number"><a href="#" class="c-link">9</a></li>
      <li class="c-pagination__mark--next"><a href="#" class="c-link">&raquo;</a></li>
    </ul><!-- /c-pagination -->
  </article><!-- /p-main__body--archive-search -->
</main>
<div class="c-overlay js-sidebar"></div>

<?php
  get_sidebar(); ?>

<?php
  get_footer(); ?>