<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		 <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-auth.js"></script>
    <script>      
        // Configuración de Firebase
        const firebaseConfig = {
  	apiKey: "",
  	authDomain: "backend---interfaces.firebaseapp.com",
  	databaseURL: "https://backend---interfaces-default-rtdb.firebaseio.com",
  	projectId: "backend---interfaces",
  	storageBucket: "backend---interfaces.appspot.com",
  	messagingSenderId: "779545171534",
  	appId: "1:779545171534:web:744d5fa34fbcb24852551f"
	};
        // Inicializar Firebase
   		 firebase.initializeApp(firebaseConfig);
        firebase.analytics();  
</script>
	<title>Iniciar sesion!</title>
</head>
<body>
<header>
	<h1>Inicie sesion  o registrese</h1>
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
    <a class="nav-link active" href="#"> Paso 3:Logearse</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Paso 4:Pedido</a>
  </li>
</ul>
</nav>



<section>
	<div>
	<h2>Iniciar sesion</h2>
	<div class="mb-3">
  <label for="email" class="form-label">Correo electronico</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
</div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="contra" class="col-form-label">Contraseña</label>
  </div>
  <div class="col-auto">
    <input type="password" id="contra" name="contra" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="captcha" class="col-form-label">Ingrese el captcha</label>
  </div>
  <div class="col-auto">
    <input type="text" id="captcha" name="captcha" class="form-control" aria-describedby="passwordHelpInline">
    <img src="captcha.php">
  </div>
</div>
<button type="button" id="iniciar" name="iniciar" class="btn btn-success">Iniciar sesion</button>
	</div>
<p>--------------------------------------------O--------------------------------------------</p>

<div>
	<h2>Crear una cuenta!</h2>
	<div class="mb-3">
  <label for="nuevoemail" class="form-label">Correo electronico</label>
  <input type="email" class="form-control" id="nuevoemail" name="nuevoemail" placeholder="ejemplo@gmail.com">
</div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="nuevocontra" class="col-form-label">Contraseña</label>
  </div>
  <div class="col-auto">
    <input type="password" id="nuevocontra" name="nuevocontra" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
	<button type="button" id="crear" name="crear" class="btn btn-primary">Crear cuenta</button>
</div>
</section>

<footer>Derechos reservados a pedidos ya</footer>
</body>
</html>

<script>
	$(document).ready(function(){

		$('#iniciar').click(function(){
			let email=$('#email').val();
			let contra=$('#contra').val();
			let captcha=$('#captcha').val();

		$.post('auxiliarinicio.php',{captcha:captcha},function(data){
				if( data === "mal"){
					alert("Ingrese el captcha correctamente");
				}
				else{
					firebase.auth().signInWithEmailAndPassword(email,contra)
					.then((userCredential)=>{
						alert("Inicio de sesion exitoso! Acepte para ir a su pedido");
						window.location.href='pedido.php';
					})
					.catch((error)=>{
						alert("Datos incorrectos");
					});
				}
		});	
		});


		$('#crear').click(function(){														//Este segundo crea una cuenta//
			let email=$('#nuevoemail').val();
			let contra=$('#nuevocontra').val();

		$.post('auxiliarinicio.php',{},function(data) {
			if(data === "crear"){
				firebase.auth().createUserWithEmailAndPassword(email,contra)
				.then((userCredential)=>{
					alert("Cuenta creada exitosamente!");
				})
				.catch((error)=>{
					alert("Error:"+error.message);
				});
			}
		});
		});
	});

</script>
