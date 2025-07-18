<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<header class="mt-3 sdw last">
    <div class="container altura d-flex flex-column align-content-around justify-content-center py-2">
        <div class="row">
            <div class="col-md-6 py-2">
                <h1 class="font-weight-600"> Contabilidade <span class="cor-c2 font-weight-800"> completa </span> para seu negócio. </h1>
                <ul class="coluna">
                    <li> <span> Nós cuidamos de todos os processos. </span> </li>
                    <li> <span> Orientamos quanto à documentação. </span> </li>
                    <li> <span> Contabilidade totalmente pensada na sua empresa. </span> </li>
                </ul>
                <a href="for-abrir-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-3 text-transform-uppercase"> abrir minha empresa </a>
                <a href="for-migrar-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v mt-3 text-transform-uppercase"> trocar de contador </a>
            </div>
            <div class="col-md d-none d-md-flex align-items-center justify-content-end py-2">
                <img src="assets/imgs/i3.png" class="width-100" alt="Contabilidade Digital">
            </div>
        </div>
    </div>
</header>

<section class="bkg">
    <div class="container pt-10">
        <div class="row">
            <div class="col-md-auto d-flex align-items-center justify-content-center">
                <div>
                    <img src="assets/imgs/i1a.png" height="300px" alt="">
                    <div class="contador mt-2 text-align-center">
                        <h2 class="mr-1 cor-c2"> <span class="h1 font-weight-200"> + </span> <span class="count display-3">25 </span> </h2> 
                        <p class="h4 cor-c1">cidades <span class="font-weight-600"> atendidas </span> </p>
                    </div>
                </div>
            </div>
            <div class="col-md offset-md-1 text-align-justify">
                <h2> Contabilidade <span class="cor-c2"> completa e pensada</span> para sua empresa. </h2>
                <p>Nossa empresa é totalmente dedicada a compreender as necessidades específicas do seu negócio. Acreditamos que cada empresa é única e, por isso, oferecemos soluções personalizadas que atendem às suas demandas financeiras. Nosso objetivo é garantir que suas finanças sejam geridas de forma eficiente e estratégica, sempre com foco no crescimento sustentável do seu negócio.</p>
                <p>Trabalhamos lado a lado com você, atuando como parceiros no sucesso da sua empresa. Com nossa expertise e comprometimento, você pode se concentrar no que realmente importa: expandir suas operações e alcançar novos patamares de sucesso. Confie em nossa experiência para transformar os desafios financeiros em oportunidades de crescimento.</p>
                <a href="fale-conosco.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mb-md-0 my-4 text-transform-uppercase"> Vamos começar! </a>
            </div>
        </div>
    </div>

    <div class="background-light mt-10">
        <div class="container py-10">
            <div class="row align-items-center">
                <div class="col-lg text-align-justify">
                    <h2 class="mb-4"><span class="cor-c2">Como funciona</span> sua contabilidade na prática. </h2>
                    <p>Contratando nossa contabilidade suas obrigações ficam garantidas e você pode economizar mais do que imagina com custos contábeis. Invista em você e no seu negócio e deixe a contabilidade com a gente.</p>
                    <p>Aqui no G2001 abrimos sua empresa analisando as informações cedidas por você para sabermos em qual tributação que melhor se encaixa ao seu futuro negócio (e não tem problema se você não souber, nossos consultores são capacitados e estarão ao seu auxílio).</p>
                </div>
                <div class="col-lg-auto">
                    <img src="assets/imgs/i6.png" height="320px" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-10">
        <div class="row justify-content-between align-items-center mb-1">
            <div class="col-auto"><h2 class="m-0"> Notícias <span class="cor-c2">Empresariais</span>. </h2></div>
            <div class="col-auto"><a href="noticias.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 text-transform-uppercase"> Mais notícias </a></div>
        </div>
        <div class="feature mb-4"></div>
        
        <div class="row">
            <?php $noticias = get_materias("https://sitecontabil.com.br/json/?db=sc_noticias&limite=3") ?>
            <?php foreach ($noticias as $k => $n) : ?>
                <div class="col-lg-4 mb-2">
                    <div class="move height-100">
                        <div class="move-detail height-100 p-2 d-flex flex-column justify-content-between">
                            <div class="text-align-left">
                                <h3 class="my-2"> <?= $n->titulo ?> </h3>
                                <p class="small">Publicado em <?= mostra_data($n->pubdate, '%d de %B de %Y') ?></p>
                                <p class="m-0"><?= $n->descricao ?></p>
                            </div>
                            <div class="text-align-center mt-5">
                                <a href="noticias-ler.php?id=<?= $n->id ?>" target="_self" class="bt bt-b1">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="background-white mt-10">
        <div class="container py-8">
            <h2 class="text-align-center mb-4"> <span class="cor-c2"> Perguntas e</span> Respostas. </h2>

            <div class="move mb-2 p-2 bkg">
                <div class="accordion-btn d-flex align-items-center justify-content-between" style="cursor: pointer;"> <h4 class="m-0 d-flex align-items-center"> <i class="cor-c2 mr-2 far fa-lg fa-question-circle"></i> Quanto tempo levo para abrir minha empresa? </h4> <i class="mx-3 fas fa-fw fa-chevron-down"></i> </div>
                <div class="accordion-cont text-align-justify">
                    <div class="feature py-1"></div>
                    <div class="pt-1">
                        <p class="m-0">Normalmente o processo completo de abertura de empresa leva em torno de 45 a 60 dias a contar da confirmação dos CNAEs da sua empresa. Este tempo pode ser menor ou maior dependendo da agilidade nas análises dos órgãos públicos, só após esse período a emissão de notas estará liberada.</p>
                    </div>
                </div>
            </div>
            <div class="move mb-2 p-2 bkg">
                <div class="accordion-btn d-flex align-items-center justify-content-between" style="cursor: pointer;"> <h4 class="m-0 d-flex align-items-center"> <i class="cor-c2 mr-2 far fa-lg fa-question-circle"></i> Quais documentos necessários para abertura de empresa?</h4> <i class="mx-3 fas fa-fw fa-chevron-down"></i> </div>
                <div class="accordion-cont text-align-justify">
                    <div class="feature py-1"></div>
                    <div class="pt-1">
                        <p>Relação de documentos necessários para abertura de empresa.</p>
                        <ul>
                            <li>1 cópia do RG dos sócios</li>
                            <li>1 cópia do CPF dos sócios</li>
                            <li>1 cópia do comprovante de endereço dos sócios</li>
                            <li>1 cópia da certidão de casamento dos sócios</li>
                            <li>1 cópia do documento de posse do imóvel (escritura ou contrato de locação)</li>
                            <li>1 cópia simples do carnê do IPTU</li>
                            <li>1 cópia simples do Habite-se</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="move mb-2 p-2 bkg">
                <div class="accordion-btn d-flex align-items-center justify-content-between" style="cursor: pointer;"> <h4 class="m-0 d-flex align-items-center"> <i class="cor-c2 mr-2 far fa-lg fa-question-circle"></i> Posso registrar minha empresa em meu endereço residencial?</h4> <i class="mx-3 fas fa-fw fa-chevron-down"></i> </div>
                <div class="accordion-cont text-align-justify">
                    <div class="feature py-1"></div>
                    <div class="pt-1">
                        <p class="m-0">Depende de prefeitura para prefeitura, mas as cidades do Rio de Janeiro e São Paulo, por exemplo, permitem, caso o negócio em questão seja uma empresa prestadora de serviços e sem funcionários e sem atendimento ao público. Uma opção para quem precisa de um endereço para a empresa e não tem muito a gastar é optar por um Coworking ou por um escritório virtual em sua cidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTADOR  -->
<script>
    $(document).ready(function(){
        var inicio = true;
        var tela = $(".contador").offset().top - $(window).height(); 
            $(window).scroll(function(){ 
            if ($(window).scrollTop() > tela && inicio == true){    
            $('.count').each(function () { 
            $(this).prop('Counter',0).animate({ 
            Counter: $(this).text() 
            }, { 
            duration: 4000, 
            easing: 'swing', 
            step: function (now) { 
                $(this).text(Math.ceil(now)); 
            } 
            }); 
            }); 
            inicio = false; 
            } 
        });
    });
</script>

<?php include_once('footer.php'); ?>
