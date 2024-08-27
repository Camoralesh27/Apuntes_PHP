<?php include 'includes/header.php';

$numero1 = 30;
$numero1++;

echo $numero1; // = 31

echo ++$numero1; // = 32 primero hace el incremento luego imprime
echo $numero1++; 
// = 32 imprime primero luego hace el incremento por eso el siguiente echo es 33
echo $numero1; // =33

echo $numero1 += 5; //incremento de 5 en 5

//decremento 
echo --$numero1;



include 'includes/footer.php';