<?php
include_once('./dataBaseConfig.php');
session_start();

$email = $_POST["email"];
$password = md5($_POST["password"]);
if (empty($email) || empty($password)) {
    echo "<h1>Porfavor llene los campos</h1>";
} else {
    $sql = "SELECT user_id, email, password, id_user_type FROM usuarios WHERE email = '$email' AND password = '$password' ";
    $result = $conexion->query($sql);
    $values = $result->fetchAll(PDO::FETCH_OBJ);
    $count = $result->rowCount();
    if ($count > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["user_id"] = $values[0]->user_id;
        $_SESSION["id_user_type"] = $values[0]->id_user_type;
        foreach ($values as $key) {
            if ($key->id_user_type == 3) {
                header("location:../index.php?page=home");
            } else if ($key->id_user_type == 2) {
                header("location:../admin/index.php?page=publisher");
            } else if ($key->id_user_type == 1) {
                header("location:../admin/index.php?page=admin");
            }
        }
    } else {
        echo "Los valores ingresados son incorrectos";
    }
}
