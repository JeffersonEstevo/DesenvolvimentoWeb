<?php


namespace App\Models;

use MF\Model\Model;

class Info extends Model {


	public function getInfo(){
		
		$query = "select titulo, descricao from tb_info";
		//return $this->db->query($query); // retorna objeto statment, ou seja, objeto mais amplo que pode ser tratado ainda , então utilizamos fetchAll():
		return $this->db->query($query)->fetchAll();



	}	
}


?>