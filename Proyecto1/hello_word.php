<?php
//hola compas
echo "Puto el que lo lea \n";

//dato String
$my_string = "Esto es una cadena de texto";
echo $my_string . " ". "/ o no? \n";

//dato entero
    $my_int1= 6;
    $my_int2= 12;
    $my_int= $my_int1 + $my_int2;
echo $my_int *8 ."\n"; 

//dato decimal
    $my_float= 0.01;

echo gettype($my_float) . "\t";    
echo $my_float . "\n";    

//datos FoV
    $my_bool= true;

echo gettype($my_bool) , "\t";    
echo $my_bool . "\n";

//Constantes
const My_constant = "Valor";
echo My_constant. "\n";

//Arrays
$my_array = [$my_bool, $my_int, $my_string, My_constant];
echo $my_array[3] . " " . "=" . $my_array[1] . "\n";
array_push($my_array, $my_int1);
//print_r($my_array);

//Diccionario
$my_dic = array("string"=> $my_string, "entero" => $my_int);
//print_r($my_dic);

//Funciones
function print_number($numero){//se puede con argumento o sin el
    echo $numero . "\n";
}
print_number(12);


