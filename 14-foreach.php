<?php include 'includes/header.php';

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

foreach( $productos as $producto ) {
    echo '<pre>';
    var_dump($producto);
    echo '</pre>';
}

foreach( $productos as $producto ) {
    echo '<li>';
    echo 'Titulo del poducto';
    echo '</li>';
}

//! html en php es más bien php en html. Ten cuidado de estar inyectando html en php. Gastas recursos de backend.

//Entonces la manera adecuada de hacerlo es de la siguiente manera.
// Cerramos PHP, escribimos html y volvemos a abrir PHP 
foreach( $productos as $producto ) { ?> 
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo '$ ' . $producto['precio']; ?> </p>
        <p>Disponible: <?php echo $producto['disponible'] ? 'Si' : 'No'; ?></p>
        <p><?php echo $producto['disponible'] ? 'Disponible' : 'No Disponible'; ?></p>
        <?php 

        //* En vez de esto puedes utilizar un operador ternario
        if( $producto['disponible'] ) {
            echo '<p>Disponible</p>';
        } else {
            echo '<p>No disponible</p>';
        }
        ?>

    </li>
    

    <?php
    echo '<pre>';
    var_dump($producto);
    echo '</pre>';
}

include 'includes/footer.php';