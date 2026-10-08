<?php
/*
Template Name: ご相談から解決まで
*/
get_header(); ?>

<main class="l-main">
  <!-- ========================================
           下層ページ用ヒーロー (p-page-hero)
      ======================================== -->
  <section class="p-page-hero">
    <div class="l-inner p-page-hero__inner">
      <h1 class="p-page-hero__title">
        <span class="p-page-hero__title-en">Flow</span>
        <span class="p-page-hero__title-ja">ご相談から解決までの流れ</span>
      </h1>
      <p class="p-page-hero__copy">
        開発するシステムや解決手段が決まっていなくても<br class="u-hidden-flow" />
        問題ありません。<br />
        まずは現状のお困りごとを伺い、課題を整理するところから<br class="u-hidden-flow" />
        一緒に進めていきます。
      </p>
    </div>

    <div class="p-page-hero__deco p-page-hero__deco-flow" aria-hidden="true"></div>
    <div class="p-page-hero__deco p-page-hero__deco-flow-tab-pc" aria-hidden="true"></div>
  </section>
  <!-- ========================================
           タイムライン (p-flow-timeline)
      ======================================== -->
  <section class="l-section p-flow-timeline">
    <div class="l-inner p-flow-timeline__inner">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">TIMELINE</span>
        お問い合わせから支援開始の流れ
      </h2>

      <div class="p-flow-timeline__list">
        <!-- STEP 01 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">01</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">お問い合わせ</h3>
            <p class="c-timeline-step__text">
              お問い合わせフォームからご連絡ください。この段階で、具体的なシステム名やIT導入の要件が決まっていなくても問題ありません。「何に困っているか」「どんなことを改善したいか」など、分かる範囲でお知らせください。
            </p>
          </div>
        </div>

        <!-- STEP 02 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">02</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">ヒアリング</h3>
            <p class="c-timeline-step__text">
              現在の状況やお困りごと、将来の理想の姿などについて詳しく伺います。システムの問題だけでなく、実際の業務や社内の状況も踏まえてお話をさせていただきます。
            </p>
          </div>
        </div>

        <!-- STEP 03 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">03</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">課題整理</h3>
            <p class="c-timeline-step__text">
              ヒアリングした内容をもとに、どこに問題があるか、何を優先して改善すべきかを整理します。本当にITシステムが必要かどうかも含めて検討します。
            </p>
          </div>
        </div>

        <!-- STEP 04 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">04</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">ご提案</h3>
            <p class="c-timeline-step__text">
              整理した課題をもとに、必要な解決方法や支援内容をご提案します。業務改善、IT活用、システム導入・開発など、御社にとって最適な方法を検討します。
            </p>
          </div>
        </div>

        <!-- STEP 05 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">05</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">ご契約・支援開始</h3>
            <p class="c-timeline-step__text">
              ご提案内容・費用・進め方などをご納得いただき、納得いただける形で契約になります。ご納得いただかないまま、強引に支援開始になることはありません。
            </p>
          </div>
        </div>

        <!-- STEP 06 -->
        <div class="c-timeline-step">
          <div class="c-timeline-step__num">06</div>
          <div class="c-timeline-step__content">
            <h3 class="c-timeline-step__title">実行・運用</h3>
            <p class="c-timeline-step__text">
              決定した方針に沿って、業務改善やシステム導入・開発などを進めます。導入して終わりではなく、必要に応じて運用時の改善や定着まで支援します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
           事前準備について (p-flow-prep)
      ======================================== -->
  <section class="l-section p-flow-prep">
    <div class="l-inner p-flow-prep__inner">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">PREPARATION</span>
        特別な準備は必要ありません
      </h2>

      <div class="p-flow-prep__content">
        <!-- 不要なものリスト -->
        <div class="p-flow-prep__top">
          <div class="c-prep-box c-prep-box--not-required">
            <h3 class="c-prep-box__head">ご用意いただく必要はありません</h3>
            <ul class="c-prep-box__list">
              <li class="c-prep-box__item">詳しい要件書や仕様書</li>
              <li class="c-prep-box__item">システムに関する専門知識</li>
              <li class="c-prep-box__item">完成した改善案や企画書</li>
            </ul>
          </div>

          <!-- 必要なものリスト -->
          <div class="c-prep-box c-prep-box--required">
            <h3 class="c-prep-box__head">分かる範囲でお聞かせください</h3>
            <ul class="c-prep-box__list">
              <li class="c-prep-box__item">現在困っていること</li>
              <li class="c-prep-box__item">改善したいと感じていること</li>
              <li class="c-prep-box__item">今後こうなりたいという方向性</li>
            </ul>
          </div>
        </div>
        <!-- /.p-flow-prep__top -->

        <!-- ご相談後の支援について -->
        <div class="p-flow-prep__after">
          <div class="p-flow-prep__note-box">
            課題が整理できていない段階でも、対話を通して一緒に整理していきます。
          </div>

          <p class="p-flow-prep__after-text">
            契約後の支援内容は、お客様の課題や状況によって異なります。<br />
            課題整理だけで解決する場合もあれば、IT活用・業務改善、システム導入・開発、<br />IT環境の整備、プロジェクト推進などが必要になる場合もあります。
          </p>

          <a href="<?php echo esc_url(home_url('/service/')); ?>" class="c-btn-outline">
            サービス内容を見る
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
           下段 CTA (共通)
      ======================================== -->
  <section class="l-section p-cta" id="contact">
    <div class="l-inner">
      <div class="p-cta__inner">
        <h2 class="p-cta__title">
          <span class="p-cta__title-en">Contact us</span>
          <span class="p-cta__title-ja">まずは、お話をお聞かせください。</span>
        </h2>
        <div class="p-cta__content">
          <p class="p-cta__text">
            業務改善やIT活用のことはもちろん、<br />
            「何から始めれば良いか分からない」という<br />
            段階でも、お気軽にご相談ください。
          </p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-cta__btn">
            無料で相談してみる
            <span class="p-cta__btn-arrow" aria-hidden="true">→</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>