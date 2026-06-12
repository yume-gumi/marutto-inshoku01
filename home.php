<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <section class="news--hero">
        <div class="news--hero--inner common--inner">
            <h1 class="news--hero--title">NEWS</h1>
        </div>
    </section>

    <section class="news--list">
        <div class="news--list--inner common--inner">
            <?php if (have_posts()) : ?>
                <ul class="news--list--items">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="news--list--item">
                            <time class="news--list--date" datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
                            <a class="news--list--link" href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <nav class="news--pagination">
                    <?php the_posts_pagination(); ?>
                </nav>
            <?php else : ?>
                <p class="news--list--empty">お知らせはまだありません。</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
