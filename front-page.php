<?php get_header() ;?>
    <p class="pageTop only_pc"><a href="#wrap" class="pageTop__bg"><i class="fas fa-angle-up pageTop__button 2x"></i></a></p>
    <article id="mainvisual" class="p-mainvisual">
        <div class="p-mainvisual__ttlset"></div>
    </article>
    <section id="about" class="p-section--about">
        <h2 class="c-section-ttlset">ABOUT</h2>
        <ul>
            <li class="c-card--about">
                <h3>業務内容</h3>
                <ul>
                    <li>LP制作</li>
                    <li>ホームページ制作</li>
                    <li>WordPress導入</li>
                </ul>
            </li>
            <li class="c-card--about">
                <h3>使用スキル</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS/SASS</li>
                    <li>JavaScript</li>
                    <li>WordPress</li>
                </ul>
            </li>
            <li class="c-card--about">
                <h3>SNS</h3>
                <ul>
                    <li>Twitter<i class="fab fa-twitter c-icon--twitter"></i></li>
                    <li>Instagram<i class="fab fa-instagram c-icon--instagram"></i></li>
                    <li>GitHub<i class="fab fa-github c-icon--github"></i></li>
                </ul>
            </li>
        </ul>
    </section>
    <section id="works" class="p-section--post">
        <h2 class="c-section-ttlset">WORKS</h2>
        <div>
            <?php
            $args = array(
                'post_type' => 'works',
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
                        <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像">
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
            <button>
                <a href="<?php echo get_page_link( 113 );?>">
                    <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                </a>
            </button>
        </div>
    </section>
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
                        <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像">
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
            <button>
                <a href="<?php echo get_page_link( 113 );?>">
                    <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                </a>
            </button>
        </div>
    </section>
    <section id="contact" class="p-section--contact">
        <h2 class="c-section-ttlset">CONTACT</h2>
            <?php echo do_shortCode('[contact-form-7 id="44" title="コンタクトフォーム"]')?>
    </section>
<?php get_footer() ;?>
