<?php


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
        print $i. " ";
        $suma+=$i;
    }
    $i++;
}
print "= $suma";

//Tarea clase 6

print "<br> <h2>FACTORIAL</h2>";
$fact = 8;
$suma = 1;
for ($i=1 ; $i < $fact ; $i++ ) { 
    $suma *= $i;
}

print "8! = $suma";


//Tarea clase 7
print "<br> <h2>ARRAYS</h2>" ;
print "<p>a) Almacenar en un array los 10 primeros números pares y mostrarlos en
pantalla uno debajo del otro </p> ";
$array1 = [];
$i = 0;
$n = 0;
while ($i < 10){
    if ($n%2==0 && $n != 0){
        array_push($array1, $n);
        $i++; //$i lo uso como condicion de corte [$i - 1]
    }
    $n++;
}
print_r($array1);

echo "<br>";
echo "<br>";
////////////////////
print "b) Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1. Mostrar
el esquema del array con print_r().";
echo "<br>";

$array2 = ["Pedro", "Ana", 34, 1];
print_r($array2);

/////////////////////////
echo "<br>";
print "c) Crear un array asociativo e introducir los siguientes valores: ";
echo "<br>";
echo "<br>";

$array3 = [
    "Nombre: " => "Pedro",
    "Apellido: " => "Torres",
    "Dirección: "=> " Av. Mayo 3703",
    "Teléfono: " => "1122334455"
];
print_r($array3);
echo "<br>";
echo "<br>";
/////////////////////////
print " d) Crear un array introduciendo las ciudades";
echo "<br>";
echo "<br>";
$array4 = [ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
$fin = count($array4); $i = 0;
while($i < $fin) {
    echo "La ciudad con el índice ".$i. " tiene el nombre " .$array4[$i]."<br>";
    $i++;
}
echo "<br>";
echo "<br>";
///////////////////////////////
print "Repite el ejercicio anterior pero ahora con un array asociativo con los índices <br><br>";
$array5 = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Angeles",
    "CCG" => "Chicago"
];
foreach($array5 as $i => $ciudades){
    echo "El índice de $ciudades es $i <br>";
}

echo "<br>";
echo "<br>";


//FUNCIONESSSS
echo "<h2> Funciones </h2>";
//a
function calcularCuadrado($lado){
    $superficie = 4 * $lado;
    $perimetro = $lado * $lado;

    echo "El perimetro del cuadrado de lado $lado es de $perimetro <br>";
    echo "La superficie del cuadrado de lado $lado es de $superficie <br>";
}

calcularCuadrado(5);
echo "<br>";

//b
function transformarMayusculas($texto){
    echo strtoupper($texto) . "<br>";
}

function transformarMinusculas($texto){
    echo strtolower($texto) . "<br>";
}

transformarMayusculas("Hola Como estas?");
transformarMinusculas("HOla QUE tal?");

//c
function diasDelMes($mes) {
    if ($mes == 2) {
        return "Febrero generalmente tiene 28 días o 29 en un año bisiesto.";
    } elseif (in_array($mes, [4, 6, 9, 11])) {
        return "30 días";
    } elseif (in_array($mes, [1, 3, 5, 7, 8, 10, 12])) {
        return "31 días";
    } else {
        return "Número de mes no válido.";
    }
}
$n = 4;
echo "El mes $n tiene: " . diasDelMes($n);
echo "<br>";
echo "<br>";

//d
function esPalindromo($cadena){
    $cadena = strtolower($cadena); //las hago minusculas

    //borrar espacios
    $cadena = preg_replace("/[^a-zA-Z0-9]/", "", $cadena);

    if ($cadena == strrev($cadena)) {
        return true;
    } else{
        return false;
    }
}
$cadena = "Somos o no somos";

if (esPalindromo($cadena)){
    echo  $cadena ." Es Palindromo";
}else{
    echo $cadena ." No es palindromo";
}

?>