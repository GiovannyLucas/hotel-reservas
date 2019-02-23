<style type="text/css">
	table {
		width: 100%;
		font-family: Arial;
	}
	tr {
		height: 50px;
	}
	thead {
		background: tomato;
	}
</style>

<table>
	<thead>
		<tr>
			<td>#</td>
			<td>Imagem</td>
			<td>Número</td>
			<td>Tamanho</td>
			<td>Disponibilidade</td>
			<td>Diária</td>
			<td>Ação</td>
		</tr>
	</thead>
	<tbody>
		
<?php 
	include('DAO/quartoDAO.php');

	$quartoDAO = new QuartoDAO();

	$quarto = $quartoDAO->ListaQuartos();
	
		for ($i=0; $i < count($quarto); $i++) { 
			if ($quarto[$i]['disponibilidade'] == "y") {
				$dispp = "Sim";
			} else {
				$dispp = "Não";
			}
			echo "
			<tr>
				<td>".$quarto[$i]['id']."</td>
				<td>".$quarto[$i]['img']."</td>
				<td>".$quarto[$i]['numero']."</td>
				<td>".$quarto[$i]['tamanho']."</td>
				<td>".$dispp."</td>
				<td>".$quarto[$i]['diaria']."</td>
				<td><center><a href='opcoes-quarto.php?opcao=rm&id=".$quarto[$i]['id']."&acao=delete'><i class='fa fa-trash' style='color:tomato;'></i></a></center></td>
			</tr>
			";
		}


?>
		
	</tbody>
</table>

<?php 

if (isset($_GET['id'])) {
	if ($_GET['acao'] == "delete") {
		
		include_once('DAO/QuartoDAO.php');
		include_once('Models/Quarto.php');


		$quartoDAO = new QuartoDAO();
		
		$id = $_GET['id'];

		$quartoDAO -> Excluir($id);
		
	}
	

}

?>