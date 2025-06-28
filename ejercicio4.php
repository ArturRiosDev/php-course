<?php

    if($_POST){

        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['apellido'];
    }
    echo "Hola".$nombre." ".$apellido;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ejercicio4.php" method="post" >
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="">
        
        <label for="apellido"></label>
        <input type="text" name="apellido">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>