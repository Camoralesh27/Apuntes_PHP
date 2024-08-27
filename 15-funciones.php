<?php 
declare(strict_types=1); //! Este debe ser la primer declaracion

include 'includes/header.php';

//* Si te piden un requerimiento grande no trates de hacerlo todo en una sola función.
//* Dividela en funciones pequeñas.



//! Crear la funcion
function sumar(int $num1 = 0, int $num2 = 0) { //parametros
    echo $num1 + $num2;
}

//! Llamar la funcion
sumar(10, 20); //argumentos
echo '<br>';
sumar(100, 200);
echo '<br>';
//! Este funciona porque se les asignaron valores por default. En caso de no haberlos asignado, por default, ocurre error.
sumar(1000);

//! Si agregas un string va a marcar error, por ello php 7 permite marcarlos como int. Así aseguras que tiene que ser de tipo entero.
//* También se puede agregar con un tipado más estricto -> declare(strict_types=1); en la cabecera, ya que es la primera declaracion.


/* 
int $num4 = 10;
float $num5 = 10.5;
bool $logueado = true;
string $nombre = 'Juan';
array $array = [];
 */
//! No pueden ser declarados fuera de la funcion, parametros, clases.


function sumar2(int $numero1 = 0, int $numero2 = 0) { //parametros
    echo $numero1;
    echo $numero1 + $numero2;
}

sumar2( numero2: 10, numero1: 20); //parametro nombrados.
// Antes como los ibas pasando se iba ingresando los valores, pero ahora puedes elegir el orden PHP 8

include 'includes/footer.php';