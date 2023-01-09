<?php include 'includes/header.php';

$productos = [
    [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
    ],
    [
    'nombre' => 'Television 24"',
    'precio' => 1000,
    'disponible' => true
    ],
    [
    'nombre' => 'Monitor curvo',
    'precio' => 1200,
    'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos, JSON_UNESCAPED_UNICODE); //Unicode lo convierte en texto general

$json = json_encode($productos);
$json_array = json_decode();
var_dump($json); //Convierte arreglo a string de javasecript
var_dump($json_array);
echo "</pre>";







include 'includes/footer.php';