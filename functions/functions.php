<?php
//conectar a la BD:
function connect(){ //se conecta a la base de datos
    $conexion=new mysqli('127.0.0.1', 'root', '', 'EFI');

    if ($conexion->connect_errno) {
        echo 'Error de conexion('.$conexion->connect_errno.'):';
        $conexion->connect_error;
        die();
    }

    return $conexion;
}

//*inicio-mostrar post*

function getPublications(){
    $link = connect();
    $result = $link->query("SELECT publicaciones.*, users.firstname, users.lastname, categorias.nombre  FROM publicaciones
    INNER JOIN users ON publicaciones.user_id = users.id
    INNER JOIN categorias ON publicaciones.categoria_id = categorias.id
    ORDER BY creado DESC");
    $arrayPublications=[];
    if($result){
        while($row=$result->fetch_object()) { 
            $arrayPublications[]=$row;
        }
    }else {
        printf("Errormessage: %s\n", $link->error);
    }
    $link->close(); 
    return $arrayPublications;
}
$publications = getPublications();
//var_dump($publications);

//*fin-mostrar post*


//*inicio-crear post* 


function createPost($titulo,$descripcion,$image,$user_id,$categoria_id){
  $link = connect();
  $result = $link->query("INSERT INTO publicaciones (`titulo`, `descripcion`, `image`, `user_id`, `categoria_id`) 
  VALUES('$titulo','$descripcion','$image','$user_id','$categoria_id')");
  if($result){
          return $result;
          echo "exito";
  }else {
      printf("Errormessage: %s\n", $link->error);
  }

  $link->close(); 
}
//*fin-crear post*

function getCategories(){
    $link = connect();
    $result = $link->query("SELECT * FROM categorias");
    $arrayResponse=[];

    if($result){
        while($row=$result->fetch_assoc()) {
            $arrayResponse[]=$row;
        }
    }

    $link->close();
    return $arrayResponse;
}


