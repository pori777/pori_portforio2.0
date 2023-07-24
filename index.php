<!DOCTYPE html>
<html lang="ja">
<head>
    <!--html*5の初期設定-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--seo対策の類-->
    <meta name="description" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta name="keywords" content="">
    <!--リンクを貼ったときの設定(pc)-->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="pori_portfolio">
    <meta property="og:url" content="http://poriporipori.com">
    <meta property="og:description" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta property="og:site_name" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta property="og:image" content="./img/meta/ogp.jpg">
    <!--リンクを貼ったときの設定(twitter)-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@pori072">
    <meta name="twitter:title" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <!--ファビコンの設定-->
    <link rel="shortcut icon" href="./img/meta/favicon.ico" type="image/x-icon">
    <!--googleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@400;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <!--stylesheet-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ;?>/css/style.css">
    <title>pori_portfolio</title>
    <?php wp_head(); ?>
</head>
<body>
    <header role="banner" class="l-header">
        <h1>PORI</h1>
        <nav class="p-gnavi js-hamburger">
            <ul class="list">
                <li><a href="<?php echo esc_url( home_url('') ); ?>">TOP</a></li>
                <li><a href="https://poriporipori.com/#about">ABOUT</a></li>
                <li><a href="<?php echo get_page_link( 113 );?>">WORKS</a></li>
                <li><a href="<?php echo get_page_link( 110 );?>">BLOG</a></li>
                <li><a href="https://poriporipori.com/#contact">CONTACT</a></li>
            </ul>
            <button class="p-hamburger js-hamburger--bt">
                <span>menuボタン</span>
            </button>
        </nav>
    </header>
    <article id="mainvisual" class="p-mainvisual">
        <div class="p-mainvisual__ttlset">

        </div>
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
                <a href="https://poriporipori.com/works">
                    <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                </a>
            </div>
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
                <a href="https://poriporipori.com/blog">
                    <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                </a>
            </div>
        </div>
    </section>
    <section id="contact" class="p-section--contact">
        <h2 class="c-section-ttlset">CONTACT</h2>
        <?php echo do_shortCode('[contact-form-7 id="44" title="コンタクトフォーム"]')?>
    </section>
    <footer class="l-footer">
        <nav>
            <ul>
                <li><a href="https://poriporipori.com/#about">ABOUT</a></li>
                <li><a href="<?php echo get_page_link( 113 );?>">WORKS</a></li>
                <li><a href="<?php echo get_page_link( 110 );?>">BLOG</a></li>
                <li><a href="https://poriporipori.com/#contact">CONTACT</a></li>
            </ul>
        </nav>
        <small>&copy;pori</small>
    </footer>
    <script src="https://kit.fontawesome.com/8e9a187939.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/hamburger.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
