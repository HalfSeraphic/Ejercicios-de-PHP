<?php include 'includes/header.php';

$numero1 = 30;
echo $numero1; //Aqui no lo va a mostrar pues  lo agrega posterior a la linea de codidog


$numero1++;
echo $numero1;

echo ++$numero1; //Aqui igual lo imprime con la suma

$numero2 = 30;
$numero2--;
echo $numero2;
//En decrementos aplica exactamente las mismas reglas

$numero3 = 40;
$numero3 += 5; //Suma por la cantidad deseada
echo $numero3; 
include 'includes/footer.php';