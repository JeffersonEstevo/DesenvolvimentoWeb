<?
class Tarefa{
	private $id;
	private $id_status;
	private $tarefa;
	private $data_tarefa;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;//adicionado o returno para reduzir os códigos em implementações que utilizem o método __set
	}


}

?>