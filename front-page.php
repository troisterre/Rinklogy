<?php get_header(); ?>

<main class="l-main">
  <section class="p-hero">
    <div class="p-hero__container">
      <div class="p-hero__inner">
        <!-- /.p-hero__inner -->
        <p class="p-hero__desc">業務改善・IT導入を一気通貫で支援</p>
        <h1 class="p-hero__copy">
          <span>課題整理</span>から<br class="u-hidden-pc" /><span>解決</span>まで、<br />隣で支える<br
            class="u-hidden-pc" /><span>ITパートナー</span>。
        </h1>
      </div>
      <!-- ★スライダーの枠（ここから） -->
      <div class="p-hero__image js-hero-slider">
        <!-- 1枚目のスライド（画像） -->
        <img class="js-hero-slide is-active"
          src="<?php echo esc_url(get_theme_file_uri('./assets/images/hero_img_1.png')); ?>" alt="打ち合わせの様子" width="600"
          height="400" decoding="async" />

        <!-- 2枚目のスライド（テキストコンテンツ）枠の中に入れます -->
        <div class="p-lead js-hero-slide">
          <span class="p-lead__label">私たちの役割</span>

          <p class="p-lead__text">
            何から始めるべきかの整理から現場での定着まで。<br />
            ノウハウ不足に悩む貴社チームに寄り添い、確実な<br />
            業務改善を強力に推進します。
          </p>

          <!-- 背景の透かし文字装飾 -->
          <div class="p-lead__deco" aria-hidden="true">OUR ROLE</div>
        </div>

        <img class="js-hero-slide" src="<?php echo esc_url(get_theme_file_uri('./assets/images/hero_img_3.png')); ?>"
          alt="全体の流れ" width="600" height="400" decoding="async" />
      </div>
      <!-- スライダーの枠（ここまで） -->

      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn">無料で相談してみる</a>
    </div>
    <!-- /.p-hero__container -->
  </section>

  <section class="l-section p-concept">
    <div class="l-inner p-concept__inner">
      <!-- 共通のセクションタイトル (Component) -->
      <h2 class="c-section-title">
        <span class="c-section-title__sub">CONCEPT</span>
        大切にしている考え方
      </h2>

      <!-- CONCEPT専用のコンテンツエリア (Project) -->
      <div class="p-concept__content">
        <!-- 左側（スマホでは上）のキャッチコピー -->
        <h3 class="p-concept__catch">
          答えは、<br /><span>対話</span>の中にある。
        </h3>

        <!-- 右側（スマホでは下）のテキストエリア -->
        <div class="p-concept__desc">
          <p class="p-concept__text">
            企業によって、課題も、必要な解決方法も違う。<br />
            だから私たちは、決まった方法を当てはめるのではなく、<br class="u-hidden-sp" />
            お客様とともに考えることから始めます。
          </p>
          <p class="p-concept__text p-concept__text--strong">
            課題に<span>向き合い</span>、最適な解決を<span>考え</span>、<br />
            <span>使い続けられる</span>ところまで。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-section p-consultation">
    <div class="l-inner p-consultation__inner">
      <!-- ヘッダー（タイトルとPC用ボタンの並び） -->
      <div class="p-consultation__header">
        <h2 class="c-section-title--left">
          <span class="c-section-title-sub--left">CONSULTATION</span>
          こんなご相談に対応しています
        </h2>

        <!-- タブレット・PC用ナビゲーション -->
        <div class="p-consultation__nav u-hidden-sp">
          <button class="c-slider-btn c-slider-btn--prev js-consult-prev"></button>
          <button class="c-slider-btn c-slider-btn--next js-consult-next"></button>
        </div>
      </div>

      <!-- スライダー本体（自作JS用） -->
      <div class="p-consultation__slider js-slider">
        <div class="p-consultation__list js-slider-list">
          <?php
          $args = array(
            'post_type'      => 'consultation',
            'posts_per_page' => 10,
            'order'          => 'ASC',
          );
          $consult_query = new WP_Query($args);

          if ($consult_query->have_posts()) :
            while ($consult_query->have_posts()) : $consult_query->the_post();

              // ① ACF: 説明文の取得
              $description = get_field('description');

              // ② タクソノミー: 画像上の英語ラベルを取得
              $cat_terms = get_the_terms(get_the_ID(), 'consultation_category');
              $category_label = ($cat_terms && ! is_wp_error($cat_terms)) ? $cat_terms[0]->name : '';

              // ③ タクソノミー: 下部のタグを取得
              $tag_terms = get_the_terms(get_the_ID(), 'consultation_tag');
          ?>

              <!-- スライドアイテム -->
              <div class="p-consultation__item js-slider-item">
                <article class="c-consult-card">

                  <div class="c-consult-card__img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('full', array('alt' => get_the_title()));
                    } else {
                      echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/consultation-img-1.png')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                    }
                    ?>
                    <?php if ($category_label) : ?>
                      <span class="c-consult-card__label"><?php echo esc_html($category_label); ?></span>
                    <?php endif; ?>
                  </div>

                  <div class="c-consult-card__body">
                    <h3 class="c-consult-card__title">
                      <?php the_title(); ?>
                    </h3>

                    <?php if ($description) : ?>
                      <p class="c-consult-card__desc">
                        <?php echo nl2br(esc_html($description)); ?>
                      </p>
                    <?php endif; ?>

                    <div class="c-consult-card__footer">
                      <span class="c-consult-card__footer-title">SUPPORT FIELDS</span>

                      <?php if ($tag_terms && ! is_wp_error($tag_terms)) : ?>
                        <ul class="c-consult-card__tags">
                          <?php foreach ($tag_terms as $tag) : ?>
                            <li class="c-consult-card__tag"><?php echo esc_html($tag->name); ?></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>

                    </div>
                  </div>

                </article>
              </div>
              <!-- /スライドアイテム -->

          <?php
            endwhile;
          else :
            echo '<p>現在、表示できるご相談内容がありません。</p>';
          endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>

      <!-- スマホ用ナビゲーション（ボタンのみ） -->
      <div class="p-consultation__controls">
        <button class="c-slider-btn c-slider-btn--prev c-slider-btn--sp js-consult-prev-sp"></button>

        <div class="js-consult-dot">
          <?php
          // スライドの枚数分だけ動的にドットを出力する
          if ($consult_query->have_posts()) {
            $dot_count = 0;
            while ($dot_count < $consult_query->post_count) {
              $active_class = ($dot_count === 0) ? ' is-active' : '';
              echo '<span class="c-dot js-support-dot' . $active_class . '"></span>';
              $dot_count++;
            }
          }
          wp_reset_postdata(); // 最後に必ずクエリをリセット
          ?>
        </div>

        <button class="c-slider-btn c-slider-btn--next c-slider-btn--sp js-consult-next-sp"></button>
      </div>
    </div>
  </section>

  <section class="l-section p-support-case">
    <div class="l-inner p-support-case__inner">
      <!-- ヘッダー（タイトル） -->
      <div class="p-support-case__header">
        <h2 class="c-section-title--left">
          <span class="c-section-title-sub--left">SUPPORT CASE</span>
          支援事例
        </h2>
      </div>

      <!-- スライダー / PC時はグリッド -->
      <div class="p-support-case__slider js-support-slider">
        <div class="p-support-case__list js-support-slider-list">

          <?php
          // カスタム投稿タイプ 'case'（支援事例）を取得
          $args = array(
            'post_type'      => 'case', // CPT UIで作成するスラッグ
            'posts_per_page' => 6,      // 表示件数
            'order'          => 'ASC',  // 順番
          );
          $support_query = new WP_Query($args);

          if ($support_query->have_posts()) :
            while ($support_query->have_posts()) : $support_query->the_post();

              // ① CASE番号の自動生成（ループの回数を使って 01, 02, 03... と出力）
              $case_num = sprintf('CASE %02d', $support_query->current_post + 1);

              // ② タクソノミー（業種）の取得
              $industry_terms = get_the_terms(get_the_ID(), 'case_industry');
              $industry_name  = ($industry_terms && ! is_wp_error($industry_terms)) ? $industry_terms[0]->name : '';

              // ③ タクソノミー（支援内容）の取得
              $service_terms = get_the_terms(get_the_ID(), 'case_service');
              $service_name  = ($service_terms && ! is_wp_error($service_terms)) ? $service_terms[0]->name : '';
          ?>

              <!-- カードアイテム -->
              <div class="p-support-case__item js-support-slider-item">
                <div class="c-case-card">

                  <!-- 背景画像 -->
                  <div class="c-case-card__bg">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('full', array('alt' => get_the_title()));
                    } else {
                      echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/case-card_03.png')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                    }
                    ?>
                  </div>

                  <!-- 左上のバッジ -->
                  <div class="c-case-card__badge">
                    <span class="c-case-card__badge-num"><?php echo esc_html($case_num); ?></span>
                    <?php if ($industry_name) : ?>
                      <span class="c-case-card__badge-cat"><?php echo esc_html($industry_name); ?></span>
                    <?php endif; ?>
                  </div>

                  <!-- 下部のコンテンツ -->
                  <div class="c-case-card__body">
                    <span class="c-case-card__label">課題</span>
                    <h3 class="c-case-card__title">
                      <?php the_title(); ?>
                    </h3>

                    <!-- 下向き矢印（CSSで描画するため空Div） -->
                    <div class="c-case-card__arrow"></div>

                    <span class="c-case-card__label">支援内容</span>
                    <p class="c-case-card__title c-case-card__title--small">
                      <?php echo esc_html($service_name); ?>
                    </p>
                  </div>

                </div>
              </div>
              <!-- /カードアイテム -->

          <?php
            endwhile;
          else :
            echo '<p>現在、表示できる支援事例がありません。</p>';
          endif;
          ?>

        </div>
      </div>

      <!-- コントロール（スマホ・タブレットのみ表示） -->
      <div class="p-support-case__controls">
        <button class="c-slider-btn c-slider-btn--prev c-slider-btn--sp js-support-prev"></button>
        <div class="p-support-case__pagination js-support-pagination">
          <?php
          // スライドの枚数分だけ動的にドットを出力
          if ($support_query->have_posts()) {
            $dot_count = 0;
            while ($dot_count < $support_query->post_count) {
              $active_class = ($dot_count === 0) ? ' is-active' : '';
              echo '<span class="c-dot js-consult-dot-items' . $active_class . '"></span>';
              $dot_count++;
            }
          }
          wp_reset_postdata(); // クエリのリセット
          ?>
        </div>
        <button class="c-slider-btn c-slider-btn--next c-slider-btn--sp js-support-next"></button>
      </div>
    </div>
  </section>
  <!-- OUR APPROACH (縦ループスライダー) -->
  <section class="l-section p-approach">
    <!-- ★修正: l-inner でタイトルと中身を包む -->
    <div class="l-inner">
      <h2 class="c-section-title">
        <span class="c-section-title__sub">OUR APPROACH</span>
        私たちの支援スタイル
      </h2>

      <div class="p-approach__inner">
        <!-- 左側の固定エリア -->
        <div class="p-approach__bg-circle">
          <img class="p-approach__icon"
            src="<?php echo esc_url(get_theme_file_uri('./assets/images/streamline.svg')); ?>" alt="" />
          <img class="p-approach__img-pc"
            src="<?php echo esc_url(get_theme_file_uri('/assets/images/approach-visual.png')); ?>" alt="" />
          <h3>経営課題を整理し、<br />ともに前へ進む。</h3>
          <p>
            システムを売るのではなく、お客様の課題に向き合い、整理から定着まで<br />一貫して伴走します。
          </p>
        </div>

        <!-- 右側の縦ループスライダーエリア -->
        <div class="p-approach__list js-scroll-list">
          <div class="c-approach-card js-scroll-item">
            <div class="c-approach-card__header">
              <span class="c-approach-card__num">01</span>
              <span class="c-approach-card__title">対話から始める</span>
            </div>
            <p class="c-approach-card__desc">
              まずは現状や課題を丁寧に伺い、本質的な課題を一緒に見つけます。
            </p>
          </div>

          <div class="c-approach-card js-scroll-item">
            <div class="c-approach-card__header">
              <span class="c-approach-card__num">02</span>
              <span class="c-approach-card__title">課題を整理する</span>
            </div>
            <p class="c-approach-card__desc">
              業務やシステムの状況を整理し、解決すべき優先順位を明確にします。
            </p>
          </div>

          <div class="c-approach-card js-scroll-item">
            <div class="c-approach-card__header">
              <span class="c-approach-card__num">03</span>
              <span class="c-approach-card__title">解決策の提案</span>
            </div>
            <p class="c-approach-card__desc">
              御社に合わせた最適なITツールと運用の仕組みを設計します。
            </p>
          </div>

          <!-- 追加: カード04 -->
          <div class="c-approach-card js-scroll-item">
            <div class="c-approach-card__header">
              <span class="c-approach-card__num">04</span>
              <span class="c-approach-card__title">システムの導入</span>
            </div>
            <p class="c-approach-card__desc">
              選定したツールをスムーズに導入し、現場への定着をサポートします。
            </p>
          </div>

          <!-- 追加: カード05 -->
          <div class="c-approach-card js-scroll-item">
            <div class="c-approach-card__header">
              <span class="c-approach-card__num">05</span>
              <span class="c-approach-card__title">効果検証と改善</span>
            </div>
            <p class="c-approach-card__desc">
              導入後の効果を測定し、さらなる業務改善に向けて伴走を続けます。
            </p>
          </div>

          <div class="p-approach__dots">
            <button class="c-dot js-scroll-dot" aria-label="1"></button>
            <button class="c-dot js-scroll-dot" aria-label="2"></button>
            <button class="c-dot js-scroll-dot" aria-label="3"></button>
            <button class="c-dot js-scroll-dot" aria-label="4"></button>
            <button class="c-dot js-scroll-dot" aria-label="5"></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FLOW -->
  <section class="l-section p-flow" id="flow">
    <div class="l-inner p-flow__container">
      <h2 class="c-section-title c-section-title--left">
        <span class="c-section-title__sub">FLOW</span>
        ご相談から解決まで
      </h2>
      <div class="p-flow__body">
        <!-- 1. カードリスト（dlタグ） -->
        <dl class="p-flow__list">
          <!-- 01 -->
          <div class="p-flow-item">
            <dt class="p-flow-item__dt">
              <span class="p-flow-item__num">1</span>
              <span class="p-flow-item__title">お問い合わせ</span>
            </dt>
            <dd class="p-flow-item__dd">
              <div class="p-flow-item__content-inner">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow-icon_1.svg')); ?>" alt=""
                  class="p-flow-item__icon" />
                <p class="p-flow-item__text">
                  フォームからお気軽にご連絡ください
                </p>
              </div>
            </dd>
          </div>

          <!-- 02 -->
          <div class="p-flow-item">
            <dt class="p-flow-item__dt">
              <span class="p-flow-item__num">2</span>
              <span class="p-flow-item__title">ヒアリング</span>
            </dt>
            <dd class="p-flow-item__dd">
              <div class="p-flow-item__content-inner">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow-icon_2.svg')); ?>" alt=""
                  class="p-flow-item__icon" />
                <p class="p-flow-item__text">
                  現状の課題やご要望を丁寧にお伺いします
                </p>
              </div>
            </dd>
          </div>

          <!-- 03 -->
          <div class="p-flow-item">
            <dt class="p-flow-item__dt">
              <span class="p-flow-item__num">3</span>
              <span class="p-flow-item__title">ご提案</span>
            </dt>
            <dd class="p-flow-item__dd">
              <div class="p-flow-item__content-inner">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow-icon_3.svg')); ?>" alt=""
                  class="p-flow-item__icon" />
                <p class="p-flow-item__text">
                  課題やご要望に合わせた支援内容をご提案します
                </p>
              </div>
            </dd>
          </div>

          <!-- 04 (ダークテーマ) -->
          <div class="p-flow-item p-flow-item--dark">
            <dt class="p-flow-item__dt">
              <span class="p-flow-item__num">4</span>
              <span class="p-flow-item__title">支援開始</span>
            </dt>
            <dd class="p-flow-item__dd">
              <div class="p-flow-item__content-inner">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow-icon_4.svg')); ?>" alt=""
                  class="p-flow-item__icon" />
                <p class="p-flow-item__text">
                  ご提案内容に沿って必要な支援を開始します
                </p>
              </div>
            </dd>
          </div>

          <!-- 05 -->
          <div class="p-flow-item">
            <dt class="p-flow-item__dt">
              <span class="p-flow-item__num">5</span>
              <span class="p-flow-item__title">運用支援</span>
            </dt>
            <dd class="p-flow-item__dd">
              <div class="p-flow-item__content-inner">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow-icon_5.svg')); ?>" alt=""
                  class="p-flow-item__icon" />
                <p class="p-flow-item__text">
                  導入後も安心のサポート体制でお支えします
                </p>
              </div>
            </dd>
          </div>
        </dl>
        <!-- /dl終わり -->

        <!-- 2. フッター文章（dlの外へ） -->
        <div class="p-flow__footer">
          <p>
            まずはお気軽にお問い合わせください。課題整理から運用定着まで一貫してサポートします。
          </p>
        </div>
      </div>
      <!-- /.p-flow__body -->
    </div>
  </section>

  <section class="l-section p-company" id="company">
    <div class="l-inner p-company__inner">
      <h2 class="c-section-title--left">
        <span class="c-section-title-sub--left">COMPANY</span>
        会社案内
      </h2>

      <!-- 代表メッセージエリア -->
      <div class="p-company__message">
        <!-- 1. 画像 -->
        <figure class="p-company__message-img">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/company_img.png')); ?>" alt="代表 山口 諒"
            decoding="async" />
        </figure>

        <!-- 2. 見出し（役職と名前） -->
        <div class="p-company__message-header">
          <span class="p-company__role">代表メッセージ</span>
          <h3 class="p-company__name">山口 諒</h3>
        </div>

        <!-- 3. テキストとリンク -->
        <div class="p-company__message-body">
          <p class="p-company__text">
            システムを導入すること自体がゴールではありません。経営課題を客観的に棚卸しし、本当にお客様に必要な仕組みは何か、どのようにすれば現場で無理なく使いこなせるのか、お客様の目線で真剣に伴走します。<br
              class="u-hidden-sp" />
            どんなに小さな疑問でも、まずはお気軽にご相談ください。
          </p>
          <div class="p-company__link-wrap">
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="p-company__link">会社案内を見る <span
                aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>

      <!-- 会社概要テーブルエリア -->
      <div class="p-company__outline">
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
            <dt>所在地</dt>
            <dd>岐阜県各務原市蘇原栄町1丁目20番地</dd>
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