
// function removeErrorMensage() {
//     let errorMensage = document.getElementById("error-message-index")
//     if(errorMensage != null){
//         errorMensage.remove()
//     }
// }

// function removeErrorMensage_cat() {
//     let errorMensage = document.getElementById("error-message-nova-categoria")
//     if(errorMensage != null){
//         errorMensage.remove()
//     }
// }

// function removeErrorMensage_idioma() {
//     let errorMensage = document.getElementById("error-message-index-idioma")
//     if(errorMensage != null){
//         errorMensage.remove()
//     }
// }

// function removeErrorMensage_plataforma() {
//     let errorMensage = document.getElementById("error-message-index-plataforma")
//     if(errorMensage != null){
//         errorMensage.remove()
//     }
// }
// function removeErrorMensage_editarjogo() {
//     let errorMensage = document.getElementById("error-message-editar-jogo")
//     if(errorMensage != null){
//         errorMensage.remove()
//     }
// }

//remover varios id de erro 
function removeElementPorid(idelemento){
    let elemento = document.getElementById(idelemento)

    if(elemento != null){
        elemento.remove()
    }
}



function removeCorrectMensage() {
    let correctMensage = document.getElementById("certo")
    if(correctMensage != null){
        correctMensage.remove()
    }
}
function removeCorrectMensage_editarjogo() {
    let correctMensage = document.getElementById("certo-message-editar-jogo")
    if(correctMensage != null){
        correctMensage.remove()
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

// DATA JAVA 

// dia = (dia > 10) ? "0" + dia : dia SHORT IF para pequenos testes

function obterHoraAtual(){
    const data = new Date()
    const hora = ("0" + data.getHours()).slice(-2)
    const minutos = ("0" + data.getMinutes()).slice(-2)
    const segundos = ("0" + data.getSeconds()).slice(-2)
    const dia = ("0" + data.getDate()).slice(-2)
    const mes = Number(("0" + data.getMonth()).slice(-2))+1 //number for??a a reconhecer como um numero para n??o dar pau com o +1
    const ano = data.getFullYear()

    let dataAtual =  dia + "/" + mes + "/" + ano + "-" + hora + ":" + minutos + ":" + segundos 

    return dataAtual


}
function updateClock() {
    const clock = document.getElementById('relogio')
    clock.innerHTML = obterHoraAtual()

    setInterval(function () {
        clock.innerHTML = obterHoraAtual()
    }, 1000)
}

//fun????o mudar cor


    function random_bg_color() {
        const r = Math.floor(Math.random() * 256)
        const g = Math.floor(Math.random() * 256)
        const b = Math.floor(Math.random() * 256)
        // const a = Math.random()
        const bgColor = "rgb(" + r + "," + g + "," + b + ")"

        // document.getElementById('side-menu').style.backgroundColor = bgColor
        // document.getElementById('page-logo-text').style.color = bgColor
        // document.getElementById('colorjs').style.color = bgColor;
        // document.getElementById('relogio').style.color = bgColor;
        // document.getElementById('header-container').style.backgroundColor = bgColor;
    }

    function updateColor() {
        setInterval(random_bg_color, 50)
    }

    // deixar letra mauiscula

    // function caps_lock(elemento){
    //     elemento.value =  elemento.value.toUpperCase()
    // }

    function caps_lock(elemento){
     elemento.value = elemento.value[0].toUpperCase() + elemento.value.slice(1).toLowerCase()
}