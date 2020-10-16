function filtrar(categoria){
    let cards = document.getElementsByClassName("card");
    for (let i=0; i < cards.length; i++){
        if(cards[i].id == categoria){
            cards[i].style = "display: flex;"        
        }   else{
            cards[i].style = "display: none;" 
        }
    } 
}

function mostrarTodos(){
    let cards = document.getElementsByClassName("card");
    for (let i=0; i < cards.length; i++){
        cards[i].style = "display: flex;"  
    }    
}

function aumentarImagem(imagem){
    if(imagem.width == 250){
        imagem.width = 290;
    }else{
        imagem.width = 250;
    }
}