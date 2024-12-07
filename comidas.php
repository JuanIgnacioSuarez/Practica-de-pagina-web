<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Paso 2 Elejir la comida!</title>
</head>
<body>
	<header>
	<h1>Realice su pedido!</h1>
	<img src="pedidos.png">
</header>


<nav>
	<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="restorante.php"> Paso 1:Restaurant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#"> Paso 2:Comidas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Paso 3: Logearse</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 4: Pedido</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 5:Reccorido</a>
  </li>
</ul>
</nav>




<section>
<h2>Armemos tu pedido!</h2>
<div>
	<label for="opcion" class="form-label">Menu</label>
<select class="form-select" id="opcion" name="opcion" aria-label="Default select example">
  <option selected >Elija una opcion</option>
  <option value="Empanada">Empanadas</option>
  <option value="Pizza">Pizza</option>
  <option value="Hamburguesa">Hamburguesa</option>
  <option value="Fideos">Fideos</option>
</select>
</div>
<p></p>
<p></p>
<div class="mb-3">
  <label for="cantidad" class="form-label">Cantidad</label>
  <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="0">
</div>
<h3>Precio Unidad: 1300 </h3>
<div>
<button type="button" id="agregar" name="agregar" class="btn btn-primary">Agregar al pedido</button>
</div>
</section>




<footer>Derechos reservados a pedidos ya</footer>

</body>
</html>


<script>
	$(document).ready(function(){

		$('#agregar').click(function(){
			let opcion=$('#opcion').val();
			let cantidad=$('#cantidad').val();

			$.post('limpiar.php',{opcion:opcion,cantidad:cantidad},function(data){
				if(data === "mal"){  //Aca si devuelve mal , deberia avisar y pedir de nuevo que cargue los datos//
					alert("Ingrese valores en ambos campos");
				}
				else{
					alert("Pedido tomado con exito! ahora por favor ingrese al sitio para confirmar su pedido");
					window.location.href='iniciar.php';
				}
			});
		});
	});
</script>








