<?php 

include_once('conexao.php');
include_once('Quarto.php');


class QuartoDAO {

	public function InsereQuarto(Quarto $Quarto){
		$con = new Conexao();
		$stmt = $con->Con();

		$img = $Quarto->getImg();
		$num = $Quarto->getNum();
		$tam = $Quarto->getTam();
		$disp = $Quarto->getDisp();
		$diaria = $Quarto->getDiaria();

		$sql = $stmt->prepare("INSERT INTO quarto (img,numero,tamanho,disponibilidade,diaria) VALUES (?,?,?,?,?)");
		$sql->bindParam(1, $img);
		$sql->bindParam(2, $num);
		$sql->bindParam(3, $tam);		
		$sql->bindParam(4, $disp);		
		$sql->bindParam(5, $diaria);	

		$sql->execute();
	}


}

?>