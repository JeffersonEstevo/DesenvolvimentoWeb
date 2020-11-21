<?php

	namespace A;	
	
	class Cliente implements CadastroInterface{
		
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



?>