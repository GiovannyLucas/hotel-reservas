<style>
    .formulario {
        background: rgba(255,255,255,.8);
        width: 30%;
        height: 55vh;
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
            transition: .3s; margin-top: 30px;
    }
    button:hover {
        transition: .3s;
        transform: scale(1.2);
        cursor: pointer;
    }
</style>
<body>

<?php include 'menu.php'; ?>

<br><br><br><br>

<center><div class="formulario">
    <form method="post"> 
            <center><h1>Adicionar Administrador <i class="fa fa-user"></i></h1></center>
      		<br>
            <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="nome" required/>
            
            <br><br>
            <label for="pass">Senha:</label>
                <input type="password" name="pass" minlength="5">
            <br><br>

            <center><button type="submit" class="">Cadastrar</button></center>
        
    </form> 
</div></center>

</body>
</html>

<?php 
error_reporting(0);

	include_once('DAO/UsuarioDAO.php');
	include_once('Models/Usuario.php');

	$UsuarioDAO = new UsuarioDAO();
	$Usuario = new Usuario();

if (isset($_POST['nome']) && isset($_POST['pass'])) {

	$Usuario->setUsuario($_POST['nome']);
	$Usuario->setSenha($_POST['pass']);

	$UsuarioDAO->Cadastrar($Usuario);
}


?>