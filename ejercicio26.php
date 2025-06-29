<?php

class UnaClase{


    public static function unMetodo(){
        echo "hola soy un metodo estatico";
    }
}


$obj = new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo(); // de esta forma no tengo que instanciar la clase unicamente si el metodo es estatico