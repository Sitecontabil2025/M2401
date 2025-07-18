<?php $pagina_noticias = true ?>
<?php $descricao_pagina = "Fique por dentro do mundo empresarial"; ?>
<?php $titulo_pagina = "Notícias Empresariais" ?>

<?php
if(isset($_GET["regiao"])):
    $regiao_url = $_GET["regiao"];
else :
    $regiao_url = 'brasil';
endif;

$max = 100;
$limite = 10;
$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&limite=$max&regiao=$regiao_url";

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

$i = ($p - 1) * $limite;
$j = $i + $limite;
?>
<?php include_once('header.php'); ?>

<div class="seg seg-s5 bkg py-8 pos">
    <div class="container position-relative cor">
        <div class="titulo">
            <h4 class="mb-0 font-weight-300"> <?php echo $descricao_pagina ?> </h4>
            <h1 class="mb-0 display-3"> <?php echo $titulo_pagina ?> </h1>
        </div>
    </div>
</div>

<article class="background-white position-relative">
    <div class="container pt-8 text-align-justify position-relative">

        <?php if(array_key_exists("error", $json)): ?>
        <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php for($i; $i < $j; $i++): ?>
                <?php if (isset($json[$i])) : ?>
                    <div class="mb-5">
                        <div class="row align-items-center my-2">
                            <div class="col-auto">
                                <div class="bkg-b2 cor-c1" style="border-radius:5px;">
                                    <!-- <i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($json[$i]->pubdate); ?> -->
                                    <h5 class="text-align-left text-align-sm-right mb-0 p-1"> <?= mostra_data($json[$i]->pubdate); ?></h5>
                                </div>
                            </div>
                            <div class="col">
                                <h3 class="m-0"><?= $json[$i]->titulo; ?></h3>
                            </div>
                        </div>
                            <i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $json[$i]->regiao ?>"><?= $regiao[$json[$i]->regiao]; ?></a>
                            <i class="fas fa-fw fa-newspaper mr-1"></i> <?= $json[$i]->fonte; ?>
                        <p><?= limitar_texto(strip_tags(html_entity_decode($json[$i]->texto)), 350); ?></p>
                        <a href="noticias-ler.php?id=<?= $json[$i]->id ?>&p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="bt bt-b1 d-inline-block">Leia na integra</a>
                    </div>
                <?php endif ?>
            <?php endfor; ?>
            <div class="text-align-center">
                <?php
                    $num = 0;
                    if(count($json) < $max) $max = count($json);
                    $maxpag = $max / $limite;
                ?>
                <?php for($num;$num<$maxpag;$num++): ?>
                    <a href="noticias.php?p=<?= $num+1 ?>&regiao=<?= $regiao_url ?>" class="btn btn-sm btn-dark"><?= $num+1 ?></a>
                <?php endfor; ?>
            </div>
        <?php endif; ?>

    </div>

</article>

<?php include "footer.php" ?>