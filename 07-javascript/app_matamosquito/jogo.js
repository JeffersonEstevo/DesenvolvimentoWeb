/**************************************************/
//inicialização de variáveis e do cenário

var altura = 0
var largura = 0
var vidas = 1
var tempo = 15

var criaMosquitoTempo = 1500

//retorna toda a url
//com o atributo search, retorna o que está a direita do ponto de interrogação
var nivel = window.location.search
//o ? vem junto na string então temos que eliminá-los utilizando o método replace
nivel = nivel.replace( '?' , '' ) 



if(nivel === 'normal'){
	//1500
	criaMosquitoTempo = 1500
}else if(nivel === 'dificil'){
	//1000
	criaMosquitoTempo = 1000
}else if(nivel === 'chucknorris'){
	//750
	criaMosquitoTempo = 750
}



function ajustaTamanhoPalcoJogo(){
	 altura = window.innerHeight
	 largura = window.innerWidth

	console.log(largura, altura)
}

ajustaTamanhoPalcoJogo()

var cronometro = setInterval( function(){

	tempo -= 1

	if( tempo < 0 ){

		//para não ficar repitindo  a mensagem de vitória (pois fica chamando a função em cronometro constantemente)
		clearInterval(cronometro)
		//para limpar a criação de novos mosquitos
		clearInterval(criaMosquito)
		//redirecionando para a página de vitória
		window.location.href = 'vitoria.html'


	}else{
	document.getElementById('cronometro').innerHTML = tempo
	}


} , 1000)
 
 /***********************************************/
 
 //criar posição aleatória
 function posicaoRandomica(){

 	//remover mosquito anterior (caso exista)
 	if( document.getElementById('mosquito') ){

 		document.getElementById('mosquito').remove()

 		if(vidas > 3){

 			window.location.href = 'fim_de_jogo.html'

 		}else{
 		
 		document.getElementById('v' + vidas).src="imagens/coracao_vazio.png"

 		vidas++

 		}
 	}
 	

	 var posicaoX = Math.floor(Math.random() * largura) - 90
	 var posicaoY = Math.floor(Math.random() * altura) - 90

	 
	 //caso  o mosquito venha na posição 0, para não ficar em posição negativa, forçamos ser criado na origem
	 posicaoX = posicaoX < 0 ? 0 : posicaoX
	 posicaoY = posicaoY < 0 ? 0 : posicaoY

	console.log(posicaoX, posicaoY)

	//criar o elemento html através do DOM
	var mosquito = document.createElement('img')
	mosquito.src = 'imagens/mosquito.png'
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
	mosquito.style.left = posicaoX + 'px'
	mosquito.style.top  = posicaoY + 'px'
	mosquito.style.position = 'absolute'
	mosquito.id = 'mosquito'
	mosquito.onclick = function(){

		this.remove()
	}


	//para adicionar a imagem para o body no html
	document.body.appendChild(mosquito)

}

/************************************************/

//criar tamanho aleatório para os mosquitos
function tamanhoAleatorio(){
	var classe = Math.floor( Math.random() * 3 ) 
	
	switch(classe){
		case 0:
			return 'mosquito1'

		case 1:
			return 'mosquito2'

		case 2:
			return 'mosquito3'

	}	
}

/**********************************************/

//alteração da orientação dos mosquitos (olhando para direita / esquerda)

function ladoAleatorio(){
	var classe = Math.floor( Math.random() * 2 ) 
	
	switch(classe){
		case 0:
			return 'ladoA'

		case 1:
			return 'ladoB'
	}		
}