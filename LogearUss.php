<?php
// Incluye la clase de conexión
require_once 'conexion.php';

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Crea una instancia de la clase de conexión
    $db = new conexion('Clientes');

    // Ejecuta el procedimiento almacenado para verificar las credenciales
    $result = $db->ExecuteStoredProc('LogearCliente', [$email, $password]);

    // Verifica el resultado del procedimiento almacenado
    if ($result !== false && !empty($result)) {
        $login_correcto = $result[0]->login_correcto;

        if ($login_correcto == 1) {
            // Iniciar sesión (ejemplo básico)
            session_start();
            $_SESSION['email'] = $email;

            // Redirige al usuario a x pagina
            header("Location: registroUSs.php");
            exit();
        } else {
            echo "Credenciales incorrectas.";
        }
    } else {
        echo "Error al intentar iniciar sesión.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
