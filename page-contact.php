<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>

<main class="l-main">
  <!-- ========================================
           お問い合わせ用ヒーロー (p-contact-hero)
      ======================================== -->
  <section class="p-contact-hero">
    <div class="l-inner p-contact-hero__inner">
      <h1 class="p-contact-hero__title">
        <span class="p-contact-hero__title-en">Contact us</span>
        <span class="p-contact-hero__title-ja">お問い合わせ</span>
      </h1>
      <p class="p-contact-hero__text">
        業務やITに関するお困りごとがございましたら、<br class="u-hidden-tab-pc" />
        お気軽にお問い合わせください。<br />
        「何から手をつければよいか分からない」という<br class="u-hidden-tab-pc" />
        段階でも構いません。<br />
        分かる範囲で、現在のお困りごとをお聞かせください。
      </p>
    </div>
  </section>

  <!-- ========================================
           お問い合わせフォーム (p-contact-form)
      ======================================== -->
  <section class="l-section p-contact-form">
    <div class="l-inner p-contact-form__inner">

      <?php echo do_shortcode('[contact-form-7 id="a768920" title="お問い合わせ"]'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>