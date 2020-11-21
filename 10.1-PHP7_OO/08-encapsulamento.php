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
echo $pai->getNome();
$pai->setNome('Feitosa');
echo '<br>';
echo $pai->getNome();


$pai->setSobrenome('Barbosa');
echo '<br>';
echo $pai->getSobrenome();
echo '<hr>';
//-----------------------------------

echo $pai->nome . '  |Aqui o nome só é acessado se o método __get for declarado e for público';
echo '<br>';
echo '<br>';


//Com o método __set ganhamos a liberdade de atribuir valores diretamente acessando os atributos privados:
echo $pai->sobrenome . ' |sobrenome anterior';
$pai->sobrenome = 'Damasceno';
echo '<br>';
echo $pai->sobrenome . ' |Modificado atributo protected sobrenome a partir do método público __set';
echo '<hr>';

//------------------------------------------------

//echo $pai->executarMania();// não retorna nada, pois não temos acesso assim ao método private

echo $pai->executarAcao() . ' <br>Agora temos acesso usando um método público como interface intermediária';// O método executar ação funciona com interface entre os métodos private e protected. Dessa forma, conseguimos executar os métodos executarAcao() e responder()
?>