<?php
require_once('functions\functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>PostIt</title>
</head>
<body>
<?php for ($i=0; $i < count($publications); $i++) { 
  $publication = $publications[$i]; ?>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
  <img src="<?php echo $publication->image?>">
    <h2 class="mdl-card__title-text"><?php echo $publication->titulo ?></h2>
  </div>
  <div class="mdl-card__supporting-text"><?php echo $publication->descripcion ?></div>
  <div class="mdl-card__actions mdl-card--border">
  <div class = "mdl-grid">
               <div class = "mdl-cell mdl-cell--4-col graybox mdl-color--red-500"><?php echo $publication->creado ?></div>
               <div class = "mdl-cell mdl-cell--4-col graybox mdl-color--blue-500"><?php echo $publication->firstname." ".$publication->lastname?></div>
               <div class="mdl-cell mdl-cell--4-col graybox mdl-color--yellow-500"><?php echo $publication->nombre?> </div>
            </div>
  </div>  
</div>
<?php } ?>

</body>
</html>

