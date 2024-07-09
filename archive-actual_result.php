<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>

<main>
    <div class="mainWrapper">
        <h1>施工実績一覧</h1>
        <?php if (have_posts()) : ?>
            <div class="actual-results">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="actual-result">
                        <div class="actual-result-thumbnail">
                            <a href="<?php the_permalink(); ?>">

                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="actual-result-content">
                            <a href="<?php the_permalink(); ?>">

                                <h2><?php the_title(); ?></h2>
                                <p><?php echo wp_trim_words(get_field('additional_content_3'), 200, '...'); ?></p>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
        <?php else : ?>
            <p>施工実績が見つかりませんでした。</p>
        <?php endif; ?>
    </div>



</main>

<?php get_footer(); ?>