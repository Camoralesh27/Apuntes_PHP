<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

if($autenticado){ //* Validacion
    echo("El usuario esta autenticado");
} else {
    echo("El usuario no esta autenticado, inicia sesión");
}

echo '<br>';
echo '<br>';

if($autenticado || $admin){ //* Validacion con 'or'
    echo("El usuario esta autenticado");
} else {
    echo("El usuario no esta autenticado, inicia sesión");
}

echo '<br>';
echo '<br>';

if($autenticado && $admin){ //* Validacion con 'and'
    echo("El usuario esta autenticado");
} else {
    echo("El usuario no esta autenticado, inicia sesión");
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


//* If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => '200',
    'informacion' => [
        'tipo' => 'premium'
    ]
];


if( !empty($cliente) ) {
    echo "El arreglo del cliente no esta vacio";
    echo '<br>';

    if( $cliente['saldo'] > 0 ) {
        echo "El cliente tiene saldo";
    } else {
        echo "El cliente no tiene saldo";
    }

} else {
    echo "El arreglo del cliente esta vacio";
}

echo '<br>';
echo '<br>';

//* else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "El cliente no tiene saldo ni es premium";
}

echo '<br>';
echo '<br>';

//* Switch.
$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'HTML':
        echo "La tecnologia usada es HTML";
        break;
    case 'CSS':
        echo "La tecnologia usada es CSS";
        break;
    case 'PHP':
        echo "La tecnologia usada es PHP";
        break;
    default:
        echo "La tecnologia no existe";
        break;
}


include 'includes/footer.php';