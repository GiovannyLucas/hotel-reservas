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
    div.link {
        border-radius: 20px; background: tomato;
            height: 30px; width: 20%; font-size: 30px; border: none;
            padding: 8px 5px; color: white;
            transition: .3s;
    }
    div.link:hover {
        transition: .3s;
        transform: scale(1.1);
        cursor: pointer;
    }
</style>

<body>
<?php 
    $id = $_GET['id'];

	include 'menu.php';
	include_once('DAO/QuartoDAO.php');


    $QuartoDAO = new QuartoDAO();
    $quarto = $QuartoDAO->ListaQuarto($id);

    for ($i=0; $i < count($quarto); $i++) { 
        
    
?>
<br><br><br><br>
<center><div class="formulario">
         <center><h1>Visualizar quarto</h1></center>
      		
                <img src="img_upload/<?php echo $quarto[$i]['img']; ?>">
            
            <br><br>
            <label for="num">Número:</label><br>
                <input type="number" name="num" readonly id="num" value="<?php echo $quarto[$i]['numero']; ?>"/>
            
            <br><br>
            <label for="tam">Tamanho:</label><br>
                <input type="text" name="tam" id="tam" readonly value="<?php echo $quarto[$i]['tamanho']; ?>" /> 
            <br><br>

            <label for="disp">Disponibilidade:</label><br>
                <input type="text" name="disp" id="disp"readonly value="<?php echo $quarto[$i]['disponibilidade']; ?>" /> 
            <br><br>

    		<label for="diaria">Diária:</label><br>
                <input type="number" name="diaria" id="diaria"readonly value="<?php echo $quarto[$i]['diaria']; ?>"/>
            
            <br><br>
            <label for="desc">Descrição:</label><br>
                <textarea name="desc" id="desc" cols="20" readonly rows="3"><?php echo $quarto[$i]['descricao']; ?></textarea>

            <br><br>
            <label for="info">Informações:</label><br>
                <textarea name="info" id="info" cols="20" readonly rows="3"><?php echo $quarto[$i]['informacoes']; ?></textarea>

            <br><br>
            <div class="link">
                <a href="opcoes-quarto.php?opcao=view"><i class="fa fa-arrow-left"></i></a>
            </div>
 
</div></center>

</body>

<?php
    
    } //fecha o FOR


?>