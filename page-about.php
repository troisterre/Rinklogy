<?php
/*
Template Name: 会社案内
*/
get_header(); ?>

<main class="l-main">
  <!-- ========================================
           下層ページ用ヒーロー (p-page-hero)
      ======================================== -->
  <section class="p-page-hero">
    <div class="l-inner p-page-hero__inner">
      <h1 class="p-page-hero__title">
        <span class="p-page-hero__title-en">Company</span>
        <span class="p-page-hero__title-ja">会社案内</span>
      </h1>
      <p class="p-page-hero__copy">
        お客様の「困った」に寄り添い、<br />
        課題の整理から解決まで。<br />
        私たちの会社についてご紹介します。
      </p>
    </div>
    <!-- 背景のうずまき装飾用 -->
    <div class="p-page-hero__deco" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/p-page-hero_img.png')); ?>" alt="" />
    </div>
  </section>

  <!-- ========================================
           ミッション / ビジョン (p-about-mission)
      ======================================== -->
  <section class="l-section p-about-mission">
    <div class="l-inner p-about-mission__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">MISSION / VISION</span>
        ミッション / ビジョン
      </h2>

      <div class="p-about-mission__content">
        <!-- MISSION -->
        <div class="p-about-mission__top">
          <div class="p-about-mission__block">
            <h3 class="p-about-mission__head">
              <span class="p-about-mission__en">MISSION</span>
              <span class="p-about-mission__ja">私たちの使命</span>
            </h3>
            <p class="p-about-mission__text p-about-mission__text--large">
              ITとともに、仕事の価値をもっと大きく。
            </p>
          </div>

          <!-- VISION -->
          <div class="p-about-mission__block">
            <h3 class="p-about-mission__head">
              <span class="p-about-mission__en">VISION</span>
              <span class="p-about-mission__ja">目指す未来</span>
            </h3>
            <p class="p-about-mission__text p-about-mission__text--large">
              挑戦する時間も、人生を楽しむ時間もある社会へ。
            </p>
          </div>
        </div>

        <!-- VALUE -->
        <div class="p-about-mission__block-value">
          <h3 class="p-about-mission__head">
            <span class="p-about-mission__en">VALUE</span>
            <span class="p-about-mission__ja">大切にする価値観</span>
          </h3>

          <div class="p-about-mission__values">
            <dl class="c-value-list">
              <div class="c-value-list__item">
                <dt>01｜顧客から、考える。</dt>
                <dd>
                  私たちの都合や技術ありきではなく、顧客にとっての価値をすべての判断の起点にする。<br />
                  「それは本当に、顧客のためになるか。」<br />
                  迷ったら、そこに戻る。
                </dd>
              </div>
              <div class="c-value-list__item">
                <dt>02｜技術を磨き、価値に変える。</dt>
                <dd>
                  新しい技術を追うだけでは意味がない。<br />
                  学び、試し、使いこなし、顧客の仕事やビジネスを良くするところまでつなげる。<br />
                  技術力ではなく、技術から生まれた価値で評価される。
                </dd>
              </div>
              <div class="c-value-list__item">
                <dt>03｜信頼を、ひとつずつ積み重ねる。</dt>
                <dd>
                  信頼は、大きな成果だけでは生まれない。<br />
                  約束を守る。<br />
                  できないことは正直に伝える。<br />
                  小さな仕事にも誠実に向き合う。<br />
                  その積み重ねが、長く続く関係をつくる。
                </dd>
              </div>
              <div class="c-value-list__item">
                <dt>04｜まず動く。速く磨く。</dt>
                <dd>
                  完璧な答えを待って、動かないことを選ばない。<br />
                  まず試す。<br />
                  確かめる。<br />
                  学ぶ。<br />
                  より良くする。<br />
                  速さとは、雑に進めることではなく、学習のサイクルを速く回すこと。
                </dd>
              </div>
              <div class="c-value-list__item">
                <dt>05｜自分から、仕事を動かす。</dt>
                <dd>
                  誰かから指示されるまで待たない。<br />
                  課題を見つけ、自ら考え、提案し、周囲を巻き込みながら前へ進める。<br />
                  仕事を与えられる人ではなく、仕事を動かす人である。
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
           代表メッセージ (p-about-message)
      ======================================== -->
  <section class="l-section p-about-message">
    <div class="l-inner p-about-message__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">MESSAGE</span>
        代表メッセージ
      </h2>

      <div class="p-about-message__content">
        <!-- 1. 画像 -->
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/company_img.png')); ?>" alt="代表 山口 諒"
          class="p-about-message__img" />

        <!-- 2. 名前エリア -->
        <div class="p-about-message__name-wrap">
          <span class="p-about-message__role">代表取締役</span>
          <h3 class="p-about-message__name">山口 諒</h3>
        </div>

        <!-- 3. テキストエリア -->
        <div class="p-about-message__body">
          <p class="p-about-message__text">
            <span>仕事を前へ。人生にも、時間を。</span><br />
            ITには、仕事をただ効率化するだけではなく、仕事そのものの価値を大きくする力があると、私たちは考えています。<br />
            面倒な仕事を減らす。より良い商品やサービスを生み出す。お客さまへの価値を高める。新しいことに挑戦する。<br />
            仕事が前に進めば、企業には次の挑戦に向き合う余力が生まれます。<br />
            そして、そこで働く人にも時間が生まれる。<br />
            家族と食卓を囲む。仲間と語り合う。好きなことを楽しむ。何もしない時間を過ごす。<br />
            企業が成長し、高い生産性を維持し続けていくことと、人が自分の人生を大切にすること。<br />
            どちらか一方を選ぶのではなく、どちらも実現できる。
            「ITって、こんなに便利なんだ。」<br />
            「ITがあることで、こんなことまでできるんだ。」<br />
            そんな実感が、もっと多くの仕事の中に広がっていく。
            Rinklogyは、ITとともにしごとの価値を大きくし、挑戦する時間も、人生を楽しむ時間もある社会を目指します。
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
           私たちの強み (p-about-strength)
      ======================================== -->
  <section class="l-section p-about-strength">
    <div class="l-inner p-about-strength__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">STRENGTH</span>
        私たちの強み
      </h2>

      <div class="p-about-strength__list">
        <!-- 強み01 -->
        <div class="c-strength-card">
          <div class="c-strength-card__header">
            <span class="c-strength-card__num">Strength 01</span>
            <div class="c-strength-card__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/strength-card_icon_01.svg')); ?>" alt=""
                class="c-strength-card__icon" />
            </div>
          </div>
          <div class="c-strength-card__body">
            <div class="c-strength-card__title">
              <h3>経営と現場をつなぐ</h3>
              <strong>課題整理</strong>
            </div>
            <p class="c-strength-card__text">
              経営上の悩みだけでなく、実際の業務や現場の状況も確認しながら、解決すべき課題を整理します。
            </p>
          </div>
        </div>

        <!-- 強み02 -->
        <div class="c-strength-card">
          <div class="c-strength-card__header">
            <span class="c-strength-card__num">Strength 02</span>
            <div class="c-strength-card__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/strength-card_icon_02.svg')); ?>" alt=""
                class="c-strength-card__icon" />
            </div>
          </div>
          <div class="c-strength-card__body">
            <div class="c-strength-card__title">
              <h3>開発・インフラ双方の</h3>
              <strong>知見</strong>
            </div>
            <p class="c-strength-card__text">
              システム開発からネットワーク、サーバー、クラウドまで、IT環境も含めて幅広く検討します。
            </p>
          </div>
        </div>

        <!-- 強み03 -->
        <div class="c-strength-card">
          <div class="c-strength-card__header">
            <span class="c-strength-card__num">Strength 03</span>
            <div class="c-strength-card__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/strength-card_icon_03.svg')); ?>" alt=""
                class="c-strength-card__icon" />
            </div>
          </div>
          <div class="c-strength-card__body">
            <div class="c-strength-card__title">
              <h3>プロジェクトを前に進める</h3>
              <strong>実行力</strong>
            </div>
            <p class="c-strength-card__text">
              計画や提案だけでなく、進行管理や関係者との調整など、実行段階まで対応します。
            </p>
          </div>
        </div>
        <!-- 強み04 -->
        <div class="c-strength-card">
          <div class="c-strength-card__header">
            <span class="c-strength-card__num">Strength 04</span>
            <div class="c-strength-card__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/strength-card_icon_04.svg')); ?>" alt=""
                class="c-strength-card__icon" />
            </div>
          </div>
          <div class="c-strength-card__body">
            <div class="c-strength-card__title">
              <h3>課題整理から実行までの</h3>
              <strong>一貫支援</strong>
            </div>
            <p class="c-strength-card__text">
              課題整理からシステム導入・開発、業務改善、プロジェクト推進まで一貫して支援します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
           会社概要 (p-about-outline)
           ※トップページの .p-company__outline-list と同じクラスを活用します
      ======================================== -->
  <section class="l-section p-about-outline">
    <div class="l-inner">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">COMPANY PROFILE</span>
        会社概要
      </h2>

      <div class="p-about-outline__table">
        <dl class="p-company__outline-list">
          <div class="p-company__outline-row">
            <dt>会社名</dt>
            <dd>株式会社Rinklogy</dd>
          </div>
          <div class="p-company__outline-row">
            <dt>代表者</dt>
            <dd>山口 諒</dd>
          </div>
          <div class="p-company__outline-row">
            <dt>事業内容</dt>
            <dd>
              PM/PMO支援 / システム開発 / DX Consulting / 不動産賃貸・売買
            </dd>
          </div>
          <div class="p-company__outline-row">
            <dt>E-mail</dt>
            <dd>info@rinklogy.co.jp
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </section>

  <!-- ========================================
           CTA (トップページと共通)
      ======================================== -->
  <section class="l-section p-cta" id="contact">
    <div class="l-inner">
      <div class="p-cta__inner">
        <!-- Background SVG Shapes -->
        <div class="p-cta__bg-shapes" aria-hidden="true">
          <!-- Triangle 1 (Top Right) -->
          <svg class="p-cta__shape p-cta__shape--1" xmlns="http://www.w3.org/2000/svg" width="322" height="335"
            viewBox="0 0 322 335" fill="none">
            <path d="M0 0L322 335H0V0Z" fill="#07808E" fill-opacity="0.15" />
          </svg>

          <!-- Triangle 2 (Top Left) -->
          <svg class="p-cta__shape p-cta__shape--2" xmlns="http://www.w3.org/2000/svg" width="404" height="357"
            viewBox="0 0 404 357" fill="none">
            <path d="M-15.9999 -37L404 373H-16L-15.9999 -37Z" fill="#07808E" fill-opacity="0.1" />
          </svg>

          <!-- Triangle 3 (Bottom Left) -->
          <svg class="p-cta__shape p-cta__shape--3" xmlns="http://www.w3.org/2000/svg" width="342" height="343"
            viewBox="0 0 342 343" fill="none">
            <path d="M-51.9999 0L342 385H-52L-51.9999 0Z" fill="#07808E" fill-opacity="0.18" />
          </svg>
        </div>

        <!-- Left Column: Title -->
        <h2 class="p-cta__title">
          <span class="p-cta__title-en">Contact us</span>
          <span class="p-cta__title-ja">まずは、お話をお聞かせください。</span>
        </h2>

        <!-- Right Column: Content -->
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