<?php 
session_start();

var_dump($_SESSION);

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
  <form action="checklogin.php" method="post">
    <input name="email" type="text">
    <input name="password" type="text">
    <button type="submit">Login</button>
  </form>
</body>
</html>