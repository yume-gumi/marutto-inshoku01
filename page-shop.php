<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="shop--hero">
        <img src="<?= get_theme_file_uri(); ?>/img/contact.webp" alt="">
        <h1 class="shop--hero--title">SHOP</h1>
    </section>

    <section class="shop--info">
        <div class="shop--info--inner common--inner">
            <dl class="shop--info--list">
                <dt>店名</dt>
                <dd>サイトタイトル</dd>
                <dt>住所</dt>
                <dd>〒000-0000 住所が入ります</dd>
                <dt>電話番号</dt>
                <dd>00-0000-0000</dd>
                <dt>営業時間</dt>
                <dd>00:00 - 00:00</dd>
                <dt>定休日</dt>
                <dd>不定休</dd>
            </dl>
        </div>
    </section>

    <section class="shop--map">
        <div class="shop--map--inner common--inner">
            <!-- 地図埋め込み -->
        </div>
    </section>

    <?php get_template_part("parts/instagram"); ?>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
