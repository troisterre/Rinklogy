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
      <ul class="l-footer__list">
        <li class="l-footer__item"><a href="<?php echo esc_url(home_url('/#company')); ?>">会社案内</a></li>
        <li class="l-footer__item"><a href="<?php echo esc_url(home_url('/#service')); ?>">サービス</a></li>
        <li class="l-footer__item">
          <a href="<?php echo esc_url(home_url('/#flow')); ?>">ご相談から解決まで</a>
        </li>
        <li class="l-footer__item"><a href="<?php echo esc_url(home_url('/#contact')); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>

  <!-- コピーライト -->
  <div class="l-footer__copyright">
    <small>© 2026 Rinklogy Inc. All Rights Reserved.</small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>