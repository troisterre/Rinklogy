<!-- ========================================
         FOOTER (共通)
    ======================================== -->
<footer class="l-footer">
  <div class="l-footer__inner">
    <!-- 左側：会社情報 -->
    <div class="l-footer__info">
      <h2 class="l-footer__logo">株式会社 Rinklogy</h2>
      <p class="l-footer__desc">
        経営課題を整理し、ITで解決を支援するパートナー
      </p>
    </div>

    <!-- 右側：ナビゲーション -->
    <nav class="l-footer__nav" aria-label="フッターナビゲーション">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'container'      => false,
        'menu_class'     => 'l-footer__list',
        'li_class'       => 'l-footer__item',
        'fallback_cb'    => false,
      ));
      ?>
    </nav>
  </div>

  <!-- コピーライト -->
  <div class="l-footer__copyright">
    <small>&copy; <?php echo wp_date('Y'); ?> Rinklogy Inc. All Rights Reserved.</small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>