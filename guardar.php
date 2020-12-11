<?php
	
	$conn=mysqli_connect("localhost","root","","registro");
	if(!$conn){
		die("La conexion fallo:".mysqli_connect_error);
	}
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$edad=$_POST['edad'];
	$nacimiento=$_POST['nacimiento'];
	$sangre=$_POST['sangre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];

	$sql="INSERT INTO candidato (nombres,apellidos,edad,nacimiento,sangre,correo,telefono,direccion)
	VALUES('$nombres','$apellidos','$edad','$nacimiento','$sangre','$correo','$telefono','$direccion')";
	
	if(mysqli_query($conn,$sql)){
		echo"registrado con exito";
	}else{
		echo"Error:".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>