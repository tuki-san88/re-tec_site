<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>

<main>
    <div class="mainWrapper">
        <h1>施工実績一覧</h1>
        <?php
        // 表示する投稿数を6に設定
        query_posts(array(
            'posts_per_page' => 6
        ));
        ?>
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
                <?php
                $pagination_args = array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => __('&laquo; Previous'),
                    'next_text' => __('Next &raquo;'),
                    'type' => 'list',
                );
                echo paginate_links($pagination_args); 
                ?>
            </div>
        <?php else : ?>
            <p>施工実績が見つかりませんでした。</p>
        <?php endif; ?>
        <?php wp_reset_query(); // カスタムクエリをリセット ?>
    </div>
</main>


<?php get_footer(); ?>