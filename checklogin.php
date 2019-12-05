<?php

require_once('functions\functions.php');
// var_dump($_POST);
$email = $_POST['email'];
$password = $_POST['password'];

//validacion si el email y password existen

session_start();
unset($_SESSION['error']);

// var_dump(checkUser($email, $password));
$userId = checkUser($email, $password); //PUEDE SER NULO o el valor del ID usuario

if($userId > 0) { //si el id es mayor a 0
    $_SESSION['userId'] = $userId;
    header('Location: panel.php');
    // exit();
}else {
   $_SESSION['error'] = '<div class="alert alert-danger">'
                            .'usuario / contraseña incorrecta, porfavor intente de nuevo.'.
                          '</div>';
    header('Location: login.php');
    // exit();
}



?>