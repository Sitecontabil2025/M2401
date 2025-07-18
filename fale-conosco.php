<?php
$titulo_pagina = "Fale Conosco";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
?>

<?php include_once('header.php'); ?>

    <div class="seg seg-s3 bkg py-8 pos">
        <div class="container position-relative cor">
            <div class="titulo">
                <h4 class="mb-0 font-weight-300"> <?php echo $descricao_pagina ?> </h4>
                <h1 class="mb-0 display-3"> <?php echo $titulo_pagina ?> </h1>
            </div>
        </div>
    </div>

<article class="bkg position-relative">
    <div class="container pt-8 text-align-justify position-relative">
        <h2 class="">Entre em <span class="cor-c2"> contato</span> conosco  </h2>

        <div class="row">
            <div class="col-lg">
                <p class="d-flex align-items-center"> <i class="mr-1 cor-c2 fas fa-fw fa-map-marker-alt"></i> <?= $endereco ?> - <?= $bairro ?> <br>  <?= $cep ?> - <?= $cidade ?> </strong> </p>
                <p class="d-flex align-items-center"> <i class="mr-1 cor-c2 fas fa-fw fa-phone"></i> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>"> <span class="font-weight-600"> <?= $telefone ?> </span> </a>
                <p class="d-flex align-items-center"> <i class="mr-1 cor-c2 fas fa-fw fa-envelope"></i> <a href="mailto:<?= $email ?>"> <?= $email ?> </a> </p>
                <p class="d-flex align-items-center"> <a href="<?= $whatsapp_link ?>" target="_blank" class="bt bt-whats text-transform-uppercase mb-0 cor-c3" style="font-variant: small-caps;"> <i class="mr-1 fab fa-fw fa-whatsapp"></i> <small> WhatsApp </small> </a> </p>
            </div>
        
            <div class="col-lg-6">
                <?php include_once('contato.php'); ?>
            </div>
        </div>

        <h2 class="mt-4"> Nossa <span class="cor-c2"> localização</span> </h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.499507580249!2d-49.624845289113175!3d-22.89493983736134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c06a39daf95555%3A0x4243758b396d07a2!2sSitecontabil!5e0!3m2!1spt-BR!2sbr!4v1726162683134!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</article>

<?php include_once('footer.php'); ?>