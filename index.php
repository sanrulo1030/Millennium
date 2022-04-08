<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Persona</title>
	<script src="jquery-3.2.1.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
</br>
</br>
</br>
</br>
	<form id="ingreso" method="post">

  <div class="mb-3" style="text-align: center;">
  	<h1><i class="bi bi-person">Ingreso Persona</i></h1>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" minlength="1" name="nombre" class="form-control" id="nombre">
    <div id="emailHelp" class="form-text">Ingresa sólo nombres.</div>
  </div>
  <div class="mb-3" style="text-align: center;">
    <label for="apellido" style="text-align: center;" class="form-label">Apellido</label>
    <input type="text" minlength="1" name="apellido" class=" form-control" id="apellido">
  <div id="emailHelp" class="form-text">Ingresa sólo apellidos.</div>
  </div>
  <div class="mb-3" style="text-align: center;">
  <button id="btnguardar" type="submit" class="btn btn-primary">Registar</button>
  </div>
</form>
<div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#ingreso').serialize();
			$.ajax({
				type:"POST",
				url:"registrar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("La información ha sido guardada correctamente.");
					}else{
						alert("Fallo el server, no se ha podido registrar.");
					}
				}
			});

			return false;
		});
	});
</script>
