<?php
/*
Template Name: サービス紹介
*/
get_header(); ?>

<main class="l-main">
  <!-- ======================================== 
           下層ページ用ヒーロー (p-page-hero)
      ======================================== -->
  <section class="p-page-hero">
    <div class="l-inner p-page-hero__inner">
      <h1 class="p-page-hero__title">
        <span class="p-page-hero__title-en">Service</span>
        <span class="p-page-hero__title-ja">サービス紹介</span>
      </h1>
      <p class="p-page-hero__copy">
        どのサービスが必要か決まっていなくても大丈夫です。<br>お客様の悩みや課題を伺いながら、必要な支援を一緒に考えます。
      </p>
    </div>
    <div class="p-page-hero__deco p-page-hero__deco-service" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-bg-img.png')); ?>" alt="" />
    </div>
  </section>

  <!-- ========================================
           こんなお悩みはありませんか？ (p-service-trouble)
      ======================================== -->
  <section class="l-section p-service-trouble">
    <div class="l-inner p-service-trouble__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">TROUBLED POINTS</span>
        こんなお悩みはありませんか？
      </h2>

      <div class="p-service-trouble__list">
        <!-- アイテム 01 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 01</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_1.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">日々の業務に手作業やムダが多い</p>
        </div>
        <!-- アイテム 02 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 02</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_2.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            業務を効率化したいが、何から始めればよいか分からない
          </p>
        </div>
        <!-- アイテム 03 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 03</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_3.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            社内のIT活用を進めたいが、詳しい人材がいない
          </p>
        </div>
        <!-- アイテム 04 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 04</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_4.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            現在使用しているシステムを見直したい
          </p>
        </div>
        <!-- アイテム 05 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 05</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_5.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            新しいシステムを導入・開発したい
          </p>
        </div>
        <!-- アイテム 06 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 06</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_6.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            社内のIT環境やインフラに不安がある
          </p>
        </div>
        <!-- アイテム 07 -->
        <div class="c-trouble-card">
          <div class="c-trouble-card__head">
            <span class="c-trouble-card__num">Case 07</span>
            <div class="c-trouble-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_7.svg')); ?>" alt=""
                class="c-trouble-card__img" />
            </div>
            <!-- /.c-trouble-card__icon -->
          </div>
          <p class="c-trouble-card__text">
            システム導入や開発のプロジェクトが思うように進まない
          </p>
        </div>
      </div>

      <p class="p-service-trouble__message">
        このような悩みに対して、以下のサービスで支援します。
      </p>
    </div>
  </section>

  <!-- ========================================
           提供サービス (p-service-list)
      ======================================== -->
  <section class="l-section p-service-list">
    <div class="l-inner p-service-list__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">SERVICE</span>
        提供サービス
      </h2>

      <!-- ★WP実装時：この中身をカスタム投稿のループで出力する想定 -->
      <div class="p-service-list__content">
        <!-- サービス 01 -->
        <div class="c-service-accordion js-accordion">
          <!-- クリックできるヘッダー部分 -->
          <div class="c-service-accordion__head js-accordion-trigger">
            <div class="c-service-accordion__title-wrap">
              <span class="c-service-accordion__num">01</span>
              <h3 class="c-service-accordion__title">業務・課題整理</h3>
            </div>
            <div class="c-service-accordion__problem">
              <span class="c-service-accordion__label">こんな悩みに：</span>
              <p class="c-service-accordion__problem-text">
                手作業やムダな作業を減らしたい /
                ITを活用したいが何が合うか分からない
              </p>
            </div>
            <div class="c-service-accordion__toggle">
              <span class="c-service-accordion__toggle-text">提供サービス</span>
              <span class="c-service-accordion__toggle-icon"></span>
            </div>
          </div>
          <!-- アコーディオンで開閉するボディ部分 -->
          <div class="c-service-accordion__body js-accordion-body">
            <div class="c-service-accordion__body-inner">
              <p class="c-service-accordion__desc">
                現状の業務やお困りごとを伺い、どこに課題があるのか、何から取り組むべきなのかを整理します。具体的なシステム導入や改善方法が決まっていない段階からご相談いただけます。
              </p>
              <!-- ★WP実装時：タクソノミー（ターム）のループ出力 -->
              <div class="c-service-accordion__tax">
                <span class="c-service-accordion__tax-label">対応領域</span>
                <ul class="c-service-accordion__tax-list">
                  <li class="c-service-accordion__tax-item">
                    <a href="#">業務フロー整理</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">課題の可視化</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">優先順位の整理</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- サービス 02 -->
        <div class="c-service-accordion js-accordion">
          <div class="c-service-accordion__head js-accordion-trigger">
            <div class="c-service-accordion__title-wrap">
              <span class="c-service-accordion__num">02</span>
              <h3 class="c-service-accordion__title">
                IT活用・業務改善支援
              </h3>
            </div>
            <div class="c-service-accordion__problem">
              <span class="c-service-accordion__label">こんな悩みに：</span>
              <p class="c-service-accordion__problem-text">
                手作業やムダな作業を減らしたい /
                ITを活用したいが何が合うか分からない
              </p>
            </div>
            <div class="c-service-accordion__toggle">
              <span class="c-service-accordion__toggle-text">提供サービス</span>
              <span class="c-service-accordion__toggle-icon"></span>
            </div>
          </div>
          <div class="c-service-accordion__body js-accordion-body">
            <div class="c-service-accordion__body-inner">
              <p class="c-service-accordion__desc">
                現在の業務や社内体制を確認し、ITを活用して改善できる部分を整理します。単にツールを紹介するのではなく、実際の業務に合った改善方法を検討・提案します。
              </p>
              <div class="c-service-accordion__tax">
                <span class="c-service-accordion__tax-label">対応領域</span>
                <ul class="c-service-accordion__tax-list">
                  <li class="c-service-accordion__tax-item">
                    <a href="#">業務効率化</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">ツール活用</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">運用改善</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- サービス 03 -->
        <div class="c-service-accordion js-accordion">
          <div class="c-service-accordion__head js-accordion-trigger">
            <div class="c-service-accordion__title-wrap">
              <span class="c-service-accordion__num">03</span>
              <h3 class="c-service-accordion__title">
                システム導入・開発支援
              </h3>
            </div>
            <div class="c-service-accordion__problem">
              <span class="c-service-accordion__label">こんな悩みに：</span>
              <p class="c-service-accordion__problem-text">
                新しいシステムを導入・開発したい / 今のシステムを見直したい
              </p>
            </div>
            <div class="c-service-accordion__toggle">
              <span class="c-service-accordion__toggle-text">提供サービス</span>
              <span class="c-service-accordion__toggle-icon"></span>
            </div>
          </div>
          <div class="c-service-accordion__body js-accordion-body">
            <div class="c-service-accordion__body-inner">
              <p class="c-service-accordion__desc">
                課題や目的に応じて、必要なシステムの選定・導入・開発を支援します。最初から新規開発を前提とせず、既存サービスの活用なども含めて必要な方法を検討します。
              </p>
              <div class="c-service-accordion__tax">
                <span class="c-service-accordion__tax-label">対応領域</span>
                <ul class="c-service-accordion__tax-list">
                  <li class="c-service-accordion__tax-item">
                    <a href="#">業務システム</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">Webシステム</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">既存システム改修</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">SaaS・クラウドサービス</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">システム選定</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- サービス 04 -->
        <div class="c-service-accordion js-accordion">
          <div class="c-service-accordion__head js-accordion-trigger">
            <div class="c-service-accordion__title-wrap">
              <span class="c-service-accordion__num">04</span>
              <h3 class="c-service-accordion__title">
                IT環境・インフラ支援
              </h3>
            </div>
            <div class="c-service-accordion__problem">
              <span class="c-service-accordion__label">こんな悩みに：</span>
              <p class="c-service-accordion__problem-text">
                社内のIT環境に不安がある /
                ネットワークやセキュリティを見直したい
              </p>
            </div>
            <div class="c-service-accordion__toggle">
              <span class="c-service-accordion__toggle-text">提供サービス</span>
              <span class="c-service-accordion__toggle-icon"></span>
            </div>
          </div>
          <div class="c-service-accordion__body js-accordion-body">
            <div class="c-service-accordion__body-inner">
              <p class="c-service-accordion__desc">
                日々の業務を支えるIT環境の整備・見直しを支援します。業務を安心して行えるIT環境を整えるための支援です。
              </p>
              <div class="c-service-accordion__tax">
                <span class="c-service-accordion__tax-label">対応領域</span>
                <ul class="c-service-accordion__tax-list">
                  <li class="c-service-accordion__tax-item">
                    <a href="#">ネットワーク</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">サーバー</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">クラウド</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">セキュリティ</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">社内IT環境</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- サービス 05 -->
        <div class="c-service-accordion js-accordion">
          <div class="c-service-accordion__head js-accordion-trigger">
            <div class="c-service-accordion__title-wrap">
              <span class="c-service-accordion__num">05</span>
              <h3 class="c-service-accordion__title">
                プロジェクト推進支援
              </h3>
            </div>
            <div class="c-service-accordion__problem">
              <span class="c-service-accordion__label">こんな悩みに：</span>
              <p class="c-service-accordion__problem-text">
                プロジェクトが思うように進まない /
                社内だけでは進行管理が難しい
              </p>
            </div>
            <div class="c-service-accordion__toggle">
              <span class="c-service-accordion__toggle-text">提供サービス</span>
              <span class="c-service-accordion__toggle-icon"></span>
            </div>
          </div>
          <div class="c-service-accordion__body js-accordion-body">
            <div class="c-service-accordion__body-inner">
              <p class="c-service-accordion__desc">
                システム導入や開発などのプロジェクトについて、計画・進行管理・関係者との調整など、実行段階を支援します。
              </p>
              <div class="c-service-accordion__tax">
                <span class="c-service-accordion__tax-label">対応領域</span>
                <ul class="c-service-accordion__tax-list">
                  <li class="c-service-accordion__tax-item">
                    <a href="#">PM ／ PMO</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">要件整理</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">進行管理</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">ベンダー調整</a>
                  </li>
                  <li class="c-service-accordion__tax-item">
                    <a href="#">社内調整</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================================
           支援範囲について (p-support-area)
      ======================================== -->
  <section class="l-section p-support-area">
    <div class="p-support-area__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">SUPPORT AREA</span>
        支援範囲について
      </h2>

      <!-- ▼ PC時はこの親枠をGridコンテナにする -->
      <div class="p-support-area__content">
        <!-- 中央のリードエリア -->
        <div class="p-support-area__lead">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon.svg')); ?>" alt=""
            class="p-support-area__lead-icon" />
          <p class="p-support-area__lead-text">
            最適な組み合わせで<br />ご支援
          </p>
        </div>

        <!-- 支援範囲リスト -->
        <ul class="c-support-list">
          <!-- 01 -->
          <li class="c-support-card">
            <!-- SP用の大きなアイコン（PCでは非表示） -->
            <div class="c-support-card__sp-icon u-hidden-pc">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_area_icon_01.svg')); ?>" alt="" />
            </div>

            <div class="c-support-card__body">
              <div class="c-support-card__head">
                <span class="c-support-card__num">01</span>
                <h3 class="c-support-card__title">整理・要件定義</h3>
                <!-- PC用の説明文（SPでは非表示） -->
                <p class="c-support-card__desc u-hidden-sp-tab">
                  現状を整理し、<br />最適な方向性を見出します。
                </p>
              </div>

              <!-- タグリスト（SPではテキスト、PCではタグとして表示） -->
              <ul class="c-support-card__tags">
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_01.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>業務整理</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_02.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>課題整理</span>
                </li>

                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_03.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>要件整理</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_04.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>社内調整</span>
                </li>
              </ul>
            </div>
          </li>

          <!-- 02 -->
          <li class="c-support-card">
            <!-- SP用の大きなアイコン（PCでは非表示） -->
            <div class="c-support-card__sp-icon u-hidden-pc">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_area_icon_02.svg')); ?>" alt="" />
            </div>

            <div class="c-support-card__body">
              <div class="c-support-card__head">
                <span class="c-support-card__num">02</span>
                <h3 class="c-support-card__title">推進・マネジメント</h3>
                <!-- PC用の説明文（SPでは非表示） -->
                <p class="c-support-card__desc u-hidden-sp-tab">
                  プロジェクトを計画から<br />
                  実行まで支援します。
                </p>
              </div>

              <!-- タグリスト（SPではテキスト、PCではタグとして表示） -->
              <ul class="c-support-card__tags">
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_05.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>PM / PMO</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_06.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>進行管理</span>
                </li>
              </ul>
            </div>
          </li>

          <!-- 03 -->
          <li class="c-support-card">
            <!-- SP用の大きなアイコン（PCでは非表示） -->
            <div class="c-support-card__sp-icon u-hidden-pc">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_area_icon_03.svg')); ?>" alt="" />
            </div>

            <div class="c-support-card__body">
              <div class="c-support-card__head">
                <span class="c-support-card__num">03</span>
                <h3 class="c-support-card__title">インフラ・環境整備</h3>
                <!-- PC用の説明文（SPでは非表示） -->
                <p class="c-support-card__desc u-hidden-sp-tab">
                  安定したIT基盤で、<br />
                  安心して使える環境を整えます。
                </p>
              </div>

              <!-- タグリスト（SPではテキスト、PCではタグとして表示） -->
              <ul class="c-support-card__tags">
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_07.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>クラウド</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_08.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>セキュリティ</span>
                </li>

                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_09.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>サーバー</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_10.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>IT環境整備</span>
                </li>
              </ul>
            </div>
          </li>

          <!-- 04 -->
          <li class="c-support-card">
            <!-- SP用の大きなアイコン（PCでは非表示） -->
            <div class="c-support-card__sp-icon u-hidden-pc">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_area_icon_04.svg')); ?>" alt="" />
            </div>

            <div class="c-support-card__body">
              <div class="c-support-card__head">
                <span class="c-support-card__num">04</span>
                <h3 class="c-support-card__title">導入・活用支援</h3>
                <!-- PC用の説明文（SPでは非表示） -->
                <p class="c-support-card__desc u-hidden-sp-tab">
                  最適なツールの導入と<br />
                  効果的な活用を支援します。
                </p>
              </div>

              <!-- タグリスト（SPではテキスト、PCではタグとして表示） -->
              <ul class="c-support-card__tags">
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_11.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>システム選定</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_07.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>SaaS導入</span>
                </li>

                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_12.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>IT活用</span>
                </li>
              </ul>
            </div>
          </li>

          <!-- 05 -->
          <li class="c-support-card">
            <!-- SP用の大きなアイコン（PCでは非表示） -->
            <div class="c-support-card__sp-icon u-hidden-pc">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_area_icon_05.svg')); ?>" alt="" />
            </div>

            <div class="c-support-card__body">
              <div class="c-support-card__head">
                <span class="c-support-card__num">05</span>
                <h3 class="c-support-card__title">開発・改善</h3>
                <!-- PC用の説明文（SPでは非表示） -->
                <p class="c-support-card__desc u-hidden-sp-tab">
                  業務にフィットしたシステム開発と<br />
                  継続的な改善を支援します。
                </p>
              </div>

              <!-- タグリスト（SPではテキスト、PCではタグとして表示） -->
              <ul class="c-support-card__tags">
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_01.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>システム開発</span>
                </li>
                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_02.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>既存システム改修</span>
                </li>

                <li class="c-support-card__tag">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/support_icon_pc_03.svg')); ?>" alt=""
                    class="u-hidden-sp-tab" />
                  <span>業務改善</span>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ========================================
           課題に沿った支援イメージ (p-service-case)
      ======================================== -->
  <section class="l-section p-service-case">
    <div class="l-inner p-service-case__container">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">SUPPORT FLOW</span>
        課題に応じた支援イメージ
      </h2>

      <div class="p-service-case__list">
        <!-- Case 01 -->
        <div class="c-support-step">
          <div class="c-support-step__badge">Case <span>01</span></div>
          <div class="c-support-step__header">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_2.svg')); ?>" alt=""
              class="c-support-step__icon" />
            <h3 class="c-support-step__title">
              何から始めればよいか分からない
            </h3>
          </div>
          <div class="c-support-step__body">
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-01.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                現在の業務や困っていることを確認し、業務の流れや課題を整理
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-02.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                解決すべき課題と優先順位を明確にする
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-03.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                必要に応じて、業務改善・IT活用などの方法を検討
              </p>
            </div>
          </div>
        </div>

        <!-- Case 02 -->
        <div class="c-support-step">
          <div class="c-support-step__badge">Case <span>02</span></div>
          <div class="c-support-step__header">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_6.svg')); ?>" alt=""
              class="c-support-step__icon" />
            <h3 class="c-support-step__title">社内のIT環境に不安がある</h3>
          </div>
          <div class="c-support-step__body">
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-01.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                現在のネットワークやシステム環境を確認し、問題点や改善すべき箇所を整理
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-02.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                対応の優先度やリスクを整理
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-03.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                IT環境の見直しや改善方法を検討
              </p>
            </div>
          </div>
        </div>

        <!-- Case 03 -->
        <div class="c-support-step">
          <div class="c-support-step__badge">Case <span>03</span></div>
          <div class="c-support-step__header">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-icom_3.svg')); ?>" alt=""
              class="c-support-step__icon" />
            <h3 class="c-support-step__title">
              システム導入プロジェクトが社内だけでは進まない
            </h3>
          </div>
          <div class="c-support-step__body">
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-01.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                現在の計画・体制・進行状況を確認し、進行を妨げている課題を整理
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-02.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                必要な進め方と役割分担を整理
              </p>
            </div>
            <div class="c-support-step__arrow">↓</div>
            <div class="c-support-step__item">
              <div class="c-support-step__item-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-flow-icon-03.svg')); ?>"
                  alt="" />
              </div>
              <p class="c-support-step__item-text">
                進行管理や関係者調整など、必要な実行支援につなげる
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ご相談から解決までの流れへの誘導 -->
  <div class="p-service-case__lead">
    <div class="p-service-case__lead-inner">
      <h3 class="p-service-case__lead-title">
        <span class="p-service-case__lead-title-en">SUPPORT FLOW</span>
        <span class="p-service-case__lead-title-ja">ご相談から解決までの流れ</span>
      </h3>
      <p class="p-service-case__lead-text-sp">
        弊社では、お問い合わせから実際の支援開始まで、お客様の課題を丁寧にヒアリングし、最適なプランをご提案します。
      </p>
      <p class="p-service-case__lead-text-tab-pc">
        サービス内容をご確認いただけましたら、実際のご相談からの進め方もご覧ください。
      </p>
      <a href="<?php echo esc_url(home_url('/flow/')); ?>" class="c-btn-service"> 解決までの流れを見る </a>
    </div>
    <!-- /.p-service-case__lead-inner -->
  </div>

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