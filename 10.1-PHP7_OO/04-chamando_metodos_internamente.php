<?php

//modelo
class Funcionario{
	//atributos
	public $nome = null;
	public $telefone = null;
	public $numFilhos = null;
	public $cargo = null;
	public $salario = null;

	//getters setters (OVERLOADING / SOBRECARREGAR)
	function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	function __get($atributo){
		return $this->$atributo;
	}

	/*
	function setNome($nome){
		$this->nome = $nome;
	}

	function setNumFilhos($numFilhos){
		$this->numFilhos = $numFilhos;
	}

	function getNome(){
		return $this->nome;
	}	

	function getNumFilhos(){
		return $this->numFilhos;
	}

	function getTelefone(){
		return $this->telefone;
	}
	*/

//*********************************************************//

	//métodos (AQUI ACONTECE A CHAMADA DO MÉTODO __get INTERNAMENTE )
	function resumirCadFunc(){
		return $this->__get('nome') . " possui " .  $this->__get('numFilhos') . " filho(s)";
	}

	function modificarNumFilhos($numFilhos){
		//afetar um atributo do objeto
		$this->numFilhos = $numFilhos;

	}
}


$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 6);
echo $y->resumirCadFunc();
//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)' ;

echo '<hr>';

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 3);
echo $x->resumirCadFunc();
//echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)' ;

?>