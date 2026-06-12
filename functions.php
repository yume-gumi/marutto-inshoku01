<?php 

// 固定ページ追加


function create_page_if_not_exists($slug, $title) {
    if (!get_page_by_path($slug)) {
        wp_insert_post([
            'post_title'   => $title,
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ]);
    }
}

function create_individual_pages() {
    $pages = [
        [
            'slug'    => 'about',
            'title'   => '私たちについて',
        ],
        [
            'slug'    => 'contact',
            'title'   => 'お問い合わせ',
        ],
        [
            'slug'    => 'privacy',
            'title'   => 'プライバシーポリシー',
        ],
        [
            'slug'    => 'shop',
            'title'   => '店舗情報',
        ],
        [
            'slug'    => 'menu',
            'title'   => 'メニュー',
        ],
        [
            'slug'    => 'news',
            'title'   => 'お知らせ',
        ],
        [
            'slug'    => 'contact-thanks',
            'title'   => 'お問い合わせ完了',
        ],
    ];

    foreach ($pages as $page) {
        create_page_if_not_exists($page['slug'], $page['title']);
    }


    $news_page = get_page_by_path('news');
    if ($news_page) {
        // WordPressの「投稿ページ」オプションに、「お知らせ」ページのIDを設定
        update_option('page_for_posts', $news_page->ID);
        // フロントページを固定ページに設定している場合（念のため）
        // update_option('show_on_front', 'page');
    }
}
add_action('after_setup_theme', 'create_individual_pages');




// スタイルシート・スクリプト
function my_theme_enqueue_assets() {
    // スタイルシート
    wp_enqueue_style('marutto-theme-style', get_theme_file_uri('/css/styles.css'), array(), wp_get_theme()->get('Version'));

    // jQueryをフッターで読み込む（WordPressバンドル版）
    wp_enqueue_script('jquery', false, array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');



// アイキャッチ画像
add_theme_support("post-thumbnails");


  
// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );







?>