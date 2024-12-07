<?php
session_start();

$opcion = addslashes(stripslashes($_POST['opcion'])); //Estas variables segun no existen , pero luego si se muestran//
$cantidad = addslashes(stripslashes($_POST['cantidad']));

if( $opcion == "Elija una opcion" || $cantidad == ""){   //Esta verificacion deberia funcionar , no se por que sucede el error//
	echo "mal";
}
else{
	$_SESSION['opcion']=$opcion;
	$_SESSION['cantidad']=$cantidad;
	echo "bien";
}
?>

