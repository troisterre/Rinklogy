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
      <!-- 
            ★ Contact Form 7 のショートコード出力
          <div class="c-form">
  <!-- お名前 -->
      <div class="c-form__row">
        <div class="c-form__label-area">
          <label for="your-name" class="c-form__label">お名前</label>
          <span class="c-form__badge c-form__badge--req">必須</span>
        </div>
        <div class="c-form__input-area">
          [text* your-name id:your-name class:c-form__input-text placeholder "山田 太郎"]
        </div>
      </div>

      <!-- 会社名 -->
      <div class="c-form__row">
        <div class="c-form__label-area">
          <label for="your-company" class="c-form__label">会社名</label>
          <span class="c-form__badge c-form__badge--req">必須</span>
        </div>
        <div class="c-form__input-area">
          [text* your-company id:your-company class:c-form__input-text placeholder "株式会社〇〇"]
        </div>
      </div>

      <!-- メールアドレス -->
      <div class="c-form__row">
        <div class="c-form__label-area">
          <label for="your-email" class="c-form__label">メールアドレス</label>
          <span class="c-form__badge c-form__badge--req">必須</span>
        </div>
        <div class="c-form__input-area">
          [email* your-email id:your-email class:c-form__input-text]
        </div>
      </div>

      <!-- ご相談内容 (チェックボックス) -->
      <div class="c-form__row">
        <div class="c-form__label-area">
          <label class="c-form__label">ご相談内容</label>
          <span class="c-form__badge c-form__badge--req">必須</span>
        </div>
        <div class="c-form__input-area">
          <p class="c-form__note">当てはまるものをすべてお選びください。</p>
          <div class="c-form__checkbox-group">
            [checkbox* your-subject use_label_element "業務のムダや手間を減らしたい" "社内のIT活用を進めたい" "システムの導入・見直しを考えている"
            "何から手をつけるべきか相談したい" "その他"]
          </div>
        </div>
      </div>

      <!-- ご相談内容詳細 (テキストエリア) -->
      <div class="c-form__row">
        <div class="c-form__label-area">
          <label for="your-message" class="c-form__label">ご相談内容詳細</label>
        </div>
        <div class="c-form__input-area">
          <p class="c-form__note">現在お困りのことや、ご相談したい内容について、分かる範囲でご記入ください。</p>
          [textarea your-message id:your-message class:c-form__textarea x6]
        </div>
      </div>

      <!-- 区切り線 -->
      <hr class="c-form__divider" />

      <!-- プライバシーポリシー -->
      <div class="c-form__privacy">
        [acceptance acceptance class:c-form__checkbox] プライバシーポリシーに同意する<br class="u-hidden-pc" /><a href="/privacy/"
          target="_blank" class="c-form__privacy-link">（プライバシーポリシーを開く）</a> [/acceptance]
      </div>

      <!-- 送信ボタン -->
      <div class="c-form__submit">
        [submit class:c-btn-submit "入力内容を確認する"]
      </div>
    </div>
    -->
    <?php echo do_shortcode('[contact-form-7 id="xxxx" title="お問い合わせフォーム"]'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>