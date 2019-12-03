<?php
require_once('functions\functions.php');



$titulo = $_POST['titulo']; 
$descripcion = $_POST['descripcion'];
$image = $_POST['imagen'];
$categoria_id = $_POST['categoria'];
$user_id= 1;
// echo $titulo." ".$descripcion." ".$image." ".$categoria_id.". ".$user_id;ikmkg

createPost($titulo,$descripcion,$image,$user_id,$categoria_id);