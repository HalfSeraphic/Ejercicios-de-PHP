<?php
declare(strict_types=1); //Va a marcar errores de forma estricta
include 'includes/header.php';


function sumar(int $numero1 = 0, int $numero2 = 0) { //El int obliga al numero a ser  un entero y el igual a 0 a dar un valor por default
    echo $numero1 + $numero2;
}

//Igualmente se pueden poner bool, float, array,

sumar(10,20);
echo "<br>";
sumar(100,200);
echo "<br>";
sumar(123,1230);
echo "<br>";
sumar(4,6);
echo "<br>";
sumar(numero2: 0, numero1: 6);










include 'includes/footer.php';