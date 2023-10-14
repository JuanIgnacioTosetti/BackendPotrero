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
?>