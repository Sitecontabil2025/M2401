//STCKY
$(document).ready(function(){
    var zero = $('.logo').height();
    window.onscroll = function (){
        if(window.scrollY > 350){
            $('.zero').css( 'height',  zero);
            // $('.logo').css( 'display', 'none' );
            $('.topo').addClass('sticky-top');
            // $('.topo').addClass('borda borda-b1');
            $('.topo').css({ "box-shadow": "-2px 2px 10px 0 rgba(207, 212, 214, 5)" });
            // $('.borda').css({ "border-color": "#05baa5 transparent #05baa5", "border-style": "solid", "border-width": "5px 0 1px" });
            // $('.main-menu').addClass('justify-content-around').removeClass('justify-content-lg-center');

            $(".rodape").slideDown(500);
        } else {
            $('.zero').css( 'height', '0' );
            // $('.logo').css( 'display', 'block' );
            $('.topo').removeClass('sticky-top');
            // $('.topo').removeClass('borda borda-b1');
            $('.topo').css({ "box-shadow": "none" });
            // $('.borda').css('border', 'none');
            // $('.main-menu').addClass('justify-content-lg-center').removeClass('justify-content-around');

            $(".rodape").slideUp(500);
        }
    }
});

//RODAPÉ
$(document).ready(function() {
    $(".fecha").click(function(){
        $("#local").animate({bottom: "-100%"}, 1000);
    });
    // window.onscroll = function () {
    //     if (window.scrollY > 200){
    //      $(".rodape").slideDown(500);
    //        } else {
    //      $(".rodape").slideUp(500);
    //        }
    //    }    
})


//MENU
$(document).ready(function(){
    $('.botao-responsivo').click(function(){
        if ($(".main-menu").hasClass("d-none")) {
            $(".main-menu").hide().removeClass("d-none").slideDown(300);
        } else {
            $(".main-menu").slideUp(300, function(){
                $(".main-menu").addClass("d-none");
            });
        }
    });
});
//SUB-MENU
// $(document).ready(function(){
//     $(".main-menu>.abre>a").bind("click", function(){
//         if($(this).next(".sm").is(":hidden")){
//             $(".sm").slideUp();
//             $(this).next(".sm").slideDown();
//         } else {
//             $(this).next(".sm").slideUp();
//         }
//     });
// });

//BANNER
$(document).ready(function() {
    
    $('.banner').cycle({
		timeout:7000,
		speed:1000, 
        slides: '> div.banner-foto'
	});

    $(".owl-slogan").owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        items: 1,
        singleItem : true,
        loop: true,
        nav: false,
        dots: true
    });      

    $(".owl-depoimento").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 1,
        mouseDrag : true,
        loop: true,
        nav: true,
        navText: ['<i class="fas fa-lg fa-fw fa-chevron-left"></i>', '<i class="fas fa-lg fa-fw fa-chevron-right"></i>'],
        dots: false
    });
});


//MOVIMENTAÇÃO
function movimenta(rolar){
	$('html, body').animate({ scrollTop: $(rolar).offset().top }, 1000);
}

//MODAL
var modal = document.getElementById('modal'); 
var span = document.getElementsByClassName("close")[0];

function janela_modal(janela) { modal.style.display = "flex"; $(".janela_modal").hide(); $(janela).show(); }; 

$(".close").click(function() { modal.style.display = "none"; });

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == "mood") {
        mood.style.display = "none";
    }
}

// FORMULÁRIO DE CONTATO
// Mascara de TELEFONE
$(document).ready(function() {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
    
$('.money').mask("#.##0,00", {reverse: true});

// Mascara de CPF e CNPJ
var CpfCnpjMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
},
cpfCnpjpOptions = {
    onKeyPress: function(val, e, field, options) {
    field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
    }
};

    $('.cpfcnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);


    $('#formcontato input:submit').click(function(e) {

        $('#formcontato').append('<input type="hidden" name="via" value="'+$(this).val()+'">');

    });

    $('#formcontato').submit(function(e) {

        var dados = $(this).serialize();
        
        setTimeout(function() {
            
            $.ajax({
                type: "POST",
                url: "enviar-contato.php",
                data: dados,
                dataType: 'json',
                beforeSend: function(){
                    $("#resultado").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                    $("#resultado").html('Aguarde, enviando a mensagem');
                    $("#resultado").fadeIn(250);
                },
                success: function(resposta){
                    
                    $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);

                    if ( resposta.whatsapp == true ) {

                        var link = 'Clique no ícone do WhatsApp para entrar em contato agora! <a id="whatsapp" class="d-flex align-items-center justify-content-center" href="https://api.whatsapp.com/send?phone=5517996584976&amp;text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site!" style="position:relative; width:50px;height:50px;bottom:3px;right:3px;background-color:#25d366;color:#FFF;border-radius:50px; font-size:25px; margin-top: 1rem; z-index:1000;" target="_blank"><i class="fab fa-whatsapp"></i></a>';

                        $("#resultado").html(resposta.mensagem + link);

                    } else {

                        $("#resultado").html(resposta.mensagem);

                    }

                    $('#formcontato').trigger("reset");

                },
                error: function(resposta){
                    $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                    $("#resultado").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                    // console.log(resposta);
                }
            });

        }, 500);        

        return false;

    });

    var modal = document.getElementById("modal");
    var botaoFecharModal = document.getElementById("fecharModal");
    
    $('body #fecharModal').click(function(e) {

        $('body #modal').hide();

    });

    $('body #especial').click(function(e) {

        $('body #formcontato').trigger("reset");
        $('body #resultado').empty();

    });

    //
     $('#formabrir').submit(function(e) {

        var dados = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "enviar-abrir-empresa.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#resultado-abrir").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                $("#resultado-abrir").html('Aguarde, enviando a mensagem');
                $("#resultado-abrir").fadeIn(250);
            },
            success: function(resposta){                
                $("#resultado-abrir").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);                
                $("#resultado-abrir").html(resposta.mensagem);                
                console.log(resposta);
                $('#formabrir').trigger("reset");
            },
            error: function(resposta){
                $("#resultado-abrir").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                $("#resultado-abrir").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                console.log(resposta);
            }
        });        
        return false;

    });

    $('#formmigrar').submit(function(){
        var dados = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "enviar-migrar-empresa.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#resultado-migrar").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                $("#resultado-migrar").html('Aguarde, enviando a mensagem');
                $("#resultado-migrar").fadeIn(250);
            },
            success: function(resposta){
                $("#resultado-migrar").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);
                $("#resultado-migrar").html(resposta.mensagem);                
                console.log(resposta);
                $('#formmigrar').trigger("reset");
            },
            error: function(resposta){
                $("#resultado-migrar").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                $("#resultado-migrar").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                console.log(resposta);
            }
        });
        return false;
    });

});

function reloadcaptcha(){
    $('#imgcaptcha').attr('src','captcha.php?l=130&a=35&tf=18&ql=5&new='+(new Date()).getTime());
}

function reloadcaptcha_contato(){
    $('#imgcaptcha-contato').attr('src','captcha-contato.php?l=130&a=35&tf=18&ql=5&new='+(new Date()).getTime());
}

//Função para abrir pop up
function popup(url){
    varWindow = window.open (
        url,
        'Compartilhar',
        'width=500, height=650, top=100, left=200, scrollbars=no'
    );
}

//Constrói a URL depois que o DOM estiver pronto        
document.addEventListener("DOMContentLoaded", function() {
    var url = encodeURIComponent(window.location.href);
    var titulo = encodeURIComponent(document.title).replace(/'|"|%25/g, "");
    //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
    
    document.getElementById("share-facebook").href = "javascript:popup('https://www.facebook.com/sharer/sharer.php?u=" + url+"')";//altera a URL do botão facebook
    document.getElementById("share-twitter").href = "javascript:popup('https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"')";//altera a URL do botão
    //document.getElementById("share-twitter").href = "javascript:popup(https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via+"')"; //se for usar o atributo via, utilize a seguinte url
    
    //tenta obter o conteúdo da meta tag description
    var summary = document.querySelector("meta[name='description']");
    summary = (!!summary)? summary.getAttribute("content") : null;
    
    //se a meta tag description estiver ausente...
    if(!summary){
        //...tenta obter o conteúdo da meta tag og:description
        summary = document.querySelector("meta[property='og:description']");
        summary = (!!summary)? summary.getAttribute("content") : null;
    }
    //altera o link do botão
    linkedinLink = (!!summary)? "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo + "&summary=" + encodeURIComponent(summary) : "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;
    document.getElementById("share-linkedin").href = "javascript:popup('"+linkedinLink+"')";
}, false);

//ACORDION
$('.accordion-cont').hide();

$('.accordion-btn').click(function(){
    if($(this).next('.accordion-cont').is(':visible')){
        $('.accordion-cont').slideUp(500);
        $(".accordion-btn i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
    } else {
        $('.accordion-cont').slideUp(500);
        $(this).next('.accordion-cont').slideDown(500);
        $(".accordion-btn i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
        $(this).children("i.fas").addClass('fa-chevron-up');
    }
});