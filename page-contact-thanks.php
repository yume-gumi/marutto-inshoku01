<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="contact--thanks">
        <div class="contact--thanks--inner common--inner">
            <h1 class="contact--thanks--title">送信完了</h1>
            <p class="contact--thanks--text">お問い合わせありがとうございました。<br>内容を確認のうえ、ご連絡いたします。</p>
            <a class="contact--thanks--link" href="<?= home_url('/'); ?>">TOPへ戻る</a>
        </div>
    </section>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
