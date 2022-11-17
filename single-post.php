<?php get_header(); ?>
<?/*Template Name: news_single*/ ?>

<div class="main_title">
    <p>NEWS</p>
</div>
<div class="inner_width">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="single_newscontent">
                <p class="date news"><?php the_time("Y/m/d"); ?></p>
                <p class="news_title">
                    <?php the_title(); ?></p>
                <div class="news_content_inner">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>