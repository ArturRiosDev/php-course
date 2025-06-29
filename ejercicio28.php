<?php

$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$password = "root";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album;charset=utf8", $usuario, $password);
    // Opcional: establecer el modo de errores de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    foreach($resultado as $indice=>$valor){
        echo "Este es el valor ".$valor["nombre"]."<br/>";
    }

    echo "Conexion exitosa";
} catch (PDOException $error) {
    echo "Conexion erronea " . $error;
}
