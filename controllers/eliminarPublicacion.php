<?php
session_start();
include_once("./dataBaseConfig.php");
if (!isset($_GET["id_post"])) exit();
$id = $_GET["id_post"];
$query = $conexion->prepare("DELETE FROM post WHERE id_post = ?;");
$result = $query->execute([$id]);
if ($result === TRUE) {
    echo "Eliminado correctamente";
} else {
    echo "Algo salió mal";
}
