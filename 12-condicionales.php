<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}


if($autenticado|| $admin) { //Verifica que al menos una condicion se cumpla
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}

if($autenticado && $admin) { //Verifica que varias condiciones se cumplan
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}

//If anidados... (hay dos if, uno dentro de otro)
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ],
];

echo "<br>";

if(!empty($cliente)) { //Si hay un signo de exclamacion antes revisa lo contrario
    echo "El arreglo de cliente no esta vacio";

    if ($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible";
    } else {
        echo "No hay saldo";
    }
    
} else {
    echo "El arreglo de cliente esta vacio";
}


echo "<br>";
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'premium'){ //Esto da una segunda comprobacion para cumplir esta si la primera no se pudo cumplir
    echo 'El cliente es premium';
} else {
    echo 'No hay cliente definido o no tiene saldo';
}

//Switch
echo "<br>";
$tecnologia = 'JavaScript';

switch ($tecnologia) {
    case 'PHP':
        echo 'php, un excelente lenguaje';
        break;

    case 'JavaScript':
        echo 'Lenguiaje hecho para la web';
        break;
    case 'HTML':
        echo 'No se considera lenguaje de programacion';
        break;    


    default:
        echo 'Algun lenguaje que no se cual es';
        break;
}



include 'includes/footer.php';