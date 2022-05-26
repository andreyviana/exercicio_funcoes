<?php


$n1 = $_POST['n1'];
$type = $_POST['TYPE'];

function far_toCelsius($f){
    $celsius = ($f-32)*(5/9);
    return $celsius;
}

function cel_toFarenheit($c){
    $farenheit = $c*(9/5)+32;
    return $farenheit;
}



switch($type){
    case "fToC": 
        echo "$n1 F em graus Celsis é: ";
        echo far_toCelsius($n1);
    
    break;
    case "cToF": 
        echo "$n1 C em graus Farenheit é: ";
        echo cel_toFarenheit($n1);    
        
    break;
}