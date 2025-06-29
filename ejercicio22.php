<?php

class Persona
{
    public $nombre; //propiedades
    public function asignarNombre($nuevoNombre)
    { //acciones o metodos....
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
}
$objAlumno = new Persona(); //creacion de un objeto

$objAlumno->asignarNombre("Arturo"); //llamando un metodo 


echo $objAlumno->nombre;// imprimir una propiedad

$objAlumno2 = new Persona();

$objAlumno2->asignarNombre("Pablo");

echo $objAlumno2->nombre;

$objAlumno->imprimirNombre();