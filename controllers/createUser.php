<?php
include "dataBaseConfig.php";
// $sql = "SELECT * FROM usuarios";
// $result = $conexion->query($sql);
// $values = $result->fetchAll(PDO::FETCH_OBJ);
// $count = $result->rowCount();
// if($count > 0){

// }

$sql = "INSERT INTO usuarios
(primerNombre, segundoNombre, primerApellido, 
segundoApellido,phone, email, estudios,institucion,usuario,
password, id_user_type) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
function test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try {
    $primerNombre = test($_POST['primerNombre']);
    $segundoNombre = test($_POST['segundoNombre']);
    $primerApellido = test($_POST['primerApellido']);
    $segundoApellido = test($_POST['segundoApellido']);
    $phone = isset($_POST['phone']) ? test($_POST['phone']) : '';
    $email = isset($_POST['email']) ? test($_POST['email']) : '';
    $estudios = isset($_POST['estudios']) ? test($_POST['estudios']) : '';
    $institucion = isset($_POST['institucion']) ? test($_POST['institucion']) : '';
    $usuario = isset($_POST['usuario']) ? test($_POST['usuario']) : '';
    $password = test(md5($_POST['password']));
    $id_user_type = test(($_POST['userTypeId']));


    $result = $conexion->prepare($sql);
    $result->execute([$primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $phone, $email, $estudios, $institucion, $usuario, $password, $id_user_type]);
    if ($result->rowCount() > 0) {

        echo "Usuario creado éxitosamente";
    } else {
        echo "Error";
    }
} catch (PDOException $e) {
    print "Error" . $e->getMessage();
}
