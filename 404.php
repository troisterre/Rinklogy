<?php get_header(); ?>

<main class="l-main">
  <!-- ========================================
       404 Not Found (p-404)
  ======================================== -->
  <section class="l-section p-404">
    <div class="l-inner p-404__inner">

      <!-- タイトルエリア -->
      <h1 class="p-404__title">
        <span class="p-404__title-en">404 NOT FOUND</span>
        <span class="p-404__title-ja">お探しのページが見つかりません</span>
      </h1>

      <!-- メッセージエリア -->
      <div class="p-404__message">
        <p class="p-404__text">
          アクセスしようとしたページは、移動または削除されたか、<br class="u-hidden-sp" />
          入力されたURLが間違っている可能性があります。<br />
          お手数ですが、トップページより再度お探しください。
        </p>
      </div>

      <!-- ボタンエリア -->
      <div class="p-404__btn-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--no-arrow">トップページへ戻る</a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>