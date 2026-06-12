<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="about--hero">
        <img src="<?= get_theme_file_uri(); ?>/img/contact.webp" alt="">
        <h1 class="about--hero--title">ABOUT US</h1>
    </section>

    <section class="about--concept">
        <div class="about--concept--inner common--inner">
            <h2 class="about--concept--title">コンセプト</h2>
            <p class="about--concept--text">テキストが入ります。</p>
        </div>
    </section>

    <section class="about--section">
        <div class="about--section--inner common--inner">
            <div class="about--section--image">
                <img src="<?= get_theme_file_uri(); ?>/img/contact.webp" alt="">
            </div>
            <div class="about--section--body">
                <h2 class="about--section--title">見出し</h2>
                <p class="about--section--text">テキストが入ります。</p>
            </div>
        </div>
    </section>

    <?php get_template_part("parts/instagram"); ?>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
