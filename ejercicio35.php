<?php

$jsonContenido = '[
{"nombre":"Artur"},
{"nombre":"Marlen"}
]';

$resultado = json_decode($jsonContenido);

// print_r($resultado);


foreach($resultado as $persona){
    print_r($persona->nombre."<br/>");
}