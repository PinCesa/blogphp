<?php
require_once('functions\functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name="formulario" method="post" action="dataform.php">

Titulo: <input type="text" name="titulo" value="">
Descripcion: <input type="text" name="descripcion" value="">
Imagen: <input type="text" name="imagen" value="">
Categoria: <input type="text" name="categoria" value="">
<input type="submit"/>

</form>
</body>
</html>