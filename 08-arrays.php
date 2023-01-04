<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];
$carrito2 = array(); //Igual que arriba

var_dump($carrito); //Nos dice que tipo es
var_dump($carrito2);

//Este snippet es util para ver contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>"; //Esto nos da los resultados de una BD o o de un arreglo

//Accede a un elemento del array
echo $carrito[2]; //Asi se recorre una base de datos

$carrito[3] = "Nuevo producto..."; //Agrega un elemento nuevo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';