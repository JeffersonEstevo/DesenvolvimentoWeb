<?php


namespace B;

	class Cliente implements CadastroInterface{
		

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


?>