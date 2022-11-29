<head>
    <?php
    require('./modulos/autenticacao.php');
    ?>
</head>
<body>
    <?php
        require('./modulos/sidemenudashboard.php');
        require('./modulos/menuheaderdashboard.php');
        
        
        
        $querymensagensdash = " SELECT id, nome, assunto, mensagem, email FROM mensagens ";
        $resultado_mensagens = mysqli_query($conn, $querymensagensdash);
     ?>
    <div id="content-container">
        <div id="button-container">
            <button class="button-defalt">Mensagens</button> 
        </div>
  

    <div id="list-container">
        <table>
             <tr>   
                    <th> Nome </th>
                    <th> E-mail </th>
                    <th> Assunto</th>
                    <th> Mensagem</th>
                    <th> Arquivar</th>
                </tr>     
                <?php while($linhasmensagem = mysqli_fetch_array($resultado_mensagens)) {  ?>      
                <tr>
                    <td><?php echo $linhasmensagem['nome']; ?></td>  
                    <td><?php echo $linhasmensagem['email']; ?></td>  
                    <td><?php echo $linhasmensagem['assunto']; ?></td>  
                    <td class="center"><a href="visualizar-mensagem.php?id=<?=$linhasmensagem['id']?>">Visualizar</a></td>
                    <td class="center"><a href="arquivar-mensagem.php?id=<?=$linhasmensagem['id']?>">Arquivar</a></td>
                </tr> 
                <?php }  ?>
            </table>   
            
       <?php if($resultado_mensagens->num_rows == 0) { ?>
            <h1>Não há mensagens a serem respondidas</h1>
        <?php }  ?>

        </div> 
    </div>
</body>
</html>