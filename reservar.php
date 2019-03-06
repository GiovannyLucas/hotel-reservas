<style>
    body {background: url(img/holiday-inn-resort-orlando-5288794619-4x3.jpg);}
    .formulario {
        background: rgba(255,255,255,.8);
        width: 30%;
        height: 90vh;
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
        border-radius: 20px; background: rgba(102,204,102,1);
            height: 50px; width: 80%; font-size: 20px; border: none;
            padding: 8px 5px; color: white;
            transition: .3s;
    }
    button:hover {
        transition: .3s;
        transform: scale(1.2);
        cursor: pointer;
    }
    .rodape img {
        width: 100%;
        height: 300px;
    }
</style>
<body>
<?php include('menu.php'); ?>
<br><br><br><br>

<center><div class="formulario">
    <form method="post"> 
            <center><h1>Reserve seu quarto</h1></center>

            <label for="nome">Nome completo:</label><br>
                <input type="text" name="nome" id="nome" required/>
            
            <br><br>
            <label for="email">E-mail::</label><br>
                <input type="email" name="email" required>
            <br><br>

            <label for="tel">Telefone:</label><br>
                <input type="text" name="tel" required>
            <br><br>

    		<label for="cpf">CPF:</label><br>
                <input type="text" name="cpf" id="cpf" required>
            
            <br><br>
            <label for="rg">RG:</label><br>
                <input type="text" name="rg" required>

            <br><br>
            <label for="qntDias">Quantidade de dias que quer ficar:</label><br>
                <input type="number" name="qntDias" required>
        
            <br><br>
            <label for="diaReserva">Dia da reserva:</label><br>
                <input type="date" name="diaReserva" required>
            <br><br>
            <center><button type="submit" class="">Reservar quarto <i class="fa fa-check-circle"></i></button></center>
        
    </form> 
</div></center>


        <section class="rodape">
            <div>
                <img src="img/rodape.png">
            </div>
        </section>
</body>
</html>

<?php 

	include_once('DAO/ReservaDAO.php');
	include_once('Models/Reserva.php');

	$ReservaDAO = new ReservaDAO();
	$Reserva = new Reserva();

if (isset($_GET['id']) && isset($_GET['preco'])) {
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['cpf']) && isset($_POST['rg']) && isset($_POST['qntDias']) && isset($_POST['diaReserva'])) {

        $id = $_GET['id'];
        $total = $_GET['preco'] * $_POST['qntDias'];

        $d = new DateTime($_POST['diaReserva']);
        $dataReserva = $d->format('d-m-Y');

        $d = new DateTime($_POST['diaReserva']."+".$_POST['qntDias']." days");
        $dataFinal = $d->format('d-m-Y');

                $Reserva->setNome($_POST['nome']);
                $Reserva->setEmail($_POST['email']);
                $Reserva->setTelefone($_POST['tel']);
                $Reserva->setCpf($_POST['cpf']);
                $Reserva->setRg($_POST['rg']);
                $Reserva->setNumeroQuarto($id);
                $Reserva->setQntDias($_POST['qntDias']);
                $Reserva->setDataReserva($dataReserva);
                $Reserva->setDataFinal($dataFinal);
                $Reserva->setPreco($total);


            $ReservaDAO->ReservarQuarto($Reserva,$id);
    }
} else {
    echo "
        <script>
            location.href = 'index.php';
        <script>
    ";
}



?>