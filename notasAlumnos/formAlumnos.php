<?php

if (!isset($_GET["nombre"]) && isset($_GET["nota"])) {
    echo "Faltan ingresar el nombre";

} elseif (!isset($_GET["nota"]) && isset($_GET["nombre"])) {
    echo "Falta ingresar la nota";

} else{
    $nombre = $_GET["nombre"];
    $nota = $_GET["nota"];

    if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
        if ($nota >= 0 && $nota <= 2) {
            echo "$nombre, muy deficiente";
        } elseif ($nota >= 3 && $nota <= 5) {
            echo "$nombre, Insuficiente";
        } elseif ($nota >= 6 && $nota <= 7) {
            echo "$nombre, Bien";
        } elseif ($nota >= 8 && $nota <= 9) {
            echo "$nombre, Notable";
        } else {
            echo "$nombre, Sobresaliente";
        }
    } else {
        print "El dato ingresado no es una nota válida";
    }
}
?>
