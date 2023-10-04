<?php
/*
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

$n = 4;
echo "<h1>Practica 2</h1>";
if ($n > 0){
    echo $n . " Es un numero positivo <br>";
}

if ($n > 1 && $n < 10){
    echo $n." El número ingresado es mayor a 1 y menor a 10 <br>";
}

if ($n <= 2 || $n >= 10){
    echo $n . " El número ingresado es mayor o igual a 10 o menor a 2 <br>";
} else {
    echo "El numero no pudo ser validado <br>";
}

$numero1 = 7; $numero2 = 7;

if($numero1 > $numero2){
    //mostrar suma y resta
    echo "La suma de los dos numeros es de: ".$numero1 + $numero2. "<br>La resta de los dos mismos numeros es de: ".$numero1 - $numero2;
} else if($numero2 > $numero1){
    //muestro multiplicacion y division
    echo "La multiplicacion de los numeros es de: ". $numero1 * $numero2."<br> La division es de: ". $numero2/$numero1. " y el resto es de ".$numero2%$numero1;
} else if($numero1 == $numero2){
    echo "Los números ingresados son iguales";
}*/

print "<h2> DE 0 A 20</h2>";
for($i=0; $i <= 20; $i++) { 
    print "$i, ";
}
echo "<br>";


print "<h2> DE 20 A 0</h2>";
for($j = 20; $j >= 0; $j--){
    print "$j, ";
}
echo "<br>";
print "<h2> NUMEROS PARES</h2>";
$i = 0;
while ($i <= 20){
    if($i%2 == 0){
        print "$i, ";
    }
    $i++;
}

print "<br>";
print "<h2>NUMEROS IMPARES</h2>";
$i = 0;
while ($i <= 20){
    if ($i%2==1){
        print "$i, ";
    }
    $i++;
}

print "<br>";
print "<h2>SUMA</h2>";
$i=0; $suma=0;
while ($i<=20){
    print "$i ";
    $suma = $suma + $i;
    $i++;
}
print "= $suma";

print "<br>";
print "<h2>SUMA DE PARES</h2>";
$i=0; $suma=0;
while($i<=20){
    if($i%2==0){
        $suma=$suma+$i;
    }
}


?>
