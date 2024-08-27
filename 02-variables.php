<?php include 'includes/header.php';

//Esto es una variable
//no puede iniciar con numeros pero si puede tenerlos al final
$nombre = 'Juan';

$nombre = "Juan2";
echo $nombre;
var_dump($nombre);

//constante que no se puede volver a redefinir
//se imprime diferente porque no es una variable sino un identificador ó una propiedad.
define('constante', 'Este es el valor de la constante');
echo constante;


const constante2 = 'Hola 2';
echo constante2;

$nombreCliente = 'Pedro';
$nombre_Cliente = 'Pedro';



include 'includes/footer.php';