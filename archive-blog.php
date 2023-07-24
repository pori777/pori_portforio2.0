<?php get_header() ;?>
    <article id="mainvisual" class="p-mainvisual">
        <div class="p-mainvisual__ttlset"></div>
    </article>
    <section id="blog" class="p-section--post">
        <h2 class="c-section-ttlset">BLOG</h2>
        <div>
            <?php
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 6,
                'orderby'=>'post_date', // 投稿日順に並べる
                'order'=>'DESC' // 新着順に並べる
            );
                $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <ul>
                <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div>
                            <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像">
                        </div>
                        <div>
                            <time><?php echo get_the_date('Y.m.d')?></time>
                            <p><?php echo CFS()->get('title') ;?></p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
            <?php endif ;?>
            <div class="c-button--post">
                <a href="<?php echo get_page_link( 110 );?>">
                    <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                </a>
            </div>
        </div>
    </section>
<?php get_footer() ;?>