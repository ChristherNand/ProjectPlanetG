<?php
include_once('./dataBaseConfig.php');
session_start();

$email = $_POST["email"];
$password = md5($_POST["password"]);
if (empty($email) || empty($password)) {
    echo "<h1>Porfavor llene los campos</h1>";
} else {
    $sql = "SELECT email, password FROM usuarios WHERE email = '$email' AND password = '$password' ";
    $result = $conexion->prepare($sql);
    $result->execute();
    $count = $result->rowCount();
    if ($count > 0) {
        echo "Welcome";
        $_SESSION["email"] = $email;
        header("location:../admin/index.php");
    } else {
        echo "Los valores ingresados son incorrectos";
    }
}
