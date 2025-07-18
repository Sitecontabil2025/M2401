<form class="contato position-relative" class="py-5" id="formcontato" method="post">
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-user-check"></i>
            <input type="text" name="nome" id="formnome" placeholder="Seu Nome *" required />
        </div>
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-envelope-open"></i>
            <input type="text" name="email" id="formemail" placeholder="Seu E-mail *" required />
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-phone"></i>
            <input type="text" name="telefone" id="formtelefone" class="celular-mask" placeholder="Seu Telefone *" required>
        </div>
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-mobile"></i>
            <input type="celular" name="celular" id="formcelular" class="celular-mask" placeholder="Seu Celular">
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-pencil-alt"></i>
            <input type="assunto" name="assunto" id="formassunto" placeholder="Seu Assunto *" required>
        </div>
    </div>
    <div class="d-flex contato-borda" style="border-radius: 5px 5px 5px 5px; align-items: baseline;">
        <i class="contato-icone fas fa-comment"></i>
        <textarea name="mensagem" id="formmensagem" cols="40" rows="7" placeholder="Digite sua Mensagem *" required></textarea>
    </div>
    <p class="m-0"> <small> <em> * preenchimento de campo <span class="cor-c2">obrigatório</span> </em> </small> </p>
    <a href="javascript:void(0);" onclick="reloadcaptcha_contato();" class="small"><i class="fas fa-redo mr-1"></i> Trocar imagem</a>
    <div class="form-row">
        <div class="d-flex flex-wrap flex-grow-1 contato-borda">
            <div class="captcha d-flex align-items-center"><img id="imgcaptcha-contato" src="captcha-contato.php" class="d-block"></div>
            <!-- <i class="contato-icone fas fa-pencil-alt"></i> -->
            <input type="text" name="captcha" id="formcaptcha-contato" placeholder="Digite os caracteres ao lado *" required>
        </div>
    </div>
    <div>
        <button type="submit" class="bt bt-b1 mt-2">Enviar </button>
        <button type="reset" class="bt bt-b1 mt-2">Cancelar </button>
    </div>
    <div id="resultado"></div>
</form>