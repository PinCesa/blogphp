<?php
require_once('functions\functions.php');
$id=1;
$post = getOnePost($id);
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
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <img src="<?php echo $post->image?>">
      <h2 class="mdl-card__title-text"><?php echo $post->titulo ?></h2>
    </div>
    <div class="mdl-card__supporting-text"><?php echo $post->descripcion ?></div>
    <div class="mdl-card__actions mdl-card--border">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--2-col graybox"><?php echo $post->creado ?></div>
        <div class="mdl-cell mdl-cell--2-col graybox"><?php echo $post->actualizado ?></div>
        <div class="mdl-cell mdl-cell--4-col graybox">
          <?php echo $post->firstname." ".$post->lastname?></div>
        <div class="mdl-cell mdl-cell--4-col graybox"><?php echo $post->nombre?> </div>
      </div>
    </div>
  </div>
    
</body>
</html>