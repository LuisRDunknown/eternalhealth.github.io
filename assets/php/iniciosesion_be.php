<?php
    session_start();
    include 'conexion_be.php';
    $bandera = 0;
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$correo'
    and Contrasena = '$contrasena'");
    
    $row = mysqli_fetch_assoc($validar_login);
        //var_dump($row['Nombres']);

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        $bandera=1;
       header("location: ../../index.php?id=".$row['ID']."&nom=".$row['Nombres']."&app=".$row['ApellidoP']."&ban=".$bandera);
        //exit();
    }else{
        $bandera =0;
        echo '
        <script>
            alert("El usuario no existe, verifique los datos ingresados");
            window.location = "../../iniciar.php";
        </script>
    ';
   // exit();
    }


?>