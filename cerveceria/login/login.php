<?php
if ($_POST["nombre"] == "Juan" && $_POST["password"] == 1234) {
    // Redirige al usuario a ./crud/index.html
    header("Location: ./login/crud/index.html");
    exit(); // Asegura que el script se detenga después de la redirección
} else {
    
    echo 'Usuario o contraseña incorrectos';
}
?>
