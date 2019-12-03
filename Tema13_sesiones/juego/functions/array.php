<?php

function crearArrayAsociativa($keys,$values){ // enviar claves y valores dentro de un array   
    $array = array_combine($keys, $values);
    return $array;
}

function cogerClaves($arr){
    return array_keys($arr);
}

function cogerValores($arr){
    return array_values($arr);
}

function eliminarDuplicados($arr){
    return array_unique($arr);
}

function ordenarmenoramayor($arr){
    sort($arr,SORT_NUMERIC);
    print_r($arr);

}

function numeroElementosArray($arr){
    return count($arr);
}

/* 

ORDENAR ARRAY NUMERICA ASCENDENTE:
sort($arr,SORT_NUMERIC);

ORDENAR ARRAY NUMERICA DESCENDENTE:
rsort($arr);

ORDENAR ARRAY DE CADENAS:
sort($arr, SORT_STRING);

ORDENAR ARRAY ASOCIATIVA POR CLAVE orden ascendente:
ksort($arr);

ORDENAR ARRAY ASOCIATIVA POR CLAVE orden descendente:
krsort($arr);

ORDENAR ARRAY ASOCIATIVA POR VALOR orden ascendente:
asort($arr);

ORDENAR ARRAY ASOCIATIVA POR VALOR orden descendente:
arsort($arr);

ORDENAR DE MANERA DESCENDENTE (MAYOR A MENOR):
  rsort($arr);


*/


/*
ARRAY MAP: 

$cities = ['Berlin', 'KYIV', 'Amsterdam', 'Riga'];
$aliases = array_map('strtolower', $cities);
 
print_r($aliases); // ['berlin', 'kyiv, 'warsaw', 'riga']
 
$numbers = [1, -2, 3, -4, 5];
$squares = array_map(function($number) {
    return $number ** 2;
}, $numbers);
 
print_r($squares);  // [1, 4, 9, 16, 25]


ARRAY WALK:

$fruits = [
    'banana' => 'yellow',
    'apple' => 'green',
    'orange' => 'orange',
];
 
array_walk($fruits, function(&$value, $key) {
    $value = "$key is $value";
});
 
print_r($fruits);


SLICE: OBTENER PARTES DE UNA ARRAY 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $top = array_slice($numbers, 0, 3);
  print_r($top); // [1, 2, 3]

FILTER Y MAP 

$values = ['say  ', '  bye', ' ', ' to', ' spaces ', '   '];
$words = array_filter(array_map('trim', $values));
print_r($words); // ['say', 'bye', 'to', 'spaces']

ARRAY_SUM

$order = [
    ['product_id' => 1, 'price' => 99, 'count' => 1],
    ['product_id' => 2, 'price' => 50, 'count' => 2],
    ['product_id' => 2, 'price' => 17, 'count' => 3],
];
 
$sum = array_sum(array_map(function($product_row) {
    return $product_row['price'] * $product_row['count'];
}, $order));
 
print_r($sum); // 250


GENERAR ARRAYS DE RANGOS:
$letters = range('a', 'z');
print_r($letters); // ['a', 'b', ..., 'z']
$hours = range(0, 23);
print_r($hours); // [0, 1, 2, ..., 23]

SUMAR Y MULTIPLICAR ARRAYS
$numbers = [1, 2, 3, 4, 5];
echo(array_sum($numbers)); // 15
echo(array_product($numbers)); // 120

CONTAR VALORES DENTRO DE UN ARRAY
$things = ['apple', 'apple', 'banana', 'tree', 'tree', 'tree'];
$values = array_count_values($things);
 
print_r($values);
 
// Array
// (
//     [apple] => 2
//     [banana] => 1
//     [tree] => 3
// )

array_filter() - Filtra elementos de un array usando una función de devolución de llamada
array_map() - Aplica la retrollamada a los elementos de los arrays dados
array_unique() - Elimina valores duplicados de un array
array_count_values() - Cuenta todos los valores de un array
*/



/*
EJEMPLO crearArrayAsociativa:

  $keys = [1, 'grass', 'orange'];
  $values = ["elisa",2,3];
  $array=crearArrayAsociativa($keys,$values);

EJEMPLO DE ARRAYLIST:

// define array
$array = ['a', 'b', 'c'];
 
// without list()
$a = $array[0];
$b = $array[1];
$c = $array[2];
 
// with list()
list($a, $b, $c) = $array;

*/

?>




