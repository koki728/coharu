<?php get_header(); ?>
<?/*
  Template Name: こはる薬局
  */ ?>
<div class="fvBg">
    <div class="fvText">
        <h2>be<br class="sp_none"> with<br class="sp_none"> you</h2>
    </div>
</div>
<div class="main_container">
    <section class="mainsection">
        <div class="main_container top_news">
            <div class="section_title">
                <p>NEWS test commit space</p>
            </div>
            <div class="news_flex">

                <?php
                global $post;
                $args = array('paged' => $paged, 'posts_per_page' => 4);
                $myposts = get_posts($args);
                $my_query = new WP_Query($args);


                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="news_warp">
                            <p class="days">-<?php the_time("Y/m/d"); ?> </p>
                            <p class="news_text"><?php the_title(); ?></p>
                        </div>
                    <?php endwhile; ?>

                <?php wp_reset_query();
                endif; ?>

            </div>
            <div class="top-news__btn-block sp-none">
                <a class="top-news__btn btn btn--line" href="<?php echo esc_url(home_url('news')) ?>">VIEW ALL</a>
            </div>
        </div>
        <div class="main_container top_message">
            <div class="messageGroup_left">
                <div class="message">
                    <div class="img_wrap_sp sp"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top_img01-sp.png" alt=""></div>
                    <div class="main_title_top">
                        <h2>
                            いつでもあなたの<br>そばにいます。
                        </h2>
                        <p>いつでも相談できる、身近な存在。<br class="pc_none">地域に根ざした街の保健室として、新しい価値を持つ薬局を目指します。</p>

                        <a href="<?php echo esc_url(home_url('company')) ?>">
                            <div class="top_message_btn sp-none">
                                COMPAN
                            </div>
                        </a>
                    </div>
                </div>
                <div class="img_wrap pc"><img class="pcimg pc" src="<?php echo get_template_directory_uri(); ?>/img/top_img01.png" alt=""></div>

            </div>
        </div>

        <div class="main_container top_message">
            <div class="messageGroup_right">
                <div class="message right">
                    <div class="img_wrap_sp sp"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top_img02-sp.png" alt=""></div>
                    <div class="main_title_top">
                        <h2>
                            笑顔の源は健康です
                        </h2>
                        <p>健康をもっと身近に。こはる薬局は<br class="pc_none">あなたの健康と笑顔をサポートするために<br class="pc_none">様々なサービスを展開していきます。</p>
                        <div class="space">
                            <a href="<?php echo esc_url(home_url('servis')) ?>">
                                <div class="top_message_btn sp-none">
                                    SERVICE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="img_wrap bottom_img pc"><img class="pcimg pc" src="<?php echo get_template_directory_uri(); ?>/img/top_img02.png" alt=""></div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>