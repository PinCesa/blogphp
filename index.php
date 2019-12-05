<?php
require_once('functions\functions.php');

$categories= getCategories(); //option del select

$categoryId = '0';
if(isset($_POST['categoryId'])){
  $categoryId = $_POST['categoryId']; //opcion elegida por el usuario
  // var_dump($_POST['categoryId']);
}


if($categoryId == '0' || !isset($_POST['categoryId'])) { //si el value del select es 0 (todos)

  $publications = getPost(); //todas las publicaciones
}else {
  $publications= getCategoryPosts($categoryId); //las publicaciones de una categoria especifica
}


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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <select id="categorySelect" class="custom-select" name="categoryId" onChange="this.form.submit();">
        <option value="0">Todos</option>
        <?php foreach ($categories as $category) : ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->nombre ?></option>
        <?php endforeach; ?>
      </select>
    </form>
  </div>
  <?php foreach ($publications as $publication): ?>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <a href='post.php?id=<?php echo $publication->id?>' style='text-decoration:none; color:inherit;'>
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

<script>
  document.querySelector('#categorySelect').value = <?php echo $categoryId ?>;
</script>

</html>