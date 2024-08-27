<?php include 'includes/header.php';

//* While (Primero 'evalua' luego 'ejecuta')
$i = 0; //inicializador

while ($i < 10) {
    echo $i ;
    $i++; //incremento
}

echo '<br>';
//! también se puede colocar de la siguiente manera. Cambiando las llaves por dos puntos y endwhile
while ($i < 10) :
    echo $i ;
    $i++; //incremento
endwhile;


echo '<br>';
echo '<br>';

//* Do While (Primero 'ejecuta' luego 'evalua')
$i = 0; //inicializador

do {
    echo $i ;
    $i++; //incremento
} while ($i < 10);

//! Con 'while' si la condicion no se cumple no realiza nada, en cambio con 'do while' si la condicion no se cumple se ejecuta una vez e imprime el valor, en este caso un 100 no se imprime en while, mientras que en do while si.


echo '<br>';
echo '<br>';

//* For loop (Primero 'inicializa' luego 'evalua' luego 'ejecuta')
for ($i = 0; $i < 10; $i++) {
    echo $i ;
}

//! También se puede colocar de la siguiente manera. Cambiando las llaves por dos puntos y endfor
for ($i = 0; $i < 10; $i++):
    echo $i ;
endfor;

/* Desafio: Si el numero actual es: 
    - si es divisible entre 3 es Fizz,
    - si es divisible entre 5 es Buzz,
    - si es divisible entre 3 y 5 es FizzBuzz
*/

echo '<br>';
echo '<br>';



for ($i = 1; $i < 10; $i++) {
    if( $i % 3 == 0 && $i % 5 == 0 ) { //! es importante que este vaya primero sino nunca se va a mostrar
        echo $i . "-FizzBuzz <br>";
    } else if( $i % 3 == 0 ) {
        echo $i . " - Fizz <br>";
    } else if( $i % 5 == 0 ) {
        echo $i . "-Buzz <br>";
    } else {
        echo $i . " <br> ";
    }
} 


//* ForEach 
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}

//! tambien se puede colocar de la siguiente manera. Cambiando las llaves por dos puntos y endforeach
foreach ($clientes as $cliente):
    echo $cliente . '<br>';
endforeach;


echo count($clientes); //! es el equivalente de php a .length de js
echo sizeof($clientes);

// Recorriendo el arreglo hasta que se cumpla la condicion de la longitud del arreglo
for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . '<br>';
}

//* foreach con arreglos asociativos
$cliente = array(
    'nombre' => 'Cristhian',
    'saldo' => 200,
    'tipo' => 'premium'
);

// obteniendo solo los values
foreach ($cliente as $value) {
    echo $value . '<br>';
}

// obteniendo los key y los values
foreach ($cliente as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}




include 'includes/footer.php';