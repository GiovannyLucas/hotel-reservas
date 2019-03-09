<?php 

include_once('conexao.php');
include_once('Models/Reserva.php');

class ReservaDAO
{
	
	public function ReservarQuarto(Reserva $reserva,$id){
		$con = new Conexao();
		$stmt = $con->Con();

		$sql0 = $stmt->prepare("UPDATE quarto SET disponibilidade = 'n' WHERE id = '".$id."'");

		$nome = $reserva->getNome();
		$email = $reserva->getEmail();
		$tel = $reserva->getTelefone();
		$cpf = $reserva->getCpf();
		$rg = $reserva->getRg();
		$num_quarto = $reserva->getNumeroQuarto();
		$qnt_d = $reserva->getQntDias();
		$data_r = $reserva->getDataReserva();
		$data_f = $reserva->getDataFinal();
		$preco = $reserva->getPreco();

		$sql = $stmt->prepare("INSERT INTO reserva (nome,email,telefone,cpf,rg,id_quarto,qnt_dias,data_reserva,data_final,preco) VALUES (?,?,?,?,?,?,?,?,?,?)");

		$sql->bindParam(1, $nome);
		$sql->bindParam(2, $email);
		$sql->bindParam(3, $tel);		
		$sql->bindParam(4, $cpf);		
		$sql->bindParam(5, $rg);	
		$sql->bindParam(6, $num_quarto);	
		$sql->bindParam(7, $qnt_d);	
		$sql->bindParam(8, $data_r);	
		$sql->bindParam(9, $data_f);	
		$sql->bindParam(10, $preco);	


		if ($sql0->execute() && $sql->execute()) {
			echo '
				<script>
		
				swal("Reservado com Sucesso!", "Quarto reservado com sucesso", "success", {
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
					      location.href = "https://pagseguro.uol.com.br";
					      break;
					 
					    default:
					      location.href = "https://pagseguro.uol.com.br";
					}
				});
				
			</script>
			';
		} else {
			echo '
				<script>
		
				swal("CPF já cadastrado!", "CPF já utilizado por um usuário", "warning", {
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
					      
					      break;
					 
					    default:
					      
					}
				});
				
			</script>
			';
		}
	}

}

?>