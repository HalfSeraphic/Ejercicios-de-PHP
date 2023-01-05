<?php include 'includes/header.php';

//In_array - buscar elementos en un arreglo
$carrito = ['tablet', 'computadora', 'television'];

var_dump(in_array('tablet', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1, 5, 3, 9, 12, 2); 
sort($numeros); //Esto ordena de menor a mayor
rsort($numeros); //Este ordena de menor a mayor

echo "<pre>";
var_dump($numeros);
echo "<pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente); //Ordena por los valores mostrando primero numeros y luego alfabetico
ksort($cliente); //Ordena segun llaves por alfabetico
krsort($cliente); //Igual que lo anterior pero al reves
arsort($cliente); //Ordena por valores, z primero


echo "<pre>";
var_dump($cliente);
echo "<pre>";



include 'includes/footer.php';