<?php include 'includes/header.php';

$cliente = [];
$clientes = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
];

//Empty para revisar si un arreglo esta o no vacio
var_dump( empty($cliente));
var_dump( empty($clientes));
var_dump( empty($clientes3)); //Este dara false pues si tiene informacion

// Isset - Revisa si un arreglo esta creado o una propiedad esta definidad
echo "<br>";
var_dump(isset($clientes4)); //Dara false pues no existe
var_dump(isset($clientes3));
var_dump(isset($clientes));
var_dump(isset($cliente));

var_dump(isset($cliente['nombre']));//Revisara si existe la propiedad


include 'includes/footer.php';