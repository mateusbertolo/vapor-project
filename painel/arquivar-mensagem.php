<?php
require('./modulos/conexao.php');


$id_mensagem = $_GET['id'] ?? null;


    $query_deletar = "DELETE FROM mensagens WHERE id = {$id_mensagem}";
    $mensagem = mysqli_query($conn, $query_deletar);
        
    header('location: mensagem.php');
?>