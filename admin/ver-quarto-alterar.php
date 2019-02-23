<style>
    .formulario {
        background: rgba(255,255,255,.8);
        width: 60%;
        height: 130vh;
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
        font-family: Arial;
    }
    img {
    	width: 100%;
    	height: 50vh;
    }
    button {
        border-radius: 20px; background: tomato;
            height: 50px; width: 80%; font-size: 20px; border: none;
            padding: 8px 5px; color: white;
            transition: .3s;
    }
    button:hover {
        transition: .3s;
        transform: scale(1.1);
        cursor: pointer;
    }
</style>

<body>
<?php 

	include 'menu.php';
	include_once('DAO/QuartoDAO.php');


?>
<br><br><br><br>
<center><div class="formulario">
    <form method="post" enctype="multipart/form-data"> 
            <center><h1>Alterar quarto</h1></center>
      		
                <img src="img_upload/<?php echo $_GET['img']; ?>">
            
            <br><br>
            <label for="num">Número:</label><br>
                <input type="number" name="num" id="num" value="<?php echo $_GET['num']; ?>" />
            
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
                <input type="number" name="diaria" id="diaria" value="<?php echo $_GET['diaria']; ?>"/>
            
            <br><br>
            <label for="desc">Descrição:</label><br>
                <textarea name="desc" id="desc" cols="20" rows="3"><?php echo $_GET['desc']; ?></textarea>

            <br><br>
            <label for="info">Informações:</label><br>
                <textarea name="info" id="info" cols="20" rows="3"><?php echo $_GET['info']; ?></textarea>

            <br><br>
            <center><button type="submit" class="">Alterar</button></center>
        
    </form> 
</div></center>

</body>

<?php

if (isset($_POST['num']) || isset($_POST['tam']) || isset($_POST['disp']) || isset($_POST['diaria']) || isset($_POST['desc']) || isset($_POST['info'])) {

	$num = $_POST['num'];
	$tam = $_POST['tam'];
	$disp = $_POST['disp'];
	$diaria = $_POST['diaria'];
	$desc = $_POST['desc'];
	$info = $_POST['info'];
	$id = $_GET['id'];

		$QuartoDAO = new QuartoDAO();
		$QuartoDAO->Update($num,$tam,$disp,$diaria,$info,$desc,$id);	
}
	

?>