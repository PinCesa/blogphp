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

function getPost(){
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
$publications = getPost();

//var_dump($publications);

//*fin-mostrar post*

//*inicio-mostrar un post*

function getOnePost($id){
    $link = connect();
    $result = $link->query("SELECT publicaciones.*, users.firstname, users.lastname, categorias.nombre  FROM publicaciones    INNER JOIN users ON publicaciones.user_id = users.id
    INNER JOIN categorias ON publicaciones.categoria_id = categorias.id
    WHERE publicaciones.id = $id");
    if($result){
        while($row=$result->fetch_object()) { 
                $obj = $row;
        }
    }else {
        printf("Errormessage: %s\n", $link->error);
    }
    
    $link->close(); 
    return $obj;                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
}

//*fin-mostrar un post*


//*inicio-crear post* 

function newPost($titulo,$descripcion,$image,$user_id,$categoria_id){
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

//*inicio-borrar post* 

//$id = 44;
function deletePost($id){
    $link = connect();
    $result = $link->query("DELETE FROM publicaciones WHERE id = $id");
    if($result){
            return $result;
            echo "exito";
    }else {
        printf("Errormessage: %s\n", $link->error);
    }
  
    $link->close(); 
  }
  //deletePost($id);
//*fin-borrar post*

//*inicio-actualizar post* 
$id=43;
function updatePost($id,$titulo,$descripcion,$image,$actualizado,$categoria_id){
    $link = connect();
    $result = $link->query("UPDATE publicaciones 
                            SET titulo='$titulo', descripcion='$descripcion', image = '$image', actualizado = now(), categoria_id = '$categoria_id'
                            
                            WHERE id=$id "
                          );
    if($result){
            return $result;
    }else { 
        printf("Errormessage: %s\n", $link->error);
    }

    $link->close(); 
}
// updatePost($id,$titulo,$descripcion,$image,$actualizado,$categoria_id);

//*fin-actualizar post*


function getCategories(){
    $link = connect();
    $result = $link->query("SELECT * FROM categorias");
    $arrayResponse=[];

    if($result){
        while($row=$result->fetch_object()) {
            $arrayResponse[]=$row;
        }
    }

    $link->close();
    return $arrayResponse;
}
$categories= getCategories();


//*inicio-mostrar post*

