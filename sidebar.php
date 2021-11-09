<aside class="l-sidebar p-sidebar js-sidebar">
  <button class="c-close js-menubtn"></button>
  <h2 class="c-headline">Menu</h2>
  <?php wp_nav_menu( array(
      'menu_class' => 'p-gmenu',
      'container' => 'nav',
      'container_class' => 'p-sidebar__nav',
      'depth' => 0,
      'theme_location' => 'categorymenu',
    ) ) ?>
</aside><!-- /l-sidebar p-sidebar -->