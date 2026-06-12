<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= get_theme_file_uri(); ?>/img/favicon.png">
    <title>サイトタイトル</title>
    <?php wp_head(); ?>
</head>

<body id="<?= $args["page_name"]; ?>">
    <header class="header">
        <nav id="header-menu" class="header--menu" aria-hidden="true">
            <div class="header--menu--inner common--inner">
                <div class="header--menu--logo">
                    <a href="<?= home_url('/'); ?>">
                        <img src="<?= get_theme_file_uri(); ?>/img/logo.svg" alt="サイトタイトル">
                    </a>
                </div>
                <ul class="header--menu--list">
                    <li><a href="<?= home_url('/'); ?>">TOP</a></li>
                    <li><a href="<?= home_url('/about/'); ?>">ABOUT US</a></li>
                    <li><a href="<?= home_url('/shop/'); ?>">SHOP</a></li>
                    <li><a href="<?= home_url('/menu/'); ?>">MENU</a></li>
                    <li><a href="<?= get_permalink(get_option('page_for_posts')); ?>">NEWS</a></li>
                </ul>
            </div>
        </nav>
        <div class="header--inner common--inner">
            <div class="header--logo">
                <a href="<?= home_url('/'); ?>">
                    <img src="<?= get_theme_file_uri(); ?>/img/logo.svg" alt="サイトタイトル">
                </a>
            </div>
            <button type="button" class="header--hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="header-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
