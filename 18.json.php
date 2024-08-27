<?php include 'includes/header.php';

// Conexiones se hacen por medio de JSON. PHP y JS se pueden comunicar por medio de JSON
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Audifonos',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 400,
        'disponible' => false
    ] 
];


echo '<pre>';
    var_dump($productos); //! Esto no lo puede leer JS
    $json = json_encode($productos); //! de array a string
    /* $json = json_encode($productos, JSON_UNESCAPED_UNICODE); */ //! En caso de que quieras leer los acentos
    $productos2 = json_decode($json); //! de string a array
    var_dump($json); //! Esto si lo puede leer JS
echo '</pre>';



include 'includes/footer.php';