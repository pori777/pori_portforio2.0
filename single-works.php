<?php get_header() ;?>
    <article id="mainvisual" class="p-mainvisual">
        <div class="p-mainvisual__ttlset"></div>
    </article>
    <section id="works" class="p-section--single">
        <h2 class="c-section-ttlset">BLOG</h2>
        <div>
            <nav>
                <ul class="breadCrumbs">
                    <li><a href="https://poriporipori.com">HOME</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li><a href="https://poriporipori.com/works">WORKS</a></li>
                </ul>
            </nav>
            <div>
                <time><?php echo get_the_date('Y.m.d')?></time>
                <p><?php echo CFS()->get('title') ;?></p>
                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="記事詳細の画像">
                <div><?php the_content(); ?></div>
                <div>
                    <a href="<?php echo CFS()->get('link');?>"><?php echo CFS()->get('link');?></a>
                </div>
                <div>
                    <a href="<?php echo CFS()->get('github_link');?>"><?php echo CFS()->get('github_link');?></a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ;?>