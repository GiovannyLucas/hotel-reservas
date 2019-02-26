<?php 

include_once('conexao.php');
include_once('Models/Quarto.php');


class QuartoDAO {

	public function InsereQuarto(Quarto $Quarto){
		$con = new Conexao();
		$stmt = $con->Con();

		$img = $Quarto->getImg();
		$num = $Quarto->getNum();
		$tam = $Quarto->getTam();
		$disp = $Quarto->getDisp();
		$diaria = $Quarto->getDiaria();
		$desc = $Quarto->getDesc();
		$info = $Quarto->getInfo();

		$sql = $stmt->prepare("INSERT INTO quarto (img,numero,tamanho,disponibilidade,diaria,informacoes,descricao) VALUES (?,?,?,?,?,?,?)");
		$sql->bindParam(1, $img);
		$sql->bindParam(2, $num);
		$sql->bindParam(3, $tam);		
		$sql->bindParam(4, $disp);		
		$sql->bindParam(5, $diaria);	
		$sql->bindParam(6, $desc);	
		$sql->bindParam(7, $info);	

		if ($sql->execute()) {
			echo "
				<script>
					swal('Cadastro efetuado!', 'Quarto cadastrado com sucesso', 'success');
				</script>
			";
		}
	}

	public function ListaQuartos(){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM quarto");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ListaQuarto($id){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM quarto WHERE  id = '".$id."'");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function Excluir($id){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("DELETE FROM quarto WHERE id = ?"); 

		$sql->bindParam(1, $id);
		
		if($sql->execute()){	

			$sql1 = $stmt->prepare("SELECT img FROM quarto WHERE id = '".$id."'"); 
			$sql1->execute();
			
			$b = $sql1->fetchAll();


			for ($i=0; $i < count($b); $i++) { 
				$a = $b[$i]['img'];
				unlink('img_upload/'.$a);		
			}
			
			echo '
			<script>
		
				swal("Excluído com Sucesso!", "Quarto excluído com sucesso", "success", {
				  buttons: {
				    defeat: {
				    	text: "Ok!",
				    	value: "try",
				    },
				  },
				})
				.then((value) => {
					switch (value) {
					 
					    case "try":
					      location.href = "opcoes-quarto.php?opcao=rm";
					      break;
					 
					    default:
					      location.href = "opcoes-quarto.php?opcao=rm";
					}
				});
				
			</script>';
		}
		
	}

	public function Update($num,$tam,$disp,$diaria,$info,$desc,$id){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("UPDATE quarto SET numero = ?, tamanho = ?, disponibilidade = ?, diaria = ?, informacoes = ?, descricao = ? WHERE id = ?"); 

		$sql->bindParam(1, $num);
		$sql->bindParam(2, $tam);
		$sql->bindParam(3, $disp);
		$sql->bindParam(4, $diaria);
		$sql->bindParam(5, $info);
		$sql->bindParam(6, $desc);
		$sql->bindParam(7, $id);
		$sql->execute();
		
		if($sql->execute()){
			echo '
			<script>
		
				swal("Alterado com Sucesso!", "Quarto alterado com sucesso", "success", {
				  buttons: {
				    defeat: {
				    	text: "Ok!",
				    	value: "try",
				    },
				  },
				})
				.then((value) => {
					switch (value) {
					 
					    case "try":
					      location.href = "opcoes-quarto.php?opcao=alt";
					      break;
					 
					    default:
					      location.href = "opcoes-quarto.php?opcao=alt";
					}
				});
				
			</script>';
		}
	}
}

?>