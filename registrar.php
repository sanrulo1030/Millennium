<?php 
	$conexion=mysqli_connect('localhost','root','','ejercicio');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	$sql="INSERT into Persona (nombre,apellido)
			values ('$nombre','$apellido')";
	echo mysqli_query($conexion,$sql);
 ?>