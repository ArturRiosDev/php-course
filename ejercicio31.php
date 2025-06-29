<?php
        $txtNombre="";
        if($_POST["txtNombre"]){
            $txtNombre=(isset($_POST["txtNombre"]))? $_POST["txtNombre"] : "" ;
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php if($_POST["txtNombre"]){?>
    <p><?php echo $txtNombre;?></p>
    <?php };?>
    <form action="ejercicio31.php" method="post">
        <input value="<?php echo $txtNombre;?>" name="txtNombre" type="text">
        <input type="submit" value="Enviar informacion">
    </form>
</body>
</html>