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
