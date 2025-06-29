<?php


        session_start();// como crear datos que van a mantenerse en todas las paginas 
        $_SESSION["usuario"]="ArturRiosDev";
        $_SESSION["status"]="logueado";


        echo "Sesion iniciada";
        