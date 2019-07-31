<?php

$attributes = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=planetgeek", 'root', '', $attributes);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexión éxitosa";
} catch (PDOException $e) {
    die($e->getMessage());
}
