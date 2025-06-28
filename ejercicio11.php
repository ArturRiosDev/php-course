<?php
if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if (($valorA != $valorB)) {
        echo" el valor de a es diferente a de b";
    
    }else{
        echo "el valor de a es igual al valor de b";
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