<?php include 'includes/header.php';
$nombreCliente = "Juan Pablo";

echo strlen($nombreCliente); //Permite conocer extension y toma en cuenta espacios en blanco
var_dump($nombreCliente); //Similar arriba, es para validar formularios

//Eliminar espacios en blanco
$texto = trim($nombreCliente); //Corta espacios en blanco
echo strlen($texto);

//Convertirlo en mayusculas sin CSS
echo strtoupper($nombreCliente);

//Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 === $mail2); //Comprobacion que dara falso debido a la mayuscula
var_dump(strtolower($mail1) === strtolower($mail2)); //Aqui dara true debido a que normaliza ambos a mayusculas

echo str_replace("Juan", "J", $nombreCliente); //Busca una cadena de texto de una variable y la reemplaza por otra


include 'includes/footer.php';