<?php
$titulo_pagina = "Links e Utilidades";
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
    <div class="container py-8 text-align-justify position-relative">

        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/certidoes.jpg" alt="Certidões Negativas" width="100%">
                <h4 class="my-2">Certidões Negativas</h4>
                <a href="certidoes.php">Certidões em âmbito Federal, consultas do Simples e etc.</a>
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/modelos.jpg" alt="Modelos de Documentos" width="100%">
                <h4 class="my-2">Modelos de Documentos</h4>
                <a href="modelos-documentos.php">Contratos, Declarações, Editais, Procurações e muitos outros.</a>
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/agendas.jpg" alt="Agendas de Obrigações" width="100%">
                <h4 class="my-2">Agendas de Obrigações</h4>
                <a href="agendas.php">Tenha acessos as agendas  Estaduais, Trabalhista e Federal.</a>
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/facilitador.jpg" alt="Facilitador Contábil" width="100%">
                <h4 class="my-2">Facilitador Contábil</h4>
                <a href="facilitador.php">Regulamento ICMS, ISS, Legislação e Secretarias.</a>
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/formularios.jpg" alt="Formulários Diversos" width="100%">
                <h4 class="my-2">Formulários Diversos</h4>
                <a href="formularios.php">Instrução DARF, Comprovantes, Tabelas de CNPJ e muito mais.</a>
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/imgs/tabelas.jpg" alt="Tabelas Práticas" width="100%">
                <h4 class="my-2">Tabelas Práticas</h4>
                <a href="tabelas.php">Recolhimentos, Simples, Imposto de Renda e Alíquotas.</a>
            </div>
        </div>

    </div>

</article>

<?php include_once('footer.php'); ?>