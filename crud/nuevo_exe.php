<?php

//nos conectamos a la BD

require'class/database.php';
$objData = new Database();

//print_r($_POST);

$sth = $objData->prepare('INSERT INTO datos2 values (:idDato, :nombre,:apellido,:cedula,
	:correo,:telefono,:direccion,:graduacion,:descri) ');

$idDato = '';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$graduacion = $_POST['graduacion'];
$descri = $_POST['descri'];

$sth->bindParam(':idDato', $idDato);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':apellido', $apellido);
$sth->bindParam(':cedula', $cedula);
$sth->bindParam(':correo', $correo);
$sth->bindParam(':telefono', $telefono);
$sth->bindParam(':direccion', $direccion);
$sth->bindParam(':graduacion', $graduacion);
$sth->bindParam(':descri', $descri);

$sth->execute();

header('location: index.php');