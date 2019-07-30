<?php
include "dataBaseConfig.php";
$sql = "INSERT INTO usuarios (primerNombre, segundoNombre, primerApellido, segundoApellido,
telefono, email, nivelEducativo,institucion,usuario,
password, password2) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
function test($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try {
    $primerNombre= test($_POST['primerNombre']);
    $segundoNombre=test($_POST['segundoNombre']);
    $primerApellido=test($_POST['primerApellido']);
    $segundoApellido=test($_POST['segundoApellido']);
    $telefono=test($_POST['telefono']);
    $email=test($_POST['email']);
    $nivelEducativo=test($_POST['nivelEducativo']);
    $institucion=test($_POST['institucion']);
    $usuario=test($_POST['usuario']);
    $password1=test(md5($_POST['password']));
    $password2=test(md5($_POST['password2']));
                 
    $result = $conexion->prepare($sql);
    $result->execute([$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$telefono,$email, $nivelEducativo, $institucion,$usuario,$password1,$password2]);
    if($result->rowCount() > 0){
               
            echo "Usuario creado éxitosamente";                 
        
    }else{
        echo "Error";
             
    }        
} catch (PDOException $e) {
    print "Error".$e->getMessage();
}