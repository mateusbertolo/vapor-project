<?php
require("./modulos/conexao.php");

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$assunto = $_POST['tipo-mensagem'] ?? null;
$mensagem = $_POST['mensagem-contato'] ?? null;



$query_inserir_mensagem = "INSERT INTO mensagens  (nome, email, assunto ,mensagem) VALUES ('{$nome}','{$email}','{$assunto}','{$mensagem}')";
$query_inserir_arquivadas = "INSERT INTO arquivadas (nome, email, assunto, mensagem) VALUES ('{$nome}','{$email}','{$assunto}','{$mensagem}')";
mysqli_query($conn, $query_inserir_mensagem);
mysqli_query($conn, $query_inserir_arquivadas);
header('location: /vapor-php/suporte.php?certo=Mensagem Enviada!!');



?>