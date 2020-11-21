<?php

class Pai{
	private $nome = 'Jefferson';
	protected $sobrenome = 'Estevo';
	public $humor = 'Feliz';

	public function getNome(){
		return $this->nome;
	}

	public function getSobrenome(){
		return $this->sobrenome;
	}

	public function setNome($value){

		//regra de negócio (nome ser maior que 2 caracteres)
		if( strlen($value) >= 3 ){
			$this->nome = $value;
		}
	}

	public function setSobrenome($value){

		//regra de negócio (sobrenome ser maior que 2 caracteres)
		if( strlen($value) >= 3 ){
			$this->sobrenome = $value;
		}
	}

/******************************************/
//Métodos mágicos __get e __set


	public function __get($attr){
		return $this->$attr;
	}

	public function __set($attr, $value){
		$this->$attr = $value;

	}
	
/*********************************************/
	private function executarMania(){
		echo 'Assobiar';
	}

	protected function responder(){
		echo 'Oi';
	}

	//interface para executar mania, já que o método é private
	public function executarAcao(){
		$this->executarMania();
		echo '<br>';
		$this->responder();
	}
}

$pai = new Pai();
//echo $pai->humor;


/*********************************************
	                PARTE2
	
*********************************************/

//AQUI, OS TESTE SÃO FEITOS COM OS MÉTODOS __get e __set COMENTADOS

//Filho só pode herdadr atributos e métodos public ou protected
//private 	NUNCA SÃO HERDADOS!
class Filho extends Pai{
/*
	public function getAtributo($attr){
		return $this->$attr;
	}

	public function setAtributo($attr, $value){
		$this->$attr = $value;
	}
*/	
}

$filho = new Filho();

echo '<pre>';
print_r($filho);
echo '</pre>';

/*DESCOMENTAR ESSE TRECHO PARA PARTE 2

		//echo $filho->getAtributo('nome'); //não conseguimos recuperar
		//echo $filho->getAtributo('sobrenome'); //conseguimos recuperar
		  echo $filho->getAtributo('humor'); //conseguimos recuperar	


		  //alterando valor de humor
		  $filho->setAtributo('humor', 'Triste');
		  echo '<br>';
		  echo $filho->getAtributo('humor') . ' |pós alteração '; 
		  echo '<br>';
		  echo '<br>';

		  echo $filho->getAtributo('sobrenome'); 
		  //alterando valor de sobrenome
		  $filho->setAtributo('sobrenome', 'Almeida');
		  echo '<br>';
		  echo $filho->getAtributo('sobrenome') . ' |pós alteração '; 
		  echo '<br>';
		  echo '<br>';


		  echo $filho->getAtributo('nome'); 
		  //alterando valor de nome ?
		  //$filho->setAtributo('nome', 'José');

		  echo '<br>';
		  echo $filho->getAtributo('nome') . ' |A variável nome que é privada, já não conseguimos acessar'; 
		  echo '<br>';
		  echo '<br>';

		  echo '<hr>';
		
		  
//--------------------------------------------

		  echo $filho->getAtributo('nome'); 
		  //alterando valor de nome
		  //nesse momento, é criado um atributo nome no contexto do $filho
		  $filho->setAtributo('nome', 'José');
		  echo '<pre>';
		  print_r($filho);
		  echo '</pre>';

		  echo '<br>';
		  echo $filho->getAtributo('nome'); 
		  echo '<br>';
		  echo '<br>';

		   echo '<hr>';
*/


/*********************************************
	                PARTE3
	
*********************************************/

//AQUI, OS TESTE SÃO FEITOS COM OS MÉTODOS getAtributo e setAtributo COMENTADOS

$filho = new Filho();


//exibir os métodos públicos do objeto:
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';

echo $filho->__get('nome');
$filho->__set('nome', 'Euzébio');
echo '<br>';
echo $filho->__get('nome'). '  |nome modificado no contexto do objeto PAI';



?>


