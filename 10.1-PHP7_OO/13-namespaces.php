<?php

//Namespaces = Agrupamento de classes, interfaces, funções e constantes. Visa evitar o conflito de seus respectivos nomes.

	namespace A;	
	
	class Cliente implements \B\CadastroInterface{
		
		public $nome = 'Jefferson';

		public function __construct(){
			echo'<pre>';
			print_r(get_class_methods($this));
			echo'</pre>';
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function salvar(){
			echo 'Salvar';
		}

		//implementamos para corrigir o namespace \B que está sendo implementado na classe
		public function remover(){
			echo 'Remover';
		}
	}


	interface CadastroInterface{
		public function salvar();
	}




	namespace B;

	class Cliente implements \A\CadastroInterface{
		

		public $nome = 'Estevo';
		
		public function __construct(){
			echo'<pre>';
			print_r(get_class_methods($this));
			echo'</pre>';
		}


		public function __get($attr){
			return $this->$attr;
		}

		public function remover(){
			echo 'Remover';
		}


		//implementamos para corrigir o namespace \A que está sendo implementado na classe 
		public function salvar(){
			echo 'Salvar';
		}


	}	


	interface CadastroInterface{
		public function remover();
	}

//-----------------------------------

//para identificar o namespace específico: 

$c = new \A\CLiente();
print_r($c);

echo $c->__get('nome');

echo'<hr>';


$d = new \B\CLiente();
print_r($d);

echo $d->__get('nome');

echo'<hr>';

?>