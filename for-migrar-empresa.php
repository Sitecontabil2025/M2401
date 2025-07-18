<?php
$titulo_pagina = "Quero migrar minha empresa";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
?>
<?php include_once('header.php'); ?>
    <style>
        .comecar{ display: none !important; }
    </style>

    <!--<div class="seg seg-s1 bkg py-8 pos">
        <div class="container position-relative cor">
            <div class="titulo">
                <h4 class="mb-0 font-weight-300"> <?php echo $descricao_pagina ?> </h4>
                <h1 class="mb-0 display-3"> <?php echo $titulo_pagina ?> </h1>
            </div>
        </div>
    </div>-->

<article class="bkg position-relative">
    <div class="container pt-8 text-align-justify position-relative">

        <p class="mt-0"> <big> Junte-se às centenas de empresas que confiam em nosso escritório. </big> </p>
        <h2> Migrar para <strong class="cor-c2"> <?= $escritorio ?> </strong> é muito simples! </h2>
        <p> Mais praticidade e tranquilidade! Acompanhe tudo o que acontece na contabilidade de sua empresa de forma segura. Deixe a burocracia por nossa conta e tenha mais tempo para cuidar do seu negócio. </p>

            <div class="background-light p-2 p-md-6 utilitarios">
                <div class="row text-align-center">
                    <div class="col-md-4 py-1">
                            <i class="fas fa-fw fa-2x fa-piggy-bank mb-2 icon"></i> 
                            <h3> Comece Agora </span> </h3>
                            <p class="serv"> Faça seu cadastro, estamos prontos para contabilizar o seu sucesso. </p>
                    </div>
                    <div class="col-md-4 py-1">
                            <i class="fas fa-fw fa-2x fa-hand-holding-heart mb-2 icon"></i>
                            <h3> Apoio Total </span> </h3>
                            <p class="serv"> Nossa equipe estará sempre pronta para te ajudar, conte conosco. </p>
                    </div>
                    <div class="col-md-4 py-1">
                            <i class="fas fa-fw fa-2x fa-handshake mb-2 icon"></i> 
                            <h3> Parceria de Sucesso </span> </h3>
                            <p class="serv"> Cuidamos da sua contabilidade para você cuidar do seu negócio. </p>
                    </div>
                </div>
            </div>
            
            <p> <big>Não fique com dúvidas, nós resolvemos tudo para você! </big> </p>
            <h3> Contrate já! </h3>
            <p> Preencha o formulário abaixo ou mande-nos uma mensagem para <strong><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></strong>. Aguarde ser atendido por um de nossos funcionários especializados em migrar de escritório contábil.</p>

            <div class="row no-gutters py-10">
                <div class="col-md">
                    <div class="line">
                        <div class="ball bkg-b2"> <p class="m-0 cor h2">1</p> </div>
                    </div>
                    <p class="px-2 text-align-center"> <span class="d-block font-weight-600 cor-c2"> Cadastro e Pagamento </span> Você preenche online algumas informações da sua empresa para entender se conseguimos te atender e depois você paga a primeira mensalidade do seu serviço de contabilidade. </p>
                </div>
                <div class="col-md">
                    <div class="line">
                        <div class="ball bkg-b2"> <p class="m-0 cor h2">2</p> </div>
                    </div>
                    <p class="px-2 text-align-center">  <span class="d-block font-weight-600 cor-c2"> Documentação </span> Nós vamos te ajudar em todo processo de troca de contador, usando o seu e-CNPJ ou conversando com o seu contador para pegar todos os documentos necessários para mudança. </p>
                </div>
                <div class="col-md">
                    <div class="line">
                        <div class="ball bkg-b1"> <p class="m-0 cor h3"><i class="fas fa-check"></i></p> </div>
                    </div>
                    <p class="px-2 text-align-center">  <span class="d-block font-weight-600 cor-c2"> Bem-vindo </span> Depois disso você já é parte do time, onde você economiza tempo e dinheiro com serviço de qualidade. </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="img img-i3"></div>        
                </div>
                <div class="col">
                    <h3 class=""> Que legal que você está aqui! </h3>
                    <p class="mb-0"> Agora falta pouco para cuidarmos da sua empresa! Conte com a gente em todos os passos. <span class="font-weight-600"> Vamos lá? :) </span> </p>
                    <p> <a href="fale-conosco.php" target="_self" rel="noopener noreferrer" class="bt bt-b1 text-transform-uppercase">  falar com especialista </a> </p>
                </div>
            </div>

    </div>

</article>

<?php include_once('footer.php'); ?>