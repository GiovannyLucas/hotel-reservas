<!DOCTYPE html>
<html>

<style type="text/css">
	
</style>

<body>

<?php include 'menu.php'; ?>

<br><br><br>

<form method="post" enctype="multipart/form-data"> 
        <h1>Adicionar quarto</h1>
  		
        <label for="img">Imagem:</label>
            <input type="file" name="img" id="img"/>
        
        <br><br>
        <label for="num">Número:</label>
            <input type="number" name="num" id="num"/>
        
        <br><br>
        <label for="tam">Tamanho:</label>
            <select name="tam">
            	<option value="1">1 pessoa</option>
            	<option value="2">2 pessoas</option>
            	<option value="3+">3+ pessoas</option>
            </select>
        <br><br>

        <label for="disp">Disponibilidade:</label>
            <select name="disp">
            	<option value="y">Sim</option>
            	<option value="n">Não</option>
            </select>
        <br><br>

		<label for="diaria">Diária:</label>
            <input type="text" name="diaria" id="diaria"/>
        
        <br><br>
        <br><br>           
        <button type="submit">Enviar</button>
    
</form> 


</body>
</html>

<?php 

	include_once('QuartoDAO.php');
	include_once('Quarto.php');

	$QuartoDAO = new QuartoDAO();
	$Quarto = new Quarto();

if (isset($_FILES['img'])) {

		$extensao = strtolower(substr($_FILES['img']['name'], -4));
		$imagem = md5(time()) . $extensao;
		$diretorio = "img_upload/";

		move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $imagem);

	$Quarto->setImg($imagem);
	$Quarto->setNum($_POST['num']);
	$Quarto->setTam($_POST['tam']);
	$Quarto->setDisp($_POST['disp']);
	$Quarto->setDiaria($_POST['diaria']);


	$QuartoDAO->InsereQuarto($Quarto);
}


?>