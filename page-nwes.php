<?php get_header(); ?>
<?/*Template Name: news*/ ?>

<div class="main_title">
    <p>NEWS</p>
</div>
<div class="inner_width">
    <div class="news_conteiner">
    <?php
            global $post;
            $args = array('paged' => $paged, 'posts_per_page' => 200);
            $myposts = get_posts($args);
            $my_query = new WP_Query($args);


            if ($my_query->have_posts()) :
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="news_content">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image2-1.png" alt=""> -->
                        <img class="news_img" src="<?php the_post_thumbnail_url('large'); ?>" alt="アイキャッチ画像">
                        <p class="date news"><?php the_time("Y/m/d"); ?></p>
                        <p class="news_text_page"><?php the_title(); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>

        <?php wp_reset_query();
        endif; ?>

    </div>
</div>

<?php get_footer(); ?>