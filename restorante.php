<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Paso 1 Elejir el restaurant!</title>
</head>
<body>

<header>
	<h1>Bienvenidos a Pedidos ya</h1>
	<img src="pedidos.png">
</header>


<nav>
	<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Paso 1:Restaurant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="comidas.php">Paso 2:Comidas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Paso 3:Logearse</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 4:Pedido</a>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 5:Reccorido</a>
  </li>
</ul>
</nav>



<section>
	<h2>Selecione el restaurant(Haga click en la imagen del que desea)</h2>
<figure>
	<img src="manolo.png" onclick="window.location.href='comidas.php'"> 
	<img src="simona.png" onclick="window.location.href='comidas.php'"> 
</figure>
</section>

<footer>Derechos reservados a pedidos ya</footer>


</body>
</html>