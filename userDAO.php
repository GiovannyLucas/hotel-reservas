<?php 

include 'conexao.php';

class userDAO {
	
	public function ListaQuartosDisp(){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM quarto WHERE disponibilidade = 'y'");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ListaQuartosIndex(){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM quarto WHERE disponibilidade = 'y' LIMIT 0,3");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ListaQuartoId($id){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM quarto WHERE id = '".$id."'");
		$sql->execute();

		return $sql->fetchAll();
	}

}

?>