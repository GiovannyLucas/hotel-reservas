<?php 

class Conexao {
	public function Con(){
		try {
			$pdo = new PDO('mysql:host=localhost;dbname=proj_hotel','root','',
						  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		} catch (Exception $e) {
			echo $e.getMessage();
		}
		return $pdo;
	}
}

?>