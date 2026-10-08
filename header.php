<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO設定（プラグイン等で出力する場合は削除・調整してください） -->
  <title>岐阜県各務原市のITパートナー・システム開発 | 株式会社Rinklogy</title>
  <meta name="description"
    content="岐阜県各務原市を拠点とする株式会社Rinklogyです。PM/PMO支援、システム開発、DXコンサルティングを通じて、お客様の目線で真剣に伴走し経営課題を解決します。" />

  <!-- ドメイン確認後修正 -->
  <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:site_name" content="株式会社Rinklogy" />
  <meta property="og:title" content="岐阜県各務原市のITパートナー・システム開発 | 株式会社Rinklogy" />
  <meta property="og:description"
    content="岐阜県各務原市を拠点とする株式会社Rinklogyです。PM/PMO支援、システム開発、DXコンサルティングを通じて、お客様の目線で真剣に伴走し経営課題を解決します。" />
  <!-- ドメイン確認後修正-->
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:type" content="website" />
  <!-- 画像確認後修正-->
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('/assets/images/common/ogp.jpg')); ?>" />
  <meta name="twitter:card" content="button_large_image" />

  <!-- ファビコン・スマホ用アイコンWordPressでロゴを入れる -->
  <link rel="icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(home_url('/apple-touch-icon.png')); ?>" />

  <!-- MEO（ローカルSEO）対策：URLや画像やメールアドレスを修正-->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "株式会社Rinklogy",
      "image": "<?php echo esc_url(get_theme_file_uri('/assets/images/common/logo.png')); ?>",
      "url": "<?php echo esc_url(home_url('/')); ?>",
      "email": "yamaguchi.makoto@rinklogy.co.jp",
      "founder": {
        "@type": "Person",
        "name": "山口 諒"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "蘇原栄町1丁目20番地",
        "addressLocality": "各務原市",
        "addressRegion": "岐阜県",
        "addressCountry": "JP"
      }
    }
  </script>

  <!-- CSS / JS の読み込み -->
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/main.css')); ?>" />
  <script src="<?php echo esc_url(get_theme_file_uri('/assets/main.js')); ?>" defer></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- MEO対策用: LocalBusinessのスキーマを宣言 -->
  <header class="l-header" itemscope itemtype="http://schema.org/LocalBusiness">
    <div class="l-header__inner">
      <!-- ロゴエリア -->
      <h1 class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.svg')); ?>" alt="株式会社Rinklogy"
            width="150" height="45" decoding="async" itemprop="logo" />
        </a>
      </h1>

      <!-- PC用グローバルナビゲーション） -->
      <nav class="l-header__nav" aria-label="PC用グローバルナビゲーション">
        <ul class="c-gnav">
          <li class="c-gnav__item"><a href="<?php echo esc_url(home_url('/#company')); ?>">会社案内</a></li>
          <li class="c-gnav__item"><a href="<?php echo esc_url(home_url('/#service')); ?>">サービス</a></li>
          <li class="c-gnav__item"><a href="<?php echo esc_url(home_url('/#flow')); ?>">ご相談から解決まで</a></li>
        </ul>
        <div class="l-header__cta">
          <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-btn c-btn--primary c-btn--small">お問い合わせ</a>
        </div>
      </nav>

      <!-- ハンバーガーボタン（※PCではCSSで非表示にする想定） -->
      <button type="button" class="c-hamburger js-hamburger" aria-controls="global-nav" aria-expanded="false"
        aria-label="メニューを開く">
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
      </button>
    </div>

    <!-- ドロワーメニュー（スマホ・タブレット用） -->
    <nav id="global-nav" class="l-drawer js-drawer" aria-hidden="true">
      <div class="l-drawer__inner">
        <ul class="c-gnav">
          <li class="c-gnav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <div class="c-gnav__text">
                <span class="c-gnav__ja">ホーム</span>
                <span class="c-gnav__en">HOME</span>
              </div>
            </a>
          </li>
          <li class="c-gnav__item">
            <a href="<?php echo esc_url(home_url('/#company')); ?>">
              <div class="c-gnav__text">
                <span class="c-gnav__ja">会社案内</span>
                <span class="c-gnav__en">COMPANY</span>
              </div>
            </a>
          </li>
          <li class="c-gnav__item">
            <a href="<?php echo esc_url(home_url('/#service')); ?>">
              <div class="c-gnav__text">
                <span class="c-gnav__ja">サービス</span>
                <span class="c-gnav__en">SERVICES</span>
              </div>
            </a>
          </li>
          <li class="c-gnav__item">
            <a href="<?php echo esc_url(home_url('/#flow')); ?>">
              <div class="c-gnav__text">
                <span class="c-gnav__ja">ご相談から解決まで</span>
                <span class="c-gnav__en">FLOW</span>
              </div>
            </a>
          </li>
        </ul>
        <div class="l-drawer__cta">
          <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-btn c-btn--primary">無料で相談してみる</a>
        </div>
      </div>
    </nav>

    <!-- ドロワー展開時の背景暗幕 -->
    <div class="l-overlay js-overlay"></div>
  </header>