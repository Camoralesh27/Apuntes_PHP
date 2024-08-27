<?php include 'includes/header.php';

$nombreCliente = '     Cristhian Morales     ';

//* Usaremos funciones, ya que realmente un metodo sería -> nombreCliente."metodo";

// Conocer longitud de un string (también toma en cuenta espacios en blanco)
echo strlen($nombreCliente);
echo '<br>';
var_dump($nombreCliente);
echo '<br>';

//! Los espacios en blanco meten basura a la base de datos.
// Eliminar espacios en blanco del inicio y del final pero no entre palabras
$texto = trim($nombreCliente);
echo strlen($texto);
echo '<br>';
//Convertilo a mayusculas
echo strtoupper($nombreCliente);
echo '<br>';
//Convertilo a minuscula
echo strtolower($nombreCliente);
echo '<br>';


//! ¿Cual es el punto si lo puedo hacer con CSS? Si registran un mail pueden ser en minusculas ó mayusculas pero no importa porque el lenguaje de programacion lo hace todo a min para evitar que hayan duplicados 

$mail1 = 'correo@correo.com';
$mail2 = 'CORREO@correo.com';

var_dump($mail1 === $mail2);
echo '<br>';
var_dump(strtolower($mail1) === strtolower($mail2));
echo '<br>';

//* Reemplazar un texto
echo str_replace('Cristhian', 'C', $nombreCliente);
echo '<br>';

//* Revisar si un string existe o no
echo strpos($nombreCliente, 'Cristhian'); //está en la posición 5
echo '<br>';

//* Concatenar 
$tipoCliente = 'premium';
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
echo '<br>';

//* otro metodo 
//! Solo funciona con comillas dobles, con las sencillas imprime nombre variable.
echo "El cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';