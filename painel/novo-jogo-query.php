<?php 

require('./modulos/conexao.php');

$id_game = $_POST['id_jogo'] ?? null;
$name = $_POST['nome'] ?? null;
$valor = $_POST['valor'] ?? null;
$image_url = $_POST['imagem_url'] ?? null;
$video_url = $_POST['video_url'] ?? null;
$data_lancamento = $_POST['data_lancamento'] ?? null;
$desenvolvedora = $_POST['desenvolvedora'] ?? null;
$categoria = $_POST['categoria'] ?? null;
$descricao = $_POST['descricao'] ?? null;

if($video_url == "" || $video_url == null) {

    $query_delete_video_url = "UPDATE jogo SET video_url = null WHERE id = {$id_game}";
    mysqli_query($conn, $query_delete_video_url);

    $query_atualizar_jogo_sem_video = "UPDATE jogo SET nome = '{$name}', valor = {$valor}, descricao = '{$descricao}', imagem_url = '{$image_url}', data_lancamento = '{$data_lancamento}', desenvolvedora = '{$desenvolvedora}', id_categoria = {$categoria} WHERE id = {$id_game}";

    mysqli_query($conn, $query_atualizar_jogo_sem_video);

} else {
    
    $query_atualizar_jogo_com_video = "UPDATE jogo SET nome = '{$name}', valor = {$valor}, descricao = '{$descricao}', imagem_url = '{$image_url}', video_url = '{$video_url}', data_lancamento = '{$data_lancamento}', desenvolvedora = '{$desenvolvedora}', id_categoria = {$categoria} WHERE id = {$id_game}";

    mysqli_query($conn, $query_atualizar_jogo_com_video);

}

header("location: editar-jogo.php?id={$id_game}&message=Jogo atualizado com sucesso!");


if($jogo->num_rows == null) {
    if ($video_url == "") {
        mysqli_query($conn, $query_novo_jogo_with_video);
        header('location: jogosdash.php');
    } else {
        mysqli_query($conn, $query_novo_jogo_wihout_video);
        header('location: jogosdash.php');
    }
}
else{
    header('location: novo-jogo.php?error=Este jogo já está cadastrado!!');
}