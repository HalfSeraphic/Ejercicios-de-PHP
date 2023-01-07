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
var_dump($productos);

echo "</pre>";







include 'includes/footer.php';