<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('datosproyecto');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$usuario=$_POST['Usuario'];
	$nombre=$_POST['Nombre'];
	$apellido=$_POST['Apellido'];
	$correo=$_POST['Correo'];
	$telefono=$_POST['Telefono'];
	$contrasena=$_POST['Contrasena'];
	$mensaje=$_POST['Mensaje'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$usuario',
								   '$nombre',
								   '$apellido'
								   '$correo',
								   '$telefono',
								   '$contrasena',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>