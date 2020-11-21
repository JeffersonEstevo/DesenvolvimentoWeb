<?php

class Carro extends Veiculo{
	//public $placa = 'ABC1234';
	//public $cor = 'Branco';
	public $teto_solar = true;
/*
	function acelerar(){
		echo 'Acelerar';
	}
*/	
	function __construct($placa, $cor){
		$this->placa = $placa;
		$this->cor = $cor;
	}

	function abrirTetoSolar(){
		echo 'Abrir teto solar';
	}

	function alterarPosicaoVolante(){
		echo 'Alterar posição volante';
	}
}

class Moto extends Veiculo{
	//public $placa = 'DEF1122';
	//public $cor = 'Preta';
	public $contraPesoGuidao = true;
/*
	function acelerar(){
		echo 'Acelerar';
	}
*/

	function __construct($placa, $cor){
		$this->placa = $placa;
		$this->cor = $cor;
	}


	function empinar(){
		echo 'Empinar';
	}
}	

class Veiculo{
	public $placa = null;
	public $cor = null;

	function acelerar(){
		echo 'Acelerar';
	}

	function frear(){
		echo 'Frear';
	}

}

$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('DEF1122', 'Preta');

echo '<pre>';
print_r($carro);
echo'<br><br>';
print_r($moto);
echo '</pre>';

echo'<hr>';

$carro->abrirTetoSolar();
echo '<br>';
$carro->acelerar();
echo '<br>';
$carro->frear();

echo'<hr>';

$moto->empinar();
echo '<br>';
$moto->acelerar();
echo '<br>';
$moto->frear();


?>