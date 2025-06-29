<?php

class Persona
{
    private $edad; //solo tienes acceso desde la propia clase 
    public $nombre; //propiedades
    protected $altura; //solo se accede desde las clases o clases heredadas
    public function asignarNombre($nuevoNombre)
    { //acciones o metodos....
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
    public function mostrarNombre(){
        $this->edad =20;
        return $this->edad;
    }
}
$objAlumno = new Persona(); //creacion de un objeto

$objAlumno->asignarNombre("Arturo"); //llamando un metodo 


echo $objAlumno->nombre;// imprimir una propiedad

$objAlumno2 = new Persona();

$objAlumno2->asignarNombre("Pablo");

echo $objAlumno2->nombre;

echo $objAlumno->mostrarNombre();