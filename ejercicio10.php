<?php
if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if (($valorA != $valorB) && ($valorA > $valorB)) {
        echo "El valor de A es mayor que el valor de B";
    }

    if($valorA == $valorB){
        echo "El valor de a es mayor que el valor de B";

        if($valorA == 4){
            echo 'El valor es 4';
        }
        if($valorA == 5){
            echo 'el valor es 5';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>
    <form action="ejercicio8.php" method="post">

        Valor A
        <input type="text" name="valorA">
        <br />
        Valor B
        <input type="text" name="valorB">
        <br />
        <input type="submit" value="Calcular">
    </form>
</body>

</html>