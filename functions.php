<?php

/**
 * Rinklogy Theme Functions
 */

// =========================================================
// 1. テーマの基本設定
// =========================================================
function rinklogy_theme_setup()
{
  // タイトルタグ（<title>）をWordPressに自動出力させる
  add_theme_support('title-tag');

  // 投稿や固定ページでアイキャッチ画像を使用可能にする
  add_theme_support('post-thumbnails');

  // HTML5のマークアップを許可
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'rinklogy_theme_setup');


// =========================================================
// 2. CSS / JavaScript の読み込み
// =========================================================
function rinklogy_enqueue_scripts()
{
  // CSSの読み込み (ファイルの更新日をバージョンにしてキャッシュを防止)
  wp_enqueue_style(
    'rinklogy-main-style',
    get_theme_file_uri('/assets/css/main.css'),
    array(),
    filemtime(get_theme_file_path('/assets/css/main.css'))
  );

  // JavaScriptの読み込み (フッターで読み込み)
  wp_enqueue_script(
    'rinklogy-main-script',
    get_theme_file_uri('/assets/main.js'),
    array(), // 依存するスクリプト(jQueryなど)があればここに記述
    filemtime(get_theme_file_path('/assets/main.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'rinklogy_enqueue_scripts');

// jsファイルに defer 属性を付与する（静的HTMLでの仕様を再現）
function rinklogy_add_defer_to_script($tag, $handle)
{
  if ('rinklogy-main-script' !== $handle) {
    return $tag;
  }
  return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'rinklogy_add_defer_to_script', 10, 2);


// =========================================================
// 3. カスタム投稿タイプ「お知らせ (news)」の追加
// =========================================================
function rinklogy_register_cpt_news()
{
  register_post_type('news', array(
    'labels' => array(
      'name'          => 'お知らせ',
      'singular_name' => 'お知らせ',
      'all_items'     => 'お知らせ一覧',
      'add_new'       => '新規追加',
      'add_new_item'  => '新しいお知らせを追加',
      'edit_item'     => 'お知らせを編集',
    ),
    'public'        => true,
    'has_archive'   => true,       // アーカイブページ（一覧）を持たせる
    'menu_position' => 5,          // 管理画面のメニュー位置（投稿の下）
    'menu_icon'     => 'dashicons-megaphone', // メニューのアイコン
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
    'show_in_rest'  => true,       // ブロックエディタ（Gutenberg）を有効化
  ));
}
add_action('init', 'rinklogy_register_cpt_news');


// =========================================================
// 4. プラグイン制御（Contact Form 7）
// =========================================================
/**
 * Contact Form 7 の自動 <p> タグ、<br> タグの挿入を無効化する。
 * （※これを行わないと、これまでに組んだ .c-form などのレイアウトが大きく崩れます）
 */
add_filter('wpcf7_autop_or_not', '__return_false');

// =========================================================
// 5. ナビゲーションメニューの設定
// =========================================================

// ① メニュー位置の登録
function rinklogy_register_menus()
{
  register_nav_menus(array(
    'global' => 'PC用グローバルナビゲーション',
    'drawer' => 'スマホ用ドロワーナビゲーション',
    'footer' => 'フッターナビゲーション',
  ));
}
add_action('after_setup_theme', 'rinklogy_register_menus');

// ② <li>タグに独自のクラス（c-gnav__item など）を付与する
function rinklogy_add_menu_li_class($classes, $item, $args)
{
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'rinklogy_add_menu_li_class', 10, 3);

// ③ ドロワーメニュー専用：HTML構造をカスタマイズ（日本語＋英語表記の2段組み）
function rinklogy_custom_drawer_menu_output($item_output, $item, $depth, $args)
{
  if ($args->theme_location === 'drawer') {
    // メニューの「説明」欄に入力されたテキストを英語用として取得
    $en_text = ! empty($item->description) ? esc_html($item->description) : '';
    $ja_text = esc_html($item->title);

    $item_output = '<a href="' . esc_attr($item->url) . '">';
    $item_output .= '<div class="c-gnav__text">';
    $item_output .= '<span class="c-gnav__ja">' . $ja_text . '</span>';
    if ($en_text) {
      $item_output .= '<span class="c-gnav__en">' . $en_text . '</span>';
    }
    $item_output .= '</div>';
    $item_output .= '</a>';
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'rinklogy_custom_drawer_menu_output', 10, 4); // Contact Form 7 確認モーダル制御 ＆ サンクスページ遷移
function rinklogy_cf7_modal_and_redirect()
{
?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const confirmBtn = document.getElementById('js-confirm-btn');
      const backBtn = document.getElementById('js-back-btn');
      const modal = document.getElementById('js-confirm-modal');

      if (confirmBtn && modal) {
        confirmBtn.addEventListener('click', function() {
          // 入力値の取得
          const name = document.getElementById('your-name')?.value.trim() || '';
          const company = document.getElementById('your-company')?.value.trim() || '';
          const email = document.getElementById('your-email')?.value.trim() || '';
          const message = document.getElementById('your-message')?.value.trim() || '（未入力）';

          // チェックボックスの取得
          const checkedSubjects = Array.from(document.querySelectorAll('input[name="your-subject[]"]:checked')).map(
            cb => cb.value);
          // プライバシーポリシー同意チェック
          const acceptance = document.querySelector('input[name="acceptance"]')?.checked;

          // 簡易必須チェック
          if (!name || !company || !email || checkedSubjects.length === 0) {
            alert('必須項目をすべてご入力ください。');
            return;
          }
          if (!acceptance) {
            alert('プライバシーポリシーへの同意が必要です。');
            return;
          }

          // モーダルに値をセット（ご相談内容は読点「、」でつなぐ）
          document.getElementById('confirm-name').textContent = name;
          document.getElementById('confirm-company').textContent = company;
          document.getElementById('confirm-email').textContent = email;
          document.getElementById('confirm-subject').textContent = checkedSubjects.join('、 ');
          document.getElementById('confirm-message').textContent = message;

          // モーダルを表示
          modal.classList.add('is-open');
        });

        // 「入力内容を修正する」ボタンで閉じる
        backBtn.addEventListener('click', function() {
          modal.classList.remove('is-open');
        });
      }
    });

    // 送信完了後にサンクスページへ自動遷移
    document.addEventListener('wpcf7mailsent', function(event) {
      location = '<?php echo esc_url(home_url('/thanks/')); ?>';
    }, false);
  </script>
<?php
}
add_action('wp_footer', 'rinklogy_cf7_modal_and_redirect');
