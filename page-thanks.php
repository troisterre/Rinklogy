<?php
/*
Template Name: お問い合わせ完了（サンクスページ）
*/
get_header(); ?>

<main class="l-main">
  <!-- ========================================
           サンクスページ用コンテンツ (p-contact-thanks)
      ======================================== -->
  <section class="l-section p-contact-thanks">
    <div class="l-inner p-contact-thanks__inner">
      <!-- タイトルエリア -->
      <h1 class="p-contact-thanks__title">
        <span class="p-contact-thanks__title-en">CONTACT</span>
        <span class="p-contact-thanks__title-ja">お問い合わせありがとうございます</span>
      </h1>

      <!-- メッセージエリア -->
      <div class="p-contact-thanks__message">
        <p class="p-contact-thanks__text">
          お問い合わせを受け付けました。<br />
          内容を確認のうえ、担当者よりご連絡いたします。
        </p>
      </div>

      <!-- ボタンエリア -->
      <div class="p-contact-thanks__btn-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--no-arrow">トップページへ戻る</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>