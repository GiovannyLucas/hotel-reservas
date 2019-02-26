<?php 


$dataBruta = new DateTime();
$data = $dataBruta->format('d-m-Y H:m:s');

echo "<br><br><br>";
$dataBruta = new DateTime();
$data1 = $dataBruta->format('d-m-Y H:m:s');


if ($data == $data1){
	echo "Datas iguais. Dia da reserva"; 
} else {
	echo "Datas diferentes";
}
?>