<?php
require_once ;
$result = false;
if(!empty ($_POST)){
$usuario = $_POST['usuario']    
$correo = $_POST['correo'];
$pasword = $_POST['pasword'];

    $mysql_query = "INSERT INTO registro(correo,pasword)
                    VALUES(:correo,:pasword)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'usuario' => $usuario,
      'correo' => $correo,
      'pasword' => $pasword,

    ]);
      }
}

?>
