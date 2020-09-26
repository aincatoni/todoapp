<?php 


if($_POST){
  $title = $_POST['title'];
  $cuerpo = $_POST['cuerpo'];

$sql_agregar = 'INSERT INTO todos (title,cuerpo) VALUES (?,?)';
$sentencia_agregar = $pdo->prepare($sql_agregar);
$sentencia_agregar->execute(array($title,$cuerpo));

header('location:index.php');

}

?>
