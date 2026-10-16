<?php
/*
Template Name: プライバシーポリシー
*/
get_header(); ?>

<main class="l-main">
  <!-- ========================================
       プライバシーポリシー (p-privacy)
  ======================================== -->
  <section class="l-section p-privacy">
    <div class="l-inner p-privacy__inner">

      <!-- タイトルエリア -->
      <h1 class="p-privacy__title">
        <span class="p-privacy__title-en">PRIVACY POLICY</span>
        <span class="p-privacy__title-ja">プライバシーポリシー</span>
      </h1>

      <!-- リード文 -->
      <p class="p-privacy__lead">
        株式会社Rinklogy（以下、「当社」といいます。）は、本ウェブサイト上で提供するサービスにおける、お客様の個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。
      </p>

      <!-- 規約本文 -->
      <div class="p-privacy__body">

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">1. 個人情報の取得について</h2>
          <p class="p-privacy__text">
            当社は、お問い合わせやご相談の際にお名前、会社名、メールアドレス、ご相談内容等の個人情報をご提供いただく場合がございます。これらの情報は、適法かつ公正な手段によって取得いたします。
          </p>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">2. 個人情報の利用目的</h2>
          <p class="p-privacy__text">当社が取得した個人情報は、以下の目的のために利用いたします。</p>
          <ul class="p-privacy__list">
            <li>お問い合わせ・ご相談に対する回答および資料送付のため</li>
            <li>当社のサービス（ITコンサルティング・システム開発等）のご提案および提供のため</li>
            <li>ご契約いただいた業務の遂行およびご連絡のため</li>
            <li>サービス向上のための分析および改善のため</li>
          </ul>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">3. 個人情報の第三者提供について</h2>
          <p class="p-privacy__text">
            当社は、法令に基づく場合を除き、あらかじめご本人の同意を得ることなく、個人情報を第三者に提供することはありません。
          </p>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">4. 個人情報の安全管理</h2>
          <p class="p-privacy__text">
            当社は、個人情報の漏洩、滅失または毀損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。
          </p>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">5. 個人情報の開示・訂正・削除について</h2>
          <p class="p-privacy__text">
            ご本人から個人情報の開示、訂正、追加、削除、利用停止のご希望があった場合には、ご本人であることを確認させていただいた上で、速やかに対応いたします。
          </p>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">6. プライバシーポリシーの変更</h2>
          <p class="p-privacy__text">
            当社は、法令等の定めがある場合を除き、必要に応じて本ポリシーの内容を随時変更することができるものとします。変更後の本ポリシーは、本ウェブサイトに掲載したときから効力を生じるものとします。
          </p>
        </div>

        <div class="p-privacy__block">
          <h2 class="p-privacy__heading">7. お問い合わせ窓口</h2>
          <p class="p-privacy__text">
            本ポリシーに関するお問い合わせは、当サイトの<a href="<?php echo esc_url(home_url('/contact/')); ?>"
              class="p-privacy__link">お問い合わせフォーム</a>よりご連絡ください。<br>
            事業者名：株式会社Rinklogy
          </p>
        </div>

      </div>

      <!-- ボタンエリア -->
      <div class="p-privacy__btn-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--no-arrow">トップページへ戻る</a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>