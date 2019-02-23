<!DOCTYPE html>
<html>

<style type="text/css">
    body {background: url(../img/holiday-inn-resort-orlando-5288794619-4x3.jpg);}	
    .cont-link {
            border-top-right-radius: 20px; background: tomato;
            height: 50px; width: 20%; font-size: 30px; border: none;
            padding: 10px 5px; display: inline-block;
        }

    @media (max-width: 1000px){
        a {
            font-size: 23px;
        }
        .cont-link {
            height: 70px;
        }
    }   
    @media (max-width: 700px){
        a {
            font-size: 20px;
        }
    } 
</style>

<body>

<?php include 'menu.php'; ?>
<br><br><br>

<center><div class="test">
    <div class="cont-link">                             
        <a href="?opcao=add">Adicionar quarto</a>   
    </div>
    <div class="cont-link">                             
        <a href="?opcao=rm">Remover quarto</a>   
    </div>
    <div class="cont-link">                             
        <a href="?opcao=alt">Alterar quarto</a>   
    </div>
    <div class="cont-link">                             
        <a href="?opcao=view">Visualizar quarto</a>   
    </div> 
    </div>   
</center>

</body>
</html>

<?php 

    if (isset($_GET['opcao'])) {

        $opc = $_GET['opcao'];
        
        if ($opc == "add") {
            include 'adicionarquarto.php';
        } else
        if ($opc == "rm") {
            include 'removerquarto.php';
        } else
        if ($opc == "alt") {
            include 'alterarquarto.php';
        } else
        if ($opc == "view") {
            include 'verquartos.php';
        }
    }



?>