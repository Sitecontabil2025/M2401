<?php $pagina_noticias = true ?>
<?php $titulo_pagina = "Notícias Empresariais" ?>

<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;
$regiao_url = (isset($_GET["regiao"])) ? $_GET["regiao"] : 'brasil';

if(isset($_GET["p"])):
    if($_GET["p"] < 1) :
        $p = 1;
    elseif($_GET["p"] > 10) :
        $p = $max / $limite;
    else :
        $p = $_GET["p"];
    endif;
else :
    $p = 1;
endif;

$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&id=$id";
?>

<?php include_once('header.php'); ?>

    <!-- <div class="seg seg-s5 bkg py-8 pos">
        <div class="container position-relative cor">
            <div class="titulo">
                <h4 class="mb-1 font-weight-300"> <?php echo $escritorio ?> </h4>
                <h1 class="mb-0"> <?php echo $titulo_pagina ?> </h1>
            </div>
        </div>
    </div> -->

<article class="background-white position-relative">
    <div class="container pt-8 text-align-justify position-relative">

        <?php if(array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
            <?php else: ?>
            <?php foreach ($json as $item): ?>
                <div class="row align-items-center my-2">
                    <div class="col-auto d-flex align-items-center">
                        <div class="bkg-b2 cor-c1  mr-2" style="border-radius:5px;">
                            <!-- <i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($item->pubdate); ?> -->
                            <h3 class="text-align-left text-align-sm-right mb-0 p-1"> <?= mostra_data($item->pubdate); ?></h3>
                         </div>
                         <div>
                             <h2 class="mb-0"> <?php echo $titulo_pagina ?> </h2>
                            <p class="mb-0"> <i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $item->regiao ?>"><?= $regiao[$item->regiao]; ?></a> | <i class="fas fa-fw fa-newspaper mr-1"></i> <?= $item->fonte; ?></p>
                        </div>
                    </div>
                </div>
                <?= html_entity_decode($item->texto) ?>
            <?php endforeach; ?>
            <div class="my-3">
                <div class="p-2 background-white border border-light border-radius shadow">
                    <h3 class="mt-0 mb-2 texto-dark"><i class="fas fa-share-alt mr-1"></i> Compartilhe nas redes sociais</h3>
                    <a id="share-facebook" class="btn btn-sm btn-facebook"><i class="fab mr-1 fa-facebook-f"></i> Facebook</a>
                    <a id="share-twitter" class="btn btn-sm btn-twitter"><i class="fab mr-1 fa-twitter"></i> Twitter</a>
                    <a id="share-linkedin" class="btn btn-sm btn-linkedin"><i class="fab mr-1 fa-linkedin-in"></i> Linkedin</a>
                </div>
            </div>
            <a href="noticias.php?p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="btn btn-sm btn-dark"><i class="fas mr-1 fa-inbox"></i> Voltar para a listagem de notícias</a>
        <?php endif; ?>

    </div>
</article>

<?php include "footer.php" ?>