<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <!-- Incluir Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Estilo para el fondo azul opaco */
        body {
            background-color: rgba(59, 130, 246, 0.8);
        }
        /* Estilo para el formulario */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Estilo para los espacios entre etiquetas y entradas */
        .form-container label {
            display: block;
            margin-bottom: 6px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #3182ce;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: #2c5282;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-blue-500 bg-opacity-50">
        <div class="form-container p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Registro de Nuevo Cliente</h1>
            <form action="registrarUss.php" method="post">
                <div class="mb-4">
                    <label for="nombres" class="block mb-2">Nombres:</label>
                    <input type="text" name="nombres" id="nombres" required class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="apellidos" class="block mb-2">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" required class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="telefono" class="block mb-2">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" required class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2">Contraseña:</label>
                    <input type="password" name="password" id="password" required class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="block mb-2">Confirmar Contraseña:</label>
                    <input type="password" name="confirm_password" id="confirm_password" required class="w-full px-3 py-2 border rounded-md">
                </div>
                <div>
                    <input type="submit" value="Registrar" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
