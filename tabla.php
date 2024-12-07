<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="misestilos.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Medios de pago ya configurados</title>
</head>
<body>
    <header><h1>Metodos de pago</h1>
        <img src="pedidos.png">  
    </header>

<div id="app" class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo</th>
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(valor,index) in metodos" :key="index">
      <th scope="row">{{index +1}}</th>
      <td>{{valor.Tipo}}</td>
      <td>{{valor.Detalle}}</td>
    </tr>
  </tbody>
</table>
<button type="button" onclick="window.location.href='pedido.php'" class="btn btn-primary"><--Volver al pedido</button>
</div>

<footer>Derechos reservados a pedidos ya</footer>

<script>
    let app=new Vue({
        el:'#app',
        data(){
            return{
                metodos:[
                    {Tipo:"Tarjeta",Detalle:"termina en 8854"},
                    {Tipo:"Tarjeta",Detalle:"termina en 5433"},
                    {Tipo:"Billetera virtual",Detalle:"Mercado pago"},
                    ]
            }
        },
    });


</script>

</body>
</html>
