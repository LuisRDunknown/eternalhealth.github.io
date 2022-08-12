<?php
require 'conexion_be.php';

    $peso = $_GET['Peso'];
    $alt = $_GET['Altura'];
    $sex = $_GET['Sexo'];
    $altura = ($alt / 100);
    $IMC = ($peso / ($altura * $altura));

    $IMC = number_format($IMC, 2);

/*-----------------------------------------------------------------------------------------------------------*/
    if($sex == 'M')
    {
        $sexo = "Masculino";
    }
    else
    {
        $sexo = "Femenino";
    }
/*-----------------------------------------------------------------------------------------------------------*/
    if ($IMC < 18.50) {
        $IMCDATO = "insert into datosimc (Peso, Altura, Sexo, IMC, Categoria) 
        values (".$peso.",".$altura.",'".$sexo."',".$IMC.",'PESO BAJO');";
?>
        <link rel="stylesheet" type="text/css" href="../css/estiloimc.css">
        <div class="container">
            <div class="section">
                <div class="blog-post">
                <h1 class="blog-title">Eternal Health</h1>
                    <p class="blog-content">
                        En base a los resultados obtenidos: </p>
                        <p>Esta calculadora proporciona el IMC y la correspondiente categoría de 
                            nivel de peso según el IMC.</p>

                        <p>Peso: <b><?php printf ($peso) ?></b> kilogramos</p>
                        <p>Altura: <b><?php printf ($altura) ?></b> metros</p>
                        <p>SIMC: <b><?php printf ($IMC) ?></b></p>
                        <p>Categoria: <b>BAJO DE PESO</b></p>
                        <p>Esto significa que esta en la categoria de peso bajo, 
                            tomando en cuenta su peso y estatura, se le recomienda comer de manera 
                            adecuada para evitar posibles enfermedades de lo contrario consulte a un 
                            especialista para su cuidado</p>

                            <div class="blog-post">
            <h1 class="blog-title">Tabla de clasificación</h1>

            <p class="blog-content">El IMC se utiliza como herramienta de detección para 
                identificar los posibles problemas de peso en adultos. Sin embargo, para 
                determinar si el exceso de peso es un riesgo para la salud, un especialista 
                tendrá que realizar nuevas evaluaciones</p>

            <center>
            <table id="TableKey" border="3" width="40%" cellspacing="0" cellpadding="2">
                <tbody>
                <tr>
                <td class="strongtext"><strong>Categoria</strong></td>
                <td class="strongtext"><strong>IMC</strong></td>
                </tr>
                <tr>
                <td class="AltRow1">Peso bajo</td>
                <td class="AltRow1">Menos de 18.5</td>
                </tr>
                <tr>
                <td class="AltRow2">Normal</td>
                <td class="AltRow2">18.5 – 24.9</td>
                </tr>
                <tr>
                <td class="AltRow1">Sobrepeso</td>
                <td class="AltRow1">25.0 – 29.9</td>
                </tr>
                <tr>
                <td class="AltRow2">Obesidad</td>
                <td class="AltRow2">Más de 30.0</td>
                </tr>
                </tbody>
                </table>
                </center>
        
                            </div>

                            <h1 class="blog-title">Recomendación</h1>
                        <div>
                            <center>
                            <iframe src="../PDF/PESO_BAJO.pdf"></iframe>
                            </center>
                        </div>
                </div>
            </div>
        </div>  
        <footer>
            <h1>ETERNAL HEALTH</h1>
            <p>Derechos Reservados &copy; 2022</p>
        </footer>  
<?php

    }
/*-----------------------------------------------------------------------------------------------------------*/ 
    else if ($IMC >= 18.50 && $IMC <= 24.99) {
        $IMCDATO = "insert into datosimc (Peso, Altura, Sexo, IMC, Categoria) 
        values (".$peso.",".$altura.",'".$sexo."',".$IMC.",'NORMAL');";
        ?>
            <link rel="stylesheet" type="text/css" href="../css/estiloimc.css">
        <div class="container">
            <div class="section">
                <div class="blog-post">
                <h1 class="blog-title">Eternal Health</h1>
                    <p class="blog-content">
                        En base a los resultados obtenidos: </p>
                        <p>Esta calculadora proporciona el IMC y la correspondiente categoría de 
                            nivel de peso según el IMC.</p>

                        <p>Peso: <b><?php printf ($peso) ?></b> kilogramos</p>
                        <p>Altura: <b><?php printf ($altura) ?></b> metros</p>
                        <p>IMC: <b><?php printf ($IMC) ?></b></p>
                        <p>Categoria: <b>NORMAL</b></p>
                        <p>Su IMC indica que su peso se encuentra dentro de o aceptable o normal, 
                            mantener su peso de forma regular puede reducir problemas de la salud y en 
                            ocaciones puede mejorar aspectos personales en su dia a dia.</p>

                            <div class="blog-post">
            <h1 class="blog-title">Tabla de clasificación</h1>

            <p class="blog-content">El IMC se utiliza como herramienta de detección para 
                identificar los posibles problemas de peso en adultos. Sin embargo, para 
                determinar si el exceso de peso es un riesgo para la salud, un especialista 
                tendrá que realizar nuevas evaluaciones</p>

            <center>
            <table id="TableKey" border="3" width="40%" cellspacing="0" cellpadding="2">
                <tbody>
                <tr>
                <td class="strongtext"><strong>Categoria</strong></td>
                <td class="strongtext"><strong>IMC</strong></td>
                </tr>
                <tr>
                <td class="AltRow1">Peso bajo</td>
                <td class="AltRow1">Menos de 18.5</td>
                </tr>
                <tr>
                <td class="AltRow2">Normal</td>
                <td class="AltRow2">18.5 – 24.9</td>
                </tr>
                <tr>
                <td class="AltRow1">Sobrepeso</td>
                <td class="AltRow1">25.0 – 29.9</td>
                </tr>
                <tr>
                <td class="AltRow2">Obesidad</td>
                <td class="AltRow2">Más de 30.0</td>
                </tr>
                </tbody>
                </table>
                </center>
        
                            </div>

                            <h1 class="blog-title">Recomendación</h1>
                        <div>
                            <center>
                            <iframe src="../PDF/PESO_NORMAL.pdf"></iframe>
                            </center>
                        </div>
                </div>
            </div>
        </div>  
        <footer>
            <h1>ETERNAL HEALTH</h1>
            <p>Derechos Reservados &copy; 2022</p>
        </footer> 
        <?php
    }
 /*-----------------------------------------------------------------------------------------------------------*/
    else if ($IMC >= 25 && $IMC <= 29.99) {
        $IMCDATO = "insert into datosimc (Peso, Altura, Sexo, IMC, Categoria) 
        values (".$peso.",".$altura.",'".$sexo."',".$IMC.",'SOBREPESO');";
        ?>
            <link rel="stylesheet" type="text/css" href="../css/estiloimc.css">
        <div class="container">
            <div class="section">
                <div class="blog-post">
                <h1 class="blog-title">Eternal Health</h1>
                    <p class="blog-content">
                        En base a los resultados obtenidos: </p>
                        <p>Esta calculadora proporciona el IMC y la correspondiente categoría de 
                            nivel de peso según el IMC.</p>

                        <p>Peso: <b><?php printf ($peso) ?></b> kilogramos</p>
                        <p>Altura: <b><?php printf ($altura) ?></b> metros</p>
                        <p>IMC: <b><?php printf ($IMC) ?></b></p>
                        <p>Categoria: <b>SOBREPESO</b></p>
                        <p>Esto significa que esta en la categoria de sobrepeso, 
                            tomando en cuenta su peso y estatura, se le recomienda comer de manera 
                            adecuada para evitar posibles enfermedades de lo contrario consulte a un 
                            espcialista para el cuidado de su salud, considere realizar actividades fisicas y 
                            de lo contrio si ya lo hace consuma alimentos saludables que no contengan calorias</p>

                            <div class="blog-post">
            <h1 class="blog-title">Tabla de clasificación</h1>

            <p class="blog-content">El IMC se utiliza como herramienta de detección para 
                identificar los posibles problemas de peso en adultos. Sin embargo, para 
                determinar si el exceso de peso es un riesgo para la salud, un especialista 
                tendrá que realizar nuevas evaluaciones</p>

            <center>
            <table id="TableKey" border="3" width="40%" cellspacing="0" cellpadding="2">
                <tbody>
                <tr>
                <td class="strongtext"><strong>Categoria</strong></td>
                <td class="strongtext"><strong>IMC</strong></td>
                </tr>
                <tr>
                <td class="AltRow1">Peso bajo</td>
                <td class="AltRow1">Menos de 18.5</td>
                </tr>
                <tr>
                <td class="AltRow2">Normal</td>
                <td class="AltRow2">18.5 – 24.9</td>
                </tr>
                <tr>
                <td class="AltRow1">Sobrepeso</td>
                <td class="AltRow1">25.0 – 29.9</td>
                </tr>
                <tr>
                <td class="AltRow2">Obesidad</td>
                <td class="AltRow2">Más de 30.0</td>
                </tr>
                </tbody>
                </table>
                </center>
        
                            </div>

                            <h1 class="blog-title">Recomendación</h1>
                        <div>
                            <center>
                            <iframe src="../PDF/SOBREPESO.pdf"></iframe>
                            </center>
                        </div>
                </div>
            </div>
        </div>  
        <footer>
            <h1>ETERNAL HEALTH</h1>
            <p>Derechos Reservados &copy; 2022</p>
        </footer>  
        <?php
    }
 /*-----------------------------------------------------------------------------------------------------------*/
   else {
    $IMCDATO = "insert into datosimc (Peso, Altura, Sexo, IMC, Categoria) 
        values (".$peso.",".$altura.",'".$sexo."',".$IMC.",'OBESIDAD');";
        ?>
            <link rel="stylesheet" type="text/css" href="../css/estiloimc.css">
        <div class="container">
            <div class="section">
                <div class="blog-post">
                <h1 class="blog-title">Eternal Health</h1>
                    <p class="blog-content">
                        En base a los resultados obtenidos: </p>
                        <p>Esta calculadora proporciona el IMC y la correspondiente categoría de 
                            nivel de peso según el IMC.</p>

                        <p>Peso: <b><?php printf ($peso) ?></b> kilogramos</p>
                        <p>Altura: <b><?php printf ($altura) ?></b> metros</p>
                        <p>IMC: <b><?php printf ($IMC) ?></b></p>
                        <p>Categoria: <b>SOBREPESO</b></p>
                        <p>Esto significa que esta en la categoria de sobrepeso, 
                            tomando en cuenta su peso y estatura, se recomienda 
                            consulta con un profesional ya que la categoria de peso 
                            morbido refiere que se puede contraer muchas mas enfermedades 
                            y en casos especificos pueden llegar a ser hasta mortales </p>


                            <div class="blog-post">
            <h1 class="blog-title">Tabla de clasificación</h1>

            <p class="blog-content">El IMC se utiliza como herramienta de detección para 
                identificar los posibles problemas de peso en adultos. Sin embargo, para 
                determinar si el exceso de peso es un riesgo para la salud, un especialista 
                tendrá que realizar nuevas evaluaciones</p>

            <center>
            <table id="TableKey" border="3" width="40%" cellspacing="0" cellpadding="2">
                <tbody>
                <tr>
                <td class="strongtext"><strong>Categoria</strong></td>
                <td class="strongtext"><strong>IMC</strong></td>
                </tr>
                <tr>
                <td class="AltRow1">Peso bajo</td>
                <td class="AltRow1">Menos de 18.5</td>
                </tr>
                <tr>
                <td class="AltRow2">Normal</td>
                <td class="AltRow2">18.5 – 24.9</td>
                </tr>
                <tr>
                <td class="AltRow1">Sobrepeso</td>
                <td class="AltRow1">25.0 – 29.9</td>
                </tr>
                <tr>
                <td class="AltRow2">Obesidad</td>
                <td class="AltRow2">Más de 30.0</td>
                </tr>
                </tbody>
                </table>
                </center>
        
                            </div>

                            <h1 class="blog-title">Recomendación</h1>
                        <div>
                            <center>
                            <iframe src="../PDF/OBESIDAD.pdf"></iframe>
                            </center>
                        </div>
                </div>
            </div>
        </div>  
        <footer>
            <h1>ETERNAL HEALTH</h1>
            <p>Derechos Reservados &copy; 2022</p>
        </footer> 
        </body>
        <?php
   }
/*-----------------------------------------------------------------------------------------------------------*/
if(mysqli_query($conexion, $IMCDATO)){
    
}else{
    echo "No se pudieron guardar los datos...";
} 
?>