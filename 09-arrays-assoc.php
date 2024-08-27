<?php include 'includes/header.php';
//* Es el equivalente a los OBJETOS en JS
$cliente = [
    'nombre' => 'Juan',
    'saldo' => '200',
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
        ]
    ];

echo '<pre>';
    var_dump($cliente);
echo '</pre';

echo 'br>';

//! Para mostrar los valores de un objeto asociativo no se hace con indices sino con el nombre de la propiedad
echo '<pre>';
    var_dump($cliente['nombre']);
echo '</pre';

// Imprimir solo el valor
echo 'br>';
echo $cliente['nombre'];
echo '<br>';
echo $cliente['informacion']['tipo'];

echo '<br>';
//* Si creas una propiedad nueva la agrega al arreglo, si ya existia la sobreescribe.
$cliente['codigo'] = 1209192012;
$cliente['nombre'] = 'Cris';

echo '<pre>';
    var_dump($cliente);
echo '</pre';




include 'includes/footer.php';