<?php 
  session_start();
  if (!isset($_SESSION['userId'])) {
      header("Location: accessdenied.php");
      exit();
  }
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
  <h1>PANEL DEL USUARIO</h1>
  <a href="logout.php">Logout</a>
</body>
</html>