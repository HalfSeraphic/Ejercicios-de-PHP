<?php include 'includes/header.php';

//While
$i = 0; //Inicializador

while ($i < 10) {
    echo $i . "<br>";

    $i++; //Incremento
}


//Do While se ejecuta hasta que la condicion se evalue como falsa

$i = 0; //Inicializador
do {
    echo $i . "<br>";

    $i++; //Incremento
} while ($i < 10);

//For Loop
for ($i=0; $i < 10; $i++) { 
    echo $i . "<br>";
}


/*Imprimir 
3 Fizz
5 Buzz
3 y 5 FizzBuzz
*/

for ($i=0; $i < 100; $i++) { 
    if ($i % 15 === 0 && $i % 5 === 0) {
        echo $i . " - Fizz Buzz <br/>";
    } else if($i % 3 === 0) {
        echo $i . " - Fizz <br/>";
    } else if ($i % 5 === 0 ) {
        echo $i . " - Buzz <br/>";
    }
}

//For Each Loop
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}

echo count($clientes);

for ($i=0; $i < count($clientes) ; $i++) { 
    echo $clientes[$i] . "<br>";
}


include 'includes/footer.php';