<?php

$arreglo = [123,546,489,165];

function recorrer($arreglo){
    foreach ($arreglo as $key => $elemento) {
        echo($elemento);
        echo('<br>');
    }
}

recorrer($arreglo);

?>