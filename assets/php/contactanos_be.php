<?php

    include 'conexion_be.php';

    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $nump = $_POST['phone'];
    $mess = $_POST['message'];
    


    $query = "INSERT INTO contactanos (NombreCom, Correo, Telefono, Mensage) 
              VALUES ('$nombre', '$correo', '$nump', '$mess')";

    $contac = mysqli_query($conexion, $query);

    if ($contac) {
        echo '
            <script>
            alert("Mensaje enviado nos contactaremos lo mas pronto posible con usted");
            window.location = "../../contacto.html";
            </script>
        ';
    }else{
        echo '
            <script>
            alert("Mensaje no enviado intente nuevamente");
            window.location = "../../contacto.html";
            </script>
        ';
    }

    mysqli_close($conexion);

 ?>