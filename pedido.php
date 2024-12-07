<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Revision del pedido</title>
</head>
<body>
	<header>
		<h1>Confirmacion del pedido</h1>
		<img src="pedidos.png">
	</header>


<nav>
	<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="restorante.php">Paso 1:Restaurant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="comidas.php">Paso 2:Comidas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Paso 3:Logearse</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active">Paso 4:Pedido</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 5:Reccorido</a>
  </li>
</ul>
</nav>

<aside>
	<blockquote><h3>Logueado con el id:<?php echo $_SESSION['id']?></h3></blockquote> 
</aside>

<section>
	<h1 style="color: green;">Tu pedido</h1>
	<div><h2>Menu:               <?php echo $_SESSION['opcion']?></h2></div>
	<div><h2>Cantidad:           <?php echo $_SESSION['cantidad']?></h2></div>
	<div><h2>Precio:             <?php echo ($_SESSION['cantidad'] *1300)?></h2></div>
	<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Retiro</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Delivery  🏠 🏍️💨💨</label>
</div>
<div><h2>Direccion:Gascon 1325</h2></div>
<div><a href="tabla.php">Metodos de pago</a></div>
<button type="button" onclick="window.location.href='camino.php'" class="btn btn-primary">Confirmar pedido</button> 
</section>



<footer>Derechos reservados</footer>

</body>
</html>