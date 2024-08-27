<?php include 'includes/header.php';

//* in_array -> buscar elemento en un arreglo
//! Difiere entre mayusculas y minúsculas

$carrito = ['Tablet', 'Computadora', 'Television'];
var_dump( in_array('Tablet', $carrito) );
echo '<br>';
var_dump( in_array('tablet', $carrito) );
echo '<br>';
var_dump( in_array('Audifonos', $carrito) );
echo '<br>';

//* sort -> Ordenar elementos de un arreglo
$numeros = array(1,0,6,3,7,9,4);
sort($numeros); //* de menor a mayor

echo '<pre>';
var_dump($numeros);
echo '</pre>';
echo '<br>';

rsort($numeros); //* de mayor a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';
echo '<br>';


//* Ordenar Arreglo Asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

asort($cliente);  //* Lo ordena por los valores. Primero los números luego por los string en orden alfabetico
arsort($cliente); //* lo ordena por valores invertido. Z primero luego alfabeto, luego los numeros


echo '<pre>';
var_dump($cliente);
echo '</pre>';

ksort($clietne); //* Lo ordena por las llaves en orden alfabetico
krsort($cliente); //* Key ordenado alfabeticamente pero invertido 


include 'includes/footer.php';