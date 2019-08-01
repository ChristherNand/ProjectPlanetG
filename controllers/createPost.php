<?php
include_once('../controllers/dataBaseConfig.php');
session_start();
$user_id = $_SESSION["user_id"];
$sql = "INSERT INTO post(titulo, contenido,user_id,id_status) VALUES (?,?,$user_id,1)";
function test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try {
    $titulo = test($_POST['titulo']);
    $contenido = test($_POST['contenido']);
    $result = $conexion->prepare($sql);
    $result->execute([$titulo, $contenido]);
    if ($result->rowCount() > 0) {
        echo "Su publicación fué creada éxitosamente";
        header('location:../admin/index.php?page=publisher');
    } else {
        echo "Error";
    }
} catch (PDOException $e) {
    print "Error" . $e->getMessage();
}
