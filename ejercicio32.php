<?php
        $rdgLenguaje="";
        $txtNombre="";
        $chkhtml="";
        $chkphp="";
        $chkcss="";

        if($_POST){
            $txtNombre=(isset($_POST["txtNombre"]))? $_POST["txtNombre"] : "" ;
            $rdgLenguaje=(isset($_POST["tecnologia"]))? $_POST["tecnologia"] : "" ;
            $chkphp=(isset($_POST["chkphp"])=="si") ? "checked" : "";
            $chkhtml=(isset($_POST["chkhtml"])=="si") ? "checked" : "";
            $chkcss=(isset($_POST["chkcss"])=="si") ? "checked" : "";


            print_r($_POST);
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

    <?php if($_POST["tecnologia"]){?>
        <strong>el lenguaje seleccionado es:<?php echo $rdgLenguaje;?></strong>
    <?php };?>
    <br/>
    <form action="ejercicio32.php" method="post">
        <input value="<?php echo $txtNombre;?>" name="txtNombre" type="text">

        <br/>
        you like it?
        <br/>
        php: <input type="radio" <?php echo ($rdgLenguaje=="php") ? "checked": "";?> name="tecnologia" value="php" id="">
        <br/>
        html : <input type="radio" <?php echo ($rdgLenguaje=="html") ? "checked": "";?> name="tecnologia" value="html" id="">
        <br/>
        css: <input type="radio" <?php echo ($rdgLenguaje=="css") ? "checked": "";?> name="tecnologia" value="css" id="">
        <br/>


        <p>tipo checkbox</p>
        php:<input type="checkbox" <?php echo $chkphp?> name="chkphp" value="si" id="">
        <br/>
        html: <input type="checkbox" <?php echo $chkhtml?> name="chkhtml" value="si" id="">
        <br/>
        css:<input type="checkbox" <?php echo $chkcss?> name="chkcss" value="si" id="">
        <br/>

        <input type="submit" value="Enviar informacion">
    </form>
</body>
</html>