<?php

//punto 1

echo 'Hola Mundo!';
echo'<br>';

//Punto 2
$asignar = 'Hola Mundo!';

echo $asignar;
echo'<br>';

//Punto 3
$num1 = 4;
$num2 = 6;
$suma = $num1 +$num2;
$resta = $num2 - $num1;
$multi = $num1 * $num2;
$div = $num2  / $num2;
$resto = $num2 % $num1;
echo 'la suma de ', $num1 ,' y ',$num2, ' = ',$suma,'<br>';
echo 'la resta de ', $num2 ,' y ',$num1, ' = ',$resta,'<br>';
echo 'la multiplicacion de ', $num1 ,' y ',$num2, ' = ',$multi,'<br>';
echo 'la division entera de ', $num2 ,' y ',$num2, ' = ',$div,'<br>';
echo 'el resto de ', $num2 ,' y ',$num1, ' = ',$resto,'<br>';

//punto 4
echo '<br>';
echo '<br>';
$celcius = 20;
$faren = ($celcius * 1.8) + 32;
echo'PASAR GRADOS DE CELCIUS A FAHRENHEIT';
echo '<br>';
echo $celcius,'°C =', $faren,'°F';

//Punto 5
echo '<br>';
echo '<br>';
echo 'Calcular el perimetro y el área de un rectángulo con base de 18cm y
altura 12cm: ';
$base = 18;
$altura = 12;
$perimetro = ($base * 2) + ($altura * 2);
$area = $base * $altura;
echo 'Perimetro: ',$perimetro,' area: ',$area;
echo '<br>';
echo 'perímetro y el área de un círculo dado que su radio es de
30cm: ';
$radio = 30;
$pi = 3.14;
$perimetro = 2 * $pi * $radio;
$area = $pi * ($radio * $radio);
echo 'Perimetro: ',$perimetro,' Area: ',$area;

?>
