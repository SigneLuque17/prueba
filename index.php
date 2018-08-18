<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <div class="img"></div>
<nav class="navbar">
  <h1>Facebook</h1>
  <form action="home.php">
    <input type="text" id="user-login"><label id="label-user-login" for="user-login">Correo electronico o telefono</label>
    <input type="text" id="user-login-password"><label id="label-user-password" for="user-login-password">Contraseña</label>
    <button id="btn-login">Iniciar sesion</button>
  </form>
</nav>

<div id="formulario">
  <h2>Registrate</h2>
  <form action="home.php">
    <input class="user-name" type="text" placeholder="Nombre">
    <input class="user-name" type="text" placeholder="Apellido"><br>
    <input class="user-credencial" type="mail" placeholder="Numero de celular o correo electronico"><br>
    <input class="user-credencial" type="password" placeholder="password"><br>
    <label for="date" style="font-size: 20px">Fecha de nacimiento</label><br>
    <input type="date" name="" id="date"><br>
    <div style="font-size: 20px">Genero</div>
    <input  id="genero-femenino" type="radio" name="genero"><label class="genero" for="genero-femenino">Mujer</label>
    <input  id="genero-masculino" type="radio" name="genero"><label class="genero" for="genero-masculino">Hombre</label><br>
    <button id="btn-registro" class="btn btn-success">Registrate</button>
  </form>
</div>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/controlador.js"></script>
</body>
</html>