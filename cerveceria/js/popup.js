function openPopup() {
    document.getElementById('loginPopup').style.display = 'block';
}

function closePopup() {
    document.getElementById('loginPopup').style.display = 'none';
}

function validateForm() {
    // Aquí puedes agregar lógica de validación del lado del cliente si es necesario
    // Por ejemplo, verificar que los campos no estén vacíos, etc.

    // Luego, puedes redirigir al usuario a admin.php si los datos son correctos
    var nombre = document.getElementById('nombre').value;
    var password = document.getElementById('password').value;

    // Ejemplo de verificación de datos (puedes cambiar esto según tus necesidades)
    if (nombre === 'Juan' && password === '1234') {
        // Redirige al usuario a admin.php
        window.location.href = './login/crud/index.html';
        return false; // Evita que el formulario se envíe de forma predeterminada
    }

    // Si los datos no son correctos, puedes mostrar un mensaje de error o hacer otra lógica
    alert('Usuario o contraseña incorrectos');
    return false;
}