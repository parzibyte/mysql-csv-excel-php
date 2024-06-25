<?php
function obtenerBaseDeDatos()
{
	$contraseña = "";
	$usuario = "root";
	$nombre_base_de_datos = "personas";
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	$base_de_datos->query("set names utf8;");
	$base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
	$base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	#$base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $base_de_datos;
}


function obtenerPersonas()
{
	$bd = obtenerBaseDeDatos();
	$sentencia = $bd->query("SELECT id, nombre, edad, altura FROM personas");
	return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
