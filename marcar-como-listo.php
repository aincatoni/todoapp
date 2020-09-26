<?php

$id = $_GET['id'];


include_once 'conexion.php';



$sentencia_editar = $pdo->prepare('UPDATE todos SET states = true WHERE id = :id');
$result = $sentencia_editar->execute( ['id' => $id] );


if ( !$result ) {
    die('Algo falló. Intenta nuevamente más tarde. ');
}

header('Location: index.php?eliminada=' . $id, 302);
die;


// header('location:index.php');

