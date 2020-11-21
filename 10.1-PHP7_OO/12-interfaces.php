<?php


interface EquipamentoEletronicaInterface {
	public function ligar();

	public function desligar();

	//todos os métodos devem ser implementados, na classe onde a interface é implementada.
}

//------------------------------------------

class Geladeira implements EquipamentoEletronicaInterface{
	public function abrirPorta(){
		echo  'Abrir a porta';
	}

	public function ligar(){
		echo 'Ligar';
	}

	public function desligar(){
		echo 'Desligar';
	}
}



class TV implements EquipamentoEletronicaInterface{
	public function trocarCanal(){
		echo 'Trocar canal';
	}

	public function ligar(){
		echo 'Ligar';
	}

	public function desligar(){
		echo 'Desligar';
	}
}

$x = new Geladeira();
$y = new TV();

//---------------------------------------------

interface MamiferoInterface{
	public function respirar();
}


interface TerrestreInterface{
	public function andar();
}

interface AquaticoInterface{
	public function nadar();
}


class Humano implements MamiferoInterface, TerrestreInterface{

 	public function andar(){
 		echo 'Andar';
 	}

 	public function respirar(){
 		echo 'Respirar';
 	}

 	public function conversar(){
 		echo 'Conversar';
 	}	
}


class Baleia implements MamiferoInterface, AquaticoInterface{

	public function nadar(){
 		echo 'Nadar';
 	}

 	public function respirar(){
 		echo 'Respirar';
 	}

 	protected function esguichar(){
 		echo 'Esguichar';
 	}
}

//-------------------------------------------

interface AnimalInteface{
	public function comer();
}

interface AveInteface extends AnimalInteface{
	public function voar();
}

class Papagaio implements AveInteface{
	public function voar(){
		echo 'Voar';
	}

	public function comer(){
		echo 'Comer';
	}

}


?>