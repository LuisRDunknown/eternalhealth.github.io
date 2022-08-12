<?php

    session_start();



    if (isset($_SESSION['usuario'])) {
        $bandera = true;
        header("location: index.php?ban=".$bandera); 
        echo $_SESSION['usuario'];
      
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stilo.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Que esperas inicia sesión</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Que esperas para formar parte de la familia</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de inicio de sesion y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="../Login/assets/php/iniciosesion_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="../Login/assets/php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombres">
                    <input type="text" name="app" placeholder="Apellido Paterno">
                    <input type="text" name="apm" placeholder="Apellido Materno">
                    <input type="text" name="correo" placeholder="Correo Electronico">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/scripts.js"></script>
</body>
</html>