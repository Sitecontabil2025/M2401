<?php
$titulo_pagina = "Quero abrir minha empresa";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
?>
<?php include_once('header.php'); ?>
    <style>
        .comecar{ display: none !important; }
    </style>

    <!--<div class="seg seg-s2 bkg py-8 pos">
        <div class="container position-relative cor">
            <div class="titulo">
                <h4 class="mb-0 font-weight-300"> <?php echo $descricao_pagina ?> </h4>
                <h1 class="mb-0 display-3"> <?php echo $titulo_pagina ?> </h1>
            </div>
        </div>
    </div>-->

<article class="bkg position-relative">
    <div class="container pt-8 text-align-justify position-relative">
        <p class="mt-0"> <strong> <big> Comece seu negócio em menos de 5 minutos. </big></strong> </p>
        <h2 class="">Quero <span class="cor-c2"> abrir minha empresa</span>   </h2>
        <p> Ter o próprio negócio é o sonho de muitos brasileiros, mas só em pensar nas etapas para abrir uma empresa, alguns já começam a ter pesadelos. Com o objetivo de ajudar futuros empreendedores que ainda não sabem por onde começar e incentivar aqueles que estão com receio, a <strong class="cor-c2"> <?= $escritorio ?> </strong> criou o guia “Como abrir uma empresa? Passo a passo para tirar as ideias do papel”. </p>

        <div class="background-light p-2 p-md-6 my-5 utilitarios">
            <div class="row p-1 mb-2">
                <div class="col-md-2 text-align-center mb-4 mb-md-0">
                    <i class="fas fa-fw fa-address-card icon"></i> 
                </div>
                <div class="col-md-10 text-align-center text-align-md-justify">
                    <h3 class="m-0"> 1 - Iniciando o cadastro </h3>
                    <p class="serv"> Precisaremos do seu RG digitalizado (ou foto do documento), o código cartográfico (carnê do IPTU) do endereço em que a empresa será registrada. </p>
                </div>
            </div>

            <div class="row p-1 mb-2">
                <div class="col-md-2 text-align-center mb-4 mb-md-0">
                    <i class="fas fa-fw fa-2x fa-comments icon"></i> 
                </div>
                <div class="col-md-10 text-align-center text-align-md-justify">
                    <h3 class="m-0"> 2 - Conte-nos o que vai fazer </h3>
                    <p class="serv"> Qual serviço sua empresa exercerá? Nós identificaremos os CNAEs, o tipo de empresa, o regime de tributação mais econômico e adequado, tudo de acordo com a legislação. </p>
                </div>
            </div>

            <div class="row p-1 mb-2">
                <div class="col-md-2 text-align-center mb-4 mb-md-0">
                    <i class="fas fa-fw fa-2x fa-thumbs-up icon"></i> 
                </div>
                <div class="col-md-10 text-align-center text-align-md-justify">
                    <h3 class="m-0"> 3 - Abertura de empresa já estão todas de forma digital</h3>
                    <p class="serv"> Providenciar certificado digital e-CPF. O certificado digital será obrigatório para assinatura do contrato social ou requerimento de empresário na Junta Comercial. Após esse procedimento, iremos prosseguir com o registro da sua empresa. Estaremos disponíveis para te apoiar e ajudar no que for preciso. </p>
                </div>
            </div>

            <div class="row p-1 mb-2">
                <div class="col-md-2 text-align-center mb-4 mb-md-0">
                    <i class="fas fa-fw fa-2x fa-bell icon"></i> 
                </div>
                <div class="col-md-10 text-align-center text-align-md-justify">
                    <h3 class="m-0"> 4 - Agora está quase tudo pronto </h3>
                    <p class="serv"> Após protocolar a documentação nos órgãos responsáveis, é só aguardar e em breve sua empresa estará pronta para que nós cuidemos dela com a seriedade e qualidade que merece.</p>
                </div>
            </div>
        </div>

        <p> <strong> <big> Não fique com dúvidas, nós resolvemos tudo para você! </big></strong> </p>
        <h2> Abra sua empresa agora! </h2>
        <p> Fale com nossos especialistas ou mande-nos uma mensagem para <strong><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></strong>. Aguarde ser atendido por um de nossos funcionários especializados em abertura de empresas.</p>

        <div class="row pt-10">
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