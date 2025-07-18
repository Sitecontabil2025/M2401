<?php
$titulo_pagina = "Certidões Negativas";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
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

<article class="bkg position-relative">
    <div class="container pt-8 text-align-justify position-relative">
        <?php include 'paginas/certidoes.php' ?>
    </div>

</article>

<?php include_once('footer.php'); ?>