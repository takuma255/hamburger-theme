<?php
  get_header(); ?>

<main class="l-main p-main">
  <div class="p-hero--single"
    style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
    <h1 class="p-hero__headline">
      <?php single_post_title() ?>
    </h1>
  </div><!-- /p-hero -->
  <article class="p-main__body--single">
    <?php
      if( have_posts()): ?>
    <?php
        while( have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;
      else :
      ?><p class="p-single__error">該当商品が見つかりません</p>
    <?php endif; ?>
  </article><!-- /p-main__body--single -->
</main>
<div class="c-overlay js-sidebar"></div>

<?php
  get_sidebar(); ?>

<?php
  get_footer(); ?>