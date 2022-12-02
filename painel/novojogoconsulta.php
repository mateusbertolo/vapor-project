<?php 

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$price = $_POST['valor'] ?? null;
$description = $_POST['descricao'] ?? null;
$image_url = $_POST['imagem'] ?? null;
$video_url = $_POST['video'] ?? null;
$release_date = $_POST['lancamento'] ?? null;
$developer = $_POST['desenvolvedora'] ?? null;
$category = $_POST['categoria'] ?? null;



$consultar_jogo = "SELECT * FROM jogo WHERE nome = '{$nome}'";
$jogo = mysqli_query($conn, $consultar_jogo);


if ($jogo->num_rows > 0) {
    header('location: novo-jogo.php?error=Esse jogo já está cadastrado');
} else {
    $query_novo_jogo_with_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$video_url}', '{$release_date}', '{$developer}', {$category})";

    $query_novo_jogo_wihout_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$release_date}', '{$developer}', {$category})";

        if ($video_url == "") {
            mysqli_query($conn, $query_novo_jogo_with_video);
        } else {
            mysqli_query($conn, $query_novo_jogo_wihout_video);
        } 
        header('location: jogosdash.php');
}




?>