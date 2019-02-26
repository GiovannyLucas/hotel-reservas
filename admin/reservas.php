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
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>RG</td>
            <td>Nº Quarto</td>
            <td>Qnt. de dias</td>
            <td>Data da reserva</td>
            <td>Data final</td>
            <td>Preço</td>
            <td>Ação</td>
        </tr>
    </thead>
    <tbody>
        
<?php 
    include('DAO/ReservaDAO.php');

    $ReservaDAO = new ReservaDAO();

    $reserva = $ReservaDAO->ListaReservas();
    
        for ($i=0; $i < count($reserva); $i++) { 
            echo "
            <tr>
                <td>".$reserva[$i]['id']."</td>
                <td>".$reserva[$i]['nome']."</td>
                <td>".$reserva[$i]['email']."</td>
                <td>".$reserva[$i]['telefone']."</td>
                <td>".$reserva[$i]['cpf']."</td>
                <td>".$reserva[$i]['rg']."</td>
                <td>".$reserva[$i]['id_quarto']."</td>
                <td>".$reserva[$i]['qnt_dias']."</td>
                <td>".$reserva[$i]['data_reserva']."</td>
                <td>".$reserva[$i]['data_final']."</td>
                <td>".$reserva[$i]['preco']."</td>
                <td><center><a href='opcoes-reserva.php?opcao=all&id=".$reserva[$i]['id']."&idquarto=".$reserva[$i]['id_quarto']."&acao=delete'><i class='fa fa-trash' style='color:tomato;'></i></a></center></td>
            </tr>
            ";
        }


?>
        
    </tbody>
</table>

<?php 

if (isset($_GET['id'])) {
    if ($_GET['acao'] == "delete") {
        
        include_once('DAO/ReservaDAO.php');

        $ReservaDAO = new ReservaDAO();
        
        $id = $_GET['id'];

        $id_quarto = $_GET['idquarto'];

        $ReservaDAO -> Excluir($id,$id_quarto);
        
    }
    

}

?>