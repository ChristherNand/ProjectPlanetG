<?php 

 try {
    $conexion = new PDO("mysql:host=localhost;dbname=planetgeek", 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "conexion exitosa";
    } catch (PDOException $e) {
        die($e->getMessage());
        }
?>
