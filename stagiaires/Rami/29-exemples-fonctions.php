<?php
/*
per creare una funzione, si utilizza la parola chiave funzione, seguito dal nome della funzione
(regola della nominazione delle variabili senza la &) seguito dalle (){}
*/

function helloWorld(){
    return"Hello World!";
}

// una funzione  é eseguita solo quando la richiami un esempio qua sotto in seguito :=>

echo helloWorld(); // <==


function lanceDe(int $faces){
    $array=  array();
    for($i=1; $i<=$faces; $i++){
        $array [$i] =$i;

    }

return $array;

}

echo lanceDe();