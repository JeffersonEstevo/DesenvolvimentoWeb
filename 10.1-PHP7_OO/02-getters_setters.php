<?php

//modelo
class Funcionario{
	//atributos
	public $nome = null;
	public $telefone = null;
	public $numFilhos = null;

	//getters setters
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

//*********************************************************//

	//métodos
	function resumirCadFunc(){
		return "$this->nome possui $this->numFilhos filho(s)";
	}

	function modificarNumFilhos($numFilhos){
		//afetar um atributo do objeto
		$this->numFilhos = $numFilhos;

	}
}


$y = new Funcionario();
$y->setNome('José');
$y->setNumFilhos(3);
echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();
$x->setNome('Maria');
$x->setNumFilhos(0);
echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s)' ;

?>