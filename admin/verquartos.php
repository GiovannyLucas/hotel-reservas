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
				<td><center><a href='ver-quarto-view.php?opcao=view&id=".$quarto[$i]['id']."&acao=ver'><i class='fa fa-eye' style='color:rgba(4,93,144,1);'></i></a></center></td>
			</tr>
			";
		}


?>
		
	</tbody>
</table>

<?php 

	


?>