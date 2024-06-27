<?php
// Incluye la clase de conexión
require_once 'conexion.php';

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verifica que las contraseñas coincidan
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    // Crea una instancia de la clase de conexión
    $db = new conexion('Clientes');

    // Ejecuta el procedimiento almacenado para insertar el cliente
    $result = $db->ExecuteStoredProc('InsertarCliente', [$nombres, $apellidos, $telefono, $email, $password]);

    // Verifica si la inserción fue exitosa
    if ($result !== false) {
        // Redirige al usuario a la página de éxito
        header("Location: registroUss.php");
        exit();
    } else {
        echo "Error al insertar el cliente.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
