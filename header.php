<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="topoHeader">
        <div class="logo">
        <img src="<?php bloginfo('template_directory'); ?>./assets/imagens/LogoPrincipal.png" alt="">
        </div>
        <nav>
            <a href="#" class="parceiro">seja um parceiro</a>
            <a href="#">login</a>
        </nav>
    </div>

    <div class="text">
        <h1>Alugar e vender um imóvel nunca foi tão fácil</h1>
        <p>Nós digitalizamos a sua imobiliária e você faz negócios</p>
    </div>
</header>
