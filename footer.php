<footer class="bkg">
    <div class="background-light">
        <div class="container py-2 comecar">
            <div class="row">
                <div class="col-md d-flex align-items-center">
                    <div>
                        <h2 class="">E ai, <span class="cor-c2"> vamos começar? </span> </h2>
                        <p> Inicie agora o seu cadastro digital ou converse com nossos especialistas contábeis. </p>
                        <a href="for-abrir-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-3 text-transform-uppercase"> começar agora </a>
                        <a id="especial" href="fale-conosco.php" target="_self" rel="noopener noreferrer" class="bt bt-b2v mt-3 text-transform-uppercase"> falar com especialista </a>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 text-align-center">
                    <img src="assets/imgs/i2.png" class="width-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden bkg-b1">
        <div class="container py-8">
            <div class="row">
                <div class="col-md-6 col-lg text-align-justify">
                    <div class="logo">
                        <a href="index.php" target="_self"> <img src="assets/imgs/logo2.png" alt="<?= $escritorio ?>" style="max-width:300px;"> </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto mt-lg-0 mt-4 text-align-justify">
                    <p class="h4 font-weight-600 cor-c2"> Contato</p>
                    <p class="m-0 cor d-flex align-items-baseline"> <i class="mr-1 fas fa-fw fa-map-marker-alt cor-c2"></i> <?= $endereco ?> <br> <?= $bairro ?> - <?= $cidade ?> <br> <?= $cep ?> </p>
                </div>
                <div class="col-md-6 col-lg-auto mt-lg-0 mt-4 text-align-justify">
                    <p class="h4 font-weight-600 cor-c2">Contato</p>
                    <p class="m-0 d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-phone cor-c2"></i> <a href="<?= $telefone_link ?>"> <span class="font-weight-400 cor"> <?= $telefone ?>  </span></a> </p>
                    <p class="m-0 d-flex align-items-center"> <i class="mr-1 fab fa-fw fa-whatsapp cor-c2"></i> <a href="<?= $whatsapp_link ?>"> <span class="font-weight-400 cor"> <?= $whatsapp ?>  </span></a> </p>
                    <p class="m-0 d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-envelope cor-c2"></i> <a href="mailto:<?= $email ?>" class="cor"> <?= $email ?> </a> </p>
                </div>
                <div class="col-md-6 col-lg-auto mt-lg-0 mt-4 text-align-justify">
                    <p class="h4 font-weight-600 cor-c2">Social</p>
                    <div class="d-flex justify-content-start mt-2">
                        <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="social fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                        <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="social fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                        <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="social fab fa-fw fa-instagram"> </a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bkg-b1d">
        <div class="container py-1">
            <p class="m-0 text-align-center cor" style="vertical-align: text-bottom;"> Copyright <i class="far fa-copyright"></i> <?= date('Y'); ?> <a href="https://sitecontabil.com.br/modelos" target="_blank" rel="noopener noreferrer"> <img src="https://sitecontabil.com.br/imgs/logo-sc-b.png" width="20px" alt="" class="position-relative" style="top: 4px;"> <span class="cor"> Design e desenvolvimento</span> </a> | <strong> <?= $escritorio ?> </strong></p>
        </div>
    </div>

</footer>

<?php include_once('rodape.php'); ?>

<a id="whatsapp" class="d-flex align-items-center justify-content-center" href="<?= $whatsapp_link ?>" style="position:fixed; width:55px;height:55px;bottom:10px;right:10px;background-color:#25d366;color:#FFF;border-radius:50px; font-size:25px;z-index:1000;" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Arquivos JS -->
<script src="assets/js/cookie.min.js" data-hide="true" data-cor="var(--cor1)"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/cycle2.js"></script>
<script src="assets/js/cycle2.tile.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scripts.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="popup/script_popup.js"></script>
</body>
</html>