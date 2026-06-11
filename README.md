# marutto-template

---

## ディレクトリ構成

```
marutto-template/
├── style.css              # テーマ情報（Template Name など）
├── functions.php          # 固定ページ自動作成・アセット読み込みなど
├── header.php               # <head>〜<header>、<body id="...">
├── footer.php               # <footer>〜</body>
├── front-page.php           # トップページ
├── home.php                 # 投稿一覧（お知らせ）
├── single.php               # 個別投稿
├── page-about.php           # 固定ページ：私たちについて
├── page-contact.php         # 固定ページ：お問い合わせ
├── page-privacy.php         # 固定ページ：プライバシーポリシー
├── 404.php                  # 404 ページ
├── css/
│   ├── styles.scss          # Sass のエントリーポイント
│   ├── styles.css           # コンパイル後（WordPress が読み込む）
│   ├── _destyle.scss        # リセット CSS
│   ├── global/              # 変数・mixin・関数（全 Sass から参照）
│   ├── pages/               # ページごとのスタイル（body ID でスコープ）
│   └── parts/               # ヘッダー・フッターなど共通パーツ
├── js/
│   └── main.js              # 全ページで読み込む JS
└── img/                     # 画像（favicon など）
```

---

## テンプレートの基本パターン

各 PHP テンプレートは、次の形で統一されています。

```php
<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <!-- ページの HTML -->
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
```

`page_name` は `header.php` で `<body>` の `id` になります。

```php
<body id="<?= $args["page_name"]; ?>">
```

例：`page-about.php` → `<body id="page-about">`  
例：`front-page.php` → `<body id="front-page">`

404 だけはファイル名と ID を揃えるため、手動で `"not-found"` を渡しています。

---

### ルール

| 種類 | 置き場所 | 例 |
|------|----------|-----|
| ページ固有のスタイル | `css/pages/_ページ名.scss` | `_page-about.scss` |
| 共通パーツ（ヘッダー・フッターなど） | `css/parts/_パーツ名.scss` | `_header.scss` |
| 変数・mixin・関数 | `css/global/` | `_variables.scss` |

### ページ用 Sass の書き方

`css/pages/` に、テンプレート名に対応するファイルを置き、`#bodyのID` で囲みます。

```scss
@use "../global/index" as *;

#page-about {
  .about-hero {
    padding: spacing(lg);
  }
}
```

新しいページ用 Sass を追加したら、`css/styles.scss` に `@use` を追記してください。

```scss
@use "pages/page-new";  // 追加
```

### 共通パーツの Sass

ヘッダー・フッターなど、複数ページで使う部品は `css/parts/` に置きます。  
`body` の ID では囲まず、パーツのクラス名をルートにします。

```scss
@use "../global/index" as *;

.header {
  // 全ページ共通のヘッダースタイル
}
```

### グローバル設定

`css/global/_variables.scss` に、カラー・ブレークポイント・余白などを定義しています。  
`px()` や `spacing()`、`font_size()` などの関数・mixin も `global/` から利用できます。

---

## クラス命名：REMM

HTML のクラス名は **[REMM](https://remm.qwiproject.com/)**（Roots -- Element - Modify + Modifier）に従ってください。

REMM は「Roots（ルーツ）」を軸に要素をグルーピングする命名・CSS 管理の方法論です。

### 基本構造

```
Roots -- Element - Modify + Modifier
```

| パーツ | 意味 | 例 |
|--------|------|-----|
| Roots | コンポーネントのルート | `card` |
| Element | ルート内の要素 | `card -- title` |
| Modify | バリエーション | `card - featured` |
| Modifier | 状態の変化 | `card + active` |

### 記述パターンの例

```html
<!-- Roots -->
<div class="card"></div>

<!-- Roots -- Element -->
<h2 class="card -- title"></h2>

<!-- Roots -- Element - Modify -->
<div class="card -- body - compact"></div>

<!-- Roots - Modify -->
<div class="card - featured"></div>

<!-- Modifier 付き -->
<div class="card - featured + active"></div>
```

詳細は公式サイトの [REMM](https://remm.qwiproject.com/) を参照してください。

---

## JavaScript の書き方

### 全ページ共通 → `js/main.js`

`footer.php` で全ページに読み込まれます。

```html
<script src="<?= get_theme_file_uri(); ?>/js/main.js"></script>
```

ハンバーガーメニュー、スムーススクロール、共通のアニメーションなどはここに書きます。

### ページ専用 → `</main>` の直後に `<script>`

そのページだけで動かす JS は、テンプレート内の `</main>` の後・`get_footer()` の前に書きます。

```php
<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <!-- お問い合わせフォームなど -->
</main>
<script src="<?= get_theme_file_uri(); ?>/js/contact.js"></script>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
```

`home.php` に `<script></script>` のプレースホルダーがあるので、投稿一覧専用の処理はここに追加する想定です。

---

## 固定ページの自動作成

`functions.php` の `create_individual_pages()` が、テーマ有効化時（`after_setup_theme`）に固定ページを自動作成します。

```php
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
```

`$pages` 配列に slug と title を追加するだけで、新しい固定ページを増やせます。

```php
$pages = [
  [
    'slug'  => 'about',
    'title' => '私たちについて',
  ],
  // ここに追加
  [
    'slug'  => 'service',
    'title' => 'サービス',
  ],
];
```

追加したら、対応する `page-service.php` と `css/pages/_page-service.scss` も用意してください。

---

## その他の設定（functions.php）

| 機能 | 内容 |
|------|------|
| スタイル読み込み | `css/styles.css` を `wp_enqueue_style` で読み込み |
| jQuery | フッターで読み込み（`true`） |
| アイキャッチ | `add_theme_support('post-thumbnails')` 有効 |
| 管理バー | フロントでは非表示 |

---

## 参考リンク

- [REMM｜CSS設計・コーディングメソッド](https://remm.qwiproject.com/)
- [WordPress テンプレート階層](https://developer.wordpress.org/themes/basics/template-hierarchy/)
