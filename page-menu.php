<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="menu--hero">
        <img src="<?= get_theme_file_uri(); ?>/img/contact.webp" alt="">
        <h1 class="menu--hero--title">MENU</h1>
    </section>

    <section class="menu--category">
        <div class="menu--category--inner common--inner">
            <h2 class="menu--category--title">DRINK</h2>
            <ul class="menu--category--list">
                <li class="menu--category--item">
                    <span class="menu--category--name">ドリンク名</span>
                    <span class="menu--category--price">¥000</span>
                </li>
                <li class="menu--category--item">
                    <span class="menu--category--name">ドリンク名</span>
                    <span class="menu--category--price">¥000</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="menu--category">
        <div class="menu--category--inner common--inner">
            <h2 class="menu--category--title">FOOD</h2>
            <ul class="menu--category--list">
                <li class="menu--category--item">
                    <span class="menu--category--name">フード名</span>
                    <span class="menu--category--price">¥000</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="menu--category">
        <div class="menu--category--inner common--inner">
            <h2 class="menu--category--title">SWEETS</h2>
            <ul class="menu--category--list">
                <li class="menu--category--item">
                    <span class="menu--category--name">スイーツ名</span>
                    <span class="menu--category--price">¥000</span>
                </li>
            </ul>
        </div>
    </section>

    <?php get_template_part("parts/instagram"); ?>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
