<?php
    require('./modulos/conexao.php');
    
    $id_jogo = $_GET['id'] ?? null;


        $query_jogo = "DELETE FROM jogo WHERE id = {$id_jogo}";
        $query_jogo_plataforma = "DELETE from jogo_plataforma WHERE id_jogo = {$id_jogo}";
        $query_jogo_idioma = "DELETE from jogo_idioma WHERE id_jogo = {$id_jogo}";
        mysqli_query($conn, $query_jogo_plataforma);
        mysqli_query($conn, $query_jogo_idioma);
        mysqli_query($conn, $query_jogo);

        header("location: jogosdash.php");
        ?>


    


    