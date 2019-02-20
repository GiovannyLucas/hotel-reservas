<?php
		include("conexao.php");
		include("Usuario.php");

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

		}

?>