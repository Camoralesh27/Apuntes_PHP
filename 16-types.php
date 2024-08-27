<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string { 
    //* Le estas diciendo que el return es de tipo string 

    if($autenticado) {
        return 'El usuario esta autenticado';
    } else {
        return 'El usuario no esta autenticado';
    }
}

function usuarioAutenticado2(bool $autenticar) : void { 
    //* Le estas diciendo que el return esta vacio, no returna nada o retorna null

    if($autenticar) {
        echo 'El usuario esta autenticado';
    } else {
        echo 'El usuario no esta autenticado';
    }
}

function usuarioAutenticado3(bool $autentic) : ?string {
    //* Le estas diciendo que el return opcional que sea un string
    
    if($autentic) {
        return 'El usuario esta autenticado';
    } else {
       return null;
    }
}

//* En PHP 8
function usuarioAutenticado4(bool $autentic) : string|int {
    //* Le estas diciendo que el return puede ser string o int
    
    if($autentic) {
        return 'El usuario esta autenticado';
    } else {
        return 20;
    }
}

$usuario = usuarioAutenticado4(false);
echo $usuario;




include 'includes/footer.php';