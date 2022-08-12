<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $app = $_POST['app'];
    $apm = $_POST['apm'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


    $query = "INSERT INTO usuarios (Nombres, ApellidoP, ApellidoM, Correo, Usuario, Contrasena) 
              VALUES ('$nombre', '$app', '$apm', '$correo', '$usuario', '$contrasena')";

    //Verificacion que no se repita el correo
    $verificar = mysqli_query($conexion, "SELECT * FROM usuarios where Correo = '$correo' ");

    if(mysqli_num_rows($verificar) > 0 ){
        echo '
            <script>
                alert("Este correo ya ha sido registrado, inicie sesión o intente con otro");
                window.location = "../../iniciar.php";
            </script>
        ';
        exit();
    }

    //verificar usuario
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where Usuario = '$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0 ){
        echo '
            <script>
                alert("Este usuario ya esta registrado, inicie sesión o intente con otro");
                window.location = "../../iniciar.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
            <script>
            alert("Usuario creado correctamente");
            window.location = "../../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
            alert("Inténtalo nuevamente usuario no creado);
            window.location = "../../iniciar.php";
            </script>
         ';
    }

    mysqli_close($conexion);

?>