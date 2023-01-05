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

//Add elmento al final del arreglo
array_push($carrito, "Audifonos");

//Ad al inicio
array_unshift($carrito, "SmartWatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array("Cliente1", "Cliente2", "Cliente3", "Cliente4");
echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';