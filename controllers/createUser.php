<?php
include "dataBaseConfig.php";
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
    $phone = test($_POST['phone']);
    $email = test($_POST['email']);
    $estudios = test($_POST['estudios']);
    $institucion = test($_POST['institucion']);
    $usuario = test($_POST['usuario']);
    $password = test(md5($_POST['password']));
    $id_user_type = test(md5($_POST['userTypeId']));


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
