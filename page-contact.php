<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="contact--hero">
        <img src="<?= get_theme_file_uri(); ?>/img/contact.webp" alt="">
        <h1 class="contact--hero--title">CONTACT</h1>
    </section>

    <section class="contact--form">
        <div class="contact--form--inner common--inner">
            <form class="contact--form--body" action="<?= home_url('/contact-thanks/'); ?>" method="post">
                <div class="contact--form--field">
                    <label class="contact--form--label" for="contact-name">お名前</label>
                    <input class="contact--form--input" type="text" id="contact-name" name="name" required>
                </div>
                <div class="contact--form--field">
                    <label class="contact--form--label" for="contact-email">メールアドレス</label>
                    <input class="contact--form--input" type="email" id="contact-email" name="email" required>
                </div>
                <div class="contact--form--field">
                    <label class="contact--form--label" for="contact-message">お問い合わせ内容</label>
                    <textarea class="contact--form--textarea" id="contact-message" name="message" required></textarea>
                </div>
                <button class="contact--form--submit" type="submit">送信する</button>
            </form>
        </div>
    </section>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
