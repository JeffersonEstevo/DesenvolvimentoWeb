		
			//função ready só lê a função se todos os elementos html estiverem carregados na página
			$(document).ready(function(){

				function teste(){
				console.log($('#exemplo'))	
				}

				teste()
			})

			//Outra forma de esrever:
			/*
				function teste(){
				console.log($('#exemplo'))	
				}
				//passando apenas a referência para a função
				$(teste)

			//Ou ainda, passando a função como sendo anônima:
				$(function(){
				console.log($('#exemplo'))	
				})
				
			*/	

