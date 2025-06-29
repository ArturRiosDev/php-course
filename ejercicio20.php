<?php

//de esta manera en lugar de que su indice sea 0,1,2 , ahora seran los que nosotros directamente estamos poniendo
    $frutas=array("f"=>"fresa","p"=>"pera","m"=>"manzana");
    print_r($frutas)."<br/>";

    // echo $frutas["f"];

    // for($indice=0;$indice < 3; $indice ++){
    //     echo $frutas[$indice]."<br/>";
    // }

    foreach($frutas as $indice=>$valor){
            echo $indice."<br/>";

    }   
?>
