<?php
    echo $_GET["nombre"];

if ($_GET["nombre"] == "Juan" && $_GET["password"] == 1234){
    print "<br> Se ingreso correctamente";
} else { 
    print "<br> Los datos ingresados son incorrectos";
}