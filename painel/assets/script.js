
function removeErrorMensage() {
    let errorMensage = document.getElementById("error-message-index")
    if(errorMensage != null){
        location
        errorMensage.remove()
    }
}
//mensagens de erro


function excluirjogo(linhasjogo){
    let excluirjogo = confirm("Realmente deseja excluir esse jogo")

    if(excluirjogo == true){
        window.open("excluir-jogo.php?id=" + linhasjogo, "_SELF")
    }
}



function excluiridioma(linhasidioma){
    let excluiridioma = confirm("Realmente deseja excluir esse idioma")

    if(excluiridioma == true){
        window.open("excluir-idioma.php?id=" + linhasidioma, "_SELF")
    }
}


function excluircategoria(linhascategoria){
    let excluircategoria = confirm("Realmente deseja excluir essa categoria")

    if(excluircategoria == true){
        window.open("excluir-categoria.php?id=" + linhascategoria, "_SELF")
    }
}



function excluirplataforma(linhasplataforma){
    let excluirplataforma = confirm("Realmente deseja excluir essa plataforma")

    if(excluirplataforma == true){
        window.open("excluir-plataforma.php?id=" + linhasplataforma, "_SELF")
    }
}