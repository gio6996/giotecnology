<?php
//conexion con la base de datos y el servidor
$conexion = mysqli_connect('localhost','root','','datos')
or die(mysql_error($mysqli));
 insertar($conexion);

 function insertar($conexion){
 	$Nombre =$_POST['nombre'];
 	$email =$_POST['email'];
 	$sexo =$_POST['sexo'];
 	$fechadenacimiento =$_POST['fechadenacimiento'];
 }

 $consulta = "INSERT INTO datos(Nombre,email,sexo,fehadenacimiento)
 VALUES ('$Nombre','$email','$sexo','$fechadenacimiento')";
 mysqli_query($conexion, $consulta);