<?php include 'includes/header.php';

//* Existen 2 tipos de arreglos (indexados ó asociativos), los objetos aquí no existen pero son equivalentes a los arreglos asociativos.

//* 2 formas de crear un arreglo
$carrito = []; //! Más usado en LARAVEL
$carrito2 = array(); //! Más usado en WORDPRESS pero es lo mismo

var_dump($carrito);
echo '<br>';
var_dump($carrito2);

//---------------

//* Util para ver los contenidos de un array con un var_dump, de manera organizada con la etiqueta <pre>
$carrito3 = ['Tablet', 'Television', 'Computadora'];
echo '<pre>';
    var_dump($carrito3);
echo '</pre';

echo '<br>';
echo '<br>';

// Conocer el tipo de dato y el valor de una variable de un arreglo
var_dump($carrito3[1]);
echo '<br>';

// Acceder a un elemento del array
echo $carrito3[1];

// Añade un elemento en el indice 3 del arreglo
$carrito3[3] = 'Nuevo producto...';

//* Añadir un elemento nuevo al final...
array_push($carrito3, 'Audifonos');

//* Añadir al inicio
array_unshift($carrito3, 'Smartwatch');


echo '<pre>';
    var_dump($carrito3);
echo '</pre';


$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo '<pre>';
    var_dump($clientes);
echo '</pre';




include 'includes/footer.php';