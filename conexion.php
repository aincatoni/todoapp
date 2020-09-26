<?php

$link = 'mysql:host=localhost;dbname=todos';
$usuario = 'aincatoni';
$pass = '123456';

try {
  $pdo = new PDO($link, $usuario, $pass);
  
}catch (PDOException $e) {
    print "¡Error: " . $e->getMessage() . "<br/>";
    die();
}

