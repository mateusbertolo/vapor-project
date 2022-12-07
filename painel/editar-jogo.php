<body>
    <?php
        require('./modulos/sidemenudashboard.php');  
        require('./modulos/autenticacao.php');
        require('./modulos/menuheaderdashboard.php');

        $error = $_GET['error'] ?? null;
        $message = $_GET['message'] ?? null;
        $id_jogo = $_GET['id'] ?? null;
        
        $query_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
        $categorias = mysqli_query($conn, $query_categoria);
        
        $query_jogo = "SELECT * FROM jogo WHERE id = {$id_jogo}";
        $jogo = mysqli_fetch_assoc(mysqli_query($conn, $query_jogo));

     ?>
    <div id="contentnovoidioma">
    <form onclick="removeElementPorid('error-message-editar-jogo')" class="formularios" action="novo-jogo-query.php" method="post">
        <input type="hidden" name="id_jogo" value="<?=$id_jogo?>">
    
        <div class="content">
                    <label for="nome" class="novoidioma">Nome*</label>
                    <div class="labelnovoidioma">
                    <input  type="text" name="nome" id="novonome"value="<?=$jogo['nome']?>" onfocusout="caps_lock(this)"></div> <br>

                    <label for="price" class="novoidioma">Valor*</label>
                    <div class="labelnovoidioma">
                    <input  type="number" name="valor" id="novovalor" min="0.00"value="<?=$jogo['valor']?>"></div> <br>

                    <label for="imagem_url" class="novoidioma">Imagem*</label>
                    <div class="labelnovoidioma">
                    <input  type="url" name="imagem" id="novaimagem" min="0" value="<?=$jogo['imagem_url']?>"></div> <br>

                    <label for="video_url" class="novoidioma">Video</label>
                    <div class="labelnovoidioma">
                    <input  type="url" name="video" id="novovideo" min="0" value="<?=$jogo['video_url']?>"></div> <br>

                </div> 
        <div class="content">
                    <label for="release_date" class="novoidioma">lançamento*</label>
                    <div class="labelnovoidioma">
                    <input  type="date" name="lancamento" id="novolancamento" value="<?=$jogo['data_lancamento']?>"></div> <br>

                    <label for="developer" class="novoidioma">Desenvolvedora*</label>
                    <div class="labelnovoidioma">
                    <input  type="text" name="desenvolvedora" id="novadesenvolvedora" value="<?=$jogo['desenvolvedora']?>"></div> <br>
                        
                        <div class="multiselecao">
                            <label for="categoria">Categoria*</label>
                                <select name="categoria" id="categoria" required>
                                <option value="" disabled selected>Selecione</option>
                        </div>
                    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                        <option 
                        
                        <?php if($categoria['id'] == $jogo['id_categoria']) { echo 'selected' ;}?>
                        
                        value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>
        </div> 

                <div class="content">
                    <div class="label">
                        <div class="description">Descrição*</div> <br>
                        <textarea name="descricao"  id="description" cols="30" rows="10"><?=$jogo['descricao']?></textarea>
                    </div>
                </div>

                    <?php if ($error != null) { ?>
                        <div id="error-message-editar-jogo" class="error-message"><?= $error ?></div>
                    <?php } ?>

                    <?php if ($message != null) { ?>
                        <div id="certo-message-editar-jogo" class="certo"><?= $message ?></div>
                    <?php } ?>

                    <button class="button-salvar"> 
                        salvar 
                    </button>
                    
           </form>
    </div>
</body>
</html>