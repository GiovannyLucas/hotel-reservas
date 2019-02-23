<style>
    .formulario {
        background: rgba(255,255,255,.8);
        width: 30%;
        height: 95vh;
        padding: 10px 30px;
        border-radius: 30px;
        align-items: center;
        justify-content: center;
    }
    h1, input {
        font-family: Arial;
    }
    label {
        font-family: Quicksand;
        font-weight: bold;
    }
    input, textarea, select {
        width: 100%;
        height: 25px;
        font-size: 18px;
    }
    button {
        border-radius: 20px; background: tomato;
            height: 50px; width: 80%; font-size: 20px; border: none;
            padding: 8px 5px; color: white;
            transition: .3s;
    }
    button:hover {
        transition: .3s;
        transform: scale(1.2);
        cursor: pointer;
    }
</style>
<body>

<br><br><br>

<center><div class="formulario">
    <form method="post" enctype="multipart/form-data"> 
            <center><h1>Adicionar quarto</h1></center>
      		
            <label for="img">Imagem:</label><br>
                <input type="file" name="img" id="img" required/>
            
            <br><br>
            <label for="num">Número:</label><br>
                <input type="number" name="num" id="num" required/>
            
            <br><br>
            <label for="tam">Tamanho:</label><br>
                <select name="tam">
                	<option value="1">1 pessoa</option>
                	<option value="2">2 pessoas</option>
                	<option value="3+">3+ pessoas</option>
                </select>
            <br><br>

            <label for="disp">Disponibilidade:</label><br>
                <select name="disp">
                	<option value="y">Sim</option>
                	<option value="n">Não</option>
                </select>
            <br><br>

    		<label for="diaria">Diária:</label><br>
                <input type="number" name="diaria" id="diaria" required />
            
            <br><br>
            <label for="desc">Descrição:</label><br>
                <textarea name="desc" id="desc" cols="20" rows="3" required></textarea>

            <br><br>
            <label for="info">Informações:</label><br>
                <textarea name="info" id="info" cols="20" rows="3" required></textarea>

            <br><br>
            <center><button type="submit" class="">Cadastrar</button></center>
        
    </form> 
</div></center>

</body>
</html>

<?php 

	include_once('DAO/QuartoDAO.php');
	include_once('Models/Quarto.php');

	$QuartoDAO = new QuartoDAO();
	$Quarto = new Quarto();

if (isset($_FILES['img']) && isset($_POST['num']) != "" && isset($_POST['tam']) != "" && isset($_POST['disp']) != "" && isset($_POST['diaria']) != "" && isset($_POST['desc']) != "" && isset($_POST['info']) != "") {

		$extensao = strtolower(substr($_FILES['img']['name'], -4));
		$imagem = md5(time()) . $extensao;
		$diretorio = "img_upload/";

		move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $imagem);

	$Quarto->setImg($imagem);
	$Quarto->setNum($_POST['num']);
	$Quarto->setTam($_POST['tam']);
	$Quarto->setDisp($_POST['disp']);
	$Quarto->setDiaria($_POST['diaria']);
    $Quarto->setDesc($_POST['desc']);
    $Quarto->setInfo($_POST['info']);


	$QuartoDAO->InsereQuarto($Quarto);
}


?>