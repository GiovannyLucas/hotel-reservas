<?php
		include("../conexao.php");
		include("../Models/Usuario.php");

		class UsuarioDAO{

			public function Logar(Usuario $usuario) {
				$conexao = new Conexao();
				$query = $conexao->Con();

				$stmt = $query->prepare("SELECT nome, senha FROM admin WHERE nome = '".$usuario->getUsuario()."' AND senha = '".$usuario->getSenha()."'");

				$stmt->execute();

				if ($stmt->rowCount() > 0) {
					header("location:admin.php");				
				}else{
					header("location:index.php");
				}
			}

			public function Cadastrar(Usuario $usuario){
				$con = new Conexao();
				$stmt = $con->Con();

				$nome = $usuario->getUsuario();
				$senha = $usuario->getSenha();

				$sql = $stmt->prepare("INSERT INTO admin (nome,senha) VALUES ('".$nome."','".$senha."')");

				if ($sql->execute()) {
					echo '
					<script>
				
						swal("Adicionado com Sucesso!", "Administrador adicionado com sucesso", "success", {
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
							      location.href = "admin.php";
							      break;
							 
							    default:
							      location.href = "admin.php";
							}
						});
						
					</script>
					';
				}
			}

		}

?>