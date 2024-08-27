<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

//* Empty -> Revisa si un arreglo está vacion
var_dump( empty($clientes) );
echo '<br>';
var_dump( empty($clientes2) );
echo '<br>';
var_dump( empty($clientes3) );


echo '<br>';
echo '<br>';

//* Isset -> Revisa si una propiedad está creado ó una propiedad está definido
var_dump( isset($clientes1));
echo '<br>';
var_dump( isset($clientes2));
echo '<br>';
var_dump( isset($clientes3));
echo '<br>';
var_dump( isset($clientes4));
//* Isset -> También permite revisar si una propiedad está definida en un arreglo asociativo existe.
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['domicilio']));

echo '<br>';
echo '<br>';






include 'includes/footer.php';