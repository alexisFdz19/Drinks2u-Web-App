<?php
session_start();
include 'conexion.php';
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysqli_query($mysqli, "select * from pedidos order by ped_numeroventa DESC limit 1") or die(mysqli_error());
		while ($f=mysqli_fetch_array($re,MYSQLI_ASSOC)){
          $numeroventa=$f['ped_numeroventa'];
        }
        if($numeroventa==0){
        	$numeroventa=1;
        }else{
        	$numeroventa=$numeroventa+1;
        }
        for($i=0; $i<count($arreglo);$i++){
        	mysqli_query($mysqli, "insert into pedidos (ped_numeroventa, ped_nombre, ped_imagen, ped_precio, ped_cantidad, ped_subtotal) values(
        		".$numeroventa.",
        		'".$arreglo[$i]['Nombre']."',
        		'".$arreglo[$i]['Imagen']."',
        		'".$arreglo[$i]['Precio']."',
        		'".$arreglo[$i]['Cantidad']."',
        		'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
        		)")or die(mysqli_error());
        }
        unset($_SESSION['carrito']);
        header("Location: ../pedidorealizado.php");

?>