<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url('img/BG_Login.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .form-container {
      background: rgba(240, 233, 233, 0.432);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    .form-container h1 {
      margin-bottom: 20px;
      font-size: 28px;
      color: #007bff;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .btn-custom {
      background-color: #007bff;
      border: none;
      color: white;
      padding: 10px 20px;
      margin-top: 10px;
      width: 100%;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
    .error {
      color: red;
      display: none;
    }
    .text-center {
      text-align: center;
    }
    .text-center button {
      background-color: #198104; /* Color de fondo del botón */
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none; /* Quita el subrayado */
      font-weight: bold; /* Resalta el texto */
    }
    .text-center button:hover {
      background-color: #1fa107; /* Color de fondo del botón al pasar el ratón */
    }
  </style>
</head>
<body>
  <main>
    <div class="form-container">
      <h1 class="text-center">Iniciar sesión</h1>
      <form id="login-form">
        <div class="form-group">
          <label for="user">Nombre de usuario</label>
          <input type="text" name="user" id="user" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn-custom">Iniciar sesión</button>
        <p class="error">Error al iniciar sesión</p>
      </form>
      <p class="text-center">
        ¿Todavía no tienes una cuenta? - 
        <button onclick="window.location.href='./index.html'" class="btn-register">Regístrate</button>
      </p>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>