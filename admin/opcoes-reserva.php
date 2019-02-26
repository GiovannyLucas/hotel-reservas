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
        <a href="?opcao=all">Ver todas as reservas</a>   
    </div>
    <div class="cont-link">                             
        <a href="?opcao=hj">Ver reservas de hoje</a>   
    </div>
    </div>   
</center>

</body>
</html>

<?php 

    if (isset($_GET['opcao'])) {

        $opc = $_GET['opcao'];
        
        if ($opc == "all") {
            include 'reservas.php';
        } else
        if ($opc == "hj") {
            include 'reservasHj.php';
        } 
    }



?>