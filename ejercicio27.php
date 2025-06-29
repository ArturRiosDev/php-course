<?php

  $servidor="localhost";//127.0.0.1
  $usuario="root";
  $password="root";

        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=album;charset=utf8", $usuario, $password);
            // Opcional: establecer el modo de errores de PDO
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql ="INSERT INTO `fotos` (`id`,`nombre`,`ruta`) VALUES (NULL,'jugando con la programacion','foto.jpg')";

            $conexion->exec($sql);
            echo "Conexion exitosa";
        } catch (PDOException $error) {
            echo "Conexion erronea ".$error;
        
        }
