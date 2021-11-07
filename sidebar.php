<aside class="l-sidebar p-sidebar js-sidebar">
  <button class="c-close js-menubtn"></button>
  <h2 class="c-headline">Menu</h2>
  <nav class="p-sidebar__nav">
    <?php
      if (is_active_sidebar('hamburgershop_widget')):
        dynamic_sidebar('hamburgershop_widget');
      else: ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
  </nav>
</aside><!-- /l-sidebar p-sidebar -->