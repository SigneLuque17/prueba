<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="main.js"></script>

</head>
<body>
    
        <nav class="navbar navbar-expand-lg bg-light ">
            <h2 style="color: #ffffff">Facebook</h2>
                    <input style="float: right;" class="form-control mr-sm-2" type="search" placeholder="Buscar en facebook" aria-label="Search">
        <!--             <a href=""><img src="img/profile.jpg"  class="rounded-circle" id="navbar-img-perfil-1"></a> -->
        </nav>

    <section id="seccion1">
        <img src="img/perfil.JPG" id="foto">
        <h1  id="txt-usuario" style="margin-left: 27%; color: #ffffff; bottom: -5px">Usuario</h1>
    </section>

    <section id="seccion2">
        <form class="contenedor1">
            <h3>Presentacion</h3>
            <div id="contenido">
                <?php
                    var_dump($_POST);
                ?>
                <p id="txt-nombre">Nombre</p>
                <p id="txt-password">contraseña</p>
                <p id="txt-mail">Correo electronico</p>
                <p id="txt-numero">numero de telefono</p>
                <p id="txt-pais">pais</p>
            </div>
        </form>
    </section>

</body>
</html>