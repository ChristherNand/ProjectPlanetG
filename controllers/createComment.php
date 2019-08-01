<?php
include_once('../controllers/dataBaseConfig.php');
session_start();
function test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try {
    $user_id = $_SESSION["user_id"];
    $post_id = test($_POST['post_id']);
    $comment = test($_POST['comment']);
    $sql = "INSERT INTO comments(comment, user_id,post_id,status_id) VALUES (?,$user_id,$post_id,1)";
    $result = $conexion->prepare($sql);
    $result->execute([$comment]);
    if ($result->rowCount() > 0) {
        //echo "Su comentario fué creada éxitosamente";
        header('location:../index.php?page=home');
    } else {
        echo "Error";
    }
} catch (PDOException $e) {
    print "Error" . $e->getMessage();
}
