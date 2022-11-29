<head>
    <?php
    require('./modulos/autenticacao.php');
    ?>
</head>
<body>
    <?php
        require('./modulos/sidemenudashboard.php');
        require('./modulos/menuheaderdashboard.php');
        
        $id_mensagem = $_GET['id'] ?? null;
        
        $query_mensagem = "SELECT * FROM mensagens WHERE id = {$id_mensagem}";
        $mensagem = mysqli_query($conn, $query_mensagem);
     ?>
    <div id="content-container">
  

    <div id="list-container-visualizar">
    <?php while($linhasmensagem = mysqli_fetch_array($mensagem)) {  ?>    
    <div id="row-id">
        
        <div .class='mensagens-visualizar'>
        <h3>Nome</h3>
            <input type="email" readonly value="<?php echo $linhasmensagem['nome']; ?>">
        </div>
        
        <div .class='mensagens-visualizar'>
        <h3>E-mail</h3>
            <input type="email" readonly value="<?php echo $linhasmensagem['email']; ?>">
        </div>
        <div .class='mensagens-visualizar'>
        <h3>Assunto</h3>
            <input type="email" readonly value="<?php echo $linhasmensagem['assunto']; ?>">
        </div>
    </div>
        <h3>Mensagem</h3>
        <div .class='mensagens-visualizar' >
            <textarea name="mensagem-contato" readonly  id="mensagem-contato" required cols="100" rows="30"><?php echo $linhasmensagem['mensagem']; ?></textarea>
        </div>

    <?php }  ?>
        </div> 
    </div>
</body>
</html>