<?php get_header(null, ["page_name" => basename(__FILE__, ".php")]); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article">
            <header class="article--header">
                <div class="article--header--inner common--inner">
                    <time class="article--date" datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
                    <h1 class="article--title"><?= get_the_title(); ?></h1>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="article--thumbnail">
                    <?= get_the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            <div class="article--body">
                <div class="article--body--inner common--inner">
                    <?= the_content(); ?>
                </div>
            </div>

            <div class="article--back">
                <div class="article--back--inner common--inner">
                    <a class="article--back--link" href="<?= get_permalink(get_option('page_for_posts')); ?>">一覧へ戻る</a>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(null, ["page_name" => basename(__FILE__, ".php")]); ?>
