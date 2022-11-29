<?php 
    $titulo_pagina = "Suporte";
  
    $sucesso = $_GET['certo'] ?? null;

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="areaform">
                <form action="./painel/nova-mensagem.php" method="POST">
                        <div id= "imagem-suporte">
                            <img src="./public/images/logo.png" alt="vapor"> 
                        </div>
                            <div class="texto-logo-suporte">VAPOR</div>
                            <div id="arealogin3">
                                <div class="labelnome">
                                    <input placeholder="Nome" type="text" required name="nome" id="nome">
                                </div> <br>
                                <div class="labelemail">
                                    <input placeholder="E-mail" type="email" required name="email" id="email">
                                </div> <br>
                                <label for="categoria">Assunto*</label>
                                <div class="tipo-mensagem">
                                    <select name="tipo-mensagem" required>
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Sugestão">Sugestão</option>
                                        <option value="Crítica">Crítica</option>
                                        <option value="Elogio">Elogio</option>
                                        <option value="Dúvida">Dúvida</option>
                                        <option value="Suporte">Suporte</option>
                                        <option value="Outros">Outros</option>
                                    </select> 
                                </div>
                                <div class="mensagem">
                                    <textarea placeholder="Insira a Mensagem" name="mensagem-contato"  id="mensagem-contato" required cols="30" rows="10"></textarea>
                                </div>

                                <!-- <label for="categoria">Categoria*</label> <br>
                                <div class="tipo-mensagem">
                                        <select name="tipo-mensagem" required>
                                        <option value="" disabled selected>Selecione</option>
                                </div> <br> -->
                                
                                <button class="button-login">Enviar</button>

                </form>
                                <?php if($sucesso != null) { ?>
                                    <div id="certo"><?=$sucesso?></div>

                                 <?php } ?>  
            </div>
        </div>
    </body>
</html>