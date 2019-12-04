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
  <div>
    <!-- onChange -->
    <select class="custom-select">/
      <?php foreach ($categories as $category) : ?>
      <option value="<?php echo $category->id ?>"><?php echo $category->nombre ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php foreach ($publications as $publication): ?>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <a href='post.php' style='text-decoration:none; color:inherit;'>
      <div class="mdl-card__title">
        <img src="<?php echo $publication->image?>">
      </div>
      <h2 class="mdl-card__title-text"><?php echo $publication->titulo ?></h2>
      <div class="mdl-card__supporting-text"><?php echo $publication->descripcion ?></div>
      <div class="mdl-card__actions mdl-card--border">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col graybox"><?php echo $publication->creado ?></div>
          <div class="mdl-cell mdl-cell--2-col greybox"><?php echo $publication->actualizado?></div>
          <div class="mdl-cell mdl-cell--4-col graybox">
            <?php echo $publication->firstname." ".$publication->lastname?></div>
          <div class="mdl-cell mdl-cell--4-col graybox"><?php echo $publication->nombre?> </div>
        </div>
      </div>
    </a>
  </div>
  <?php endforeach; ?>
</body>

</html>