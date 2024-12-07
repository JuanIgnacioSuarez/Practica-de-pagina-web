<?php

session_start();

if(isset($_POST['captcha'])){ //Si detecta que no hay ningun  captcha , entonces significa que se esta creando una cuenta//
$captcha = addslashes(stripslashes($_POST['captcha']));
if($captcha == $_SESSION['tmptxt']){
	echo "bien";
	$_SESSION['id']=1;      //Como es solo un supuesto usuario le asigno un 1 a su id , como en el sitio no hay 		restricciones no se muestra , solo se le muestra al usuario//
}
else{
	echo "mal";
}
}
else{
	echo "crear";
}

?>