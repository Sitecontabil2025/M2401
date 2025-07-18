<?php require_once("dados.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
    <?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php $titulo_pagina = (isset($pagina_noticias) && !isset($max)) ? $json[0]->titulo : $titulo_pagina; ?>
    <?php $descricao_pagina = (isset($pagina_noticias) && !isset($max)) ? limitar_texto(strip_tags(html_entity_decode($json[0]->texto)), 300) : $descricao_pagina; ?>
    <title> <?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/support.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-aba.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      
    <!-- Arquivos JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- lightbox -->
    <link rel="stylesheet" href="lightbox/css/lightbox.min.css">
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">

    <!-- SEO metaTags -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/imgs/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />
</head>

<body>
<div class="bkg-bs">
    <div class="container py-2">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-auto">
                <a class="logo d-flex align-items-center justify-content-center" href="index.php" target="_self"> <img src="assets/imgs/logo.png" alt=""> </a>
            </div>
            <div class="col-lg-auto">
                <nav class="width-100 text-align-center">
                    <a class="d-lg-none botao-responsivo"> <i class="fa fa-lg fa-fw fa-bars pull-right"></i> Menu principal </a>
                    <ul class="main-menu d-none d-lg-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-lg-flex">
                            <li></li>
                            <li><a href="empresa.php" class="<?= (get_page() == 'empresa.php') ? 'active' : '' ?>"> empresa </a></li>
                            <li><a href="servicos.php" class="<?= (get_page() == 'servicos.php') ? 'active' : '' ?>"> serviços </a></li>
                            <li><a href="links-utilidades.php" class="<?= (get_page() == 'links-utilidades.php') ? 'active' : '' ?>"> Links </a></li>
                            <li><a href="noticias.php" class="<?= (get_page() == 'noticias.php') ? 'active' : '' ?>"> Notícias </a></li>
                            <li><a href="fale-conosco.php" class="<?= (get_page() == 'fale-conosco.php') ? 'active' : '' ?>"> Contato </a></li>
                        </div>
                        <div>
                            <a href="for-abrir-empresa.php" class="bt bt-b1 text-transform-uppercase" target="_self"> abra sua empresa </a>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>