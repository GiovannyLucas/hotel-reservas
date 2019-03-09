	<?php

include_once('conexao.php');

 class ReservaDAO {
 	
 	public function ListaReservas(){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM reserva");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ListaReservasHj(){
		$con = new Conexao();
		$stmt = $con->Con();

		$d = new DateTime();
        $dataHj = $d->format('d-m-Y');

		$sql = $stmt->prepare("SELECT * FROM reserva WHERE data_final = '".$dataHj."'");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function Excluir($id,$id_quarto){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql0 = $stmt->prepare("UPDATE quarto SET disponibilidade = 'y' WHERE id = '".$id_quarto."'");

		$sql = $stmt->prepare("DELETE FROM reserva WHERE id = '".$id."'"); 
		
		if($sql0->execute() && $sql->execute()){	
			
			echo '
			<script>
		
				swal("Excluído com Sucesso!", "Reserva excluída com sucesso", "success", {
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
					      location.href = "opcoes-reserva.php?opcao=all";
					      break;
					 
					    default:
					      location.href = "opcoes-quarto.php?opcao=all";
					}
				});
				
			</script>';
		}
		
	}
 } 


 ?>