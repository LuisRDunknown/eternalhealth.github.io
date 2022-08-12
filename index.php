<?php

if(isset($_GET['ban'])){

    $ban = $_GET['ban'];
    $nom = $_GET['nom'];
    $app = $_GET['app'];
   // var_dump($_GET['ban']);
   // var_dump($_GET['nom']);
};
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Health</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/estilos.css">

    <meta name = "theme-color" content="aqua">

        <!-- Primary Meta Tags -->
    <title>ETERNAL HEALTH</title>
    <meta name="title" content="ETERNAL HEALTH">
    <meta name="description" content="Es una aplicación que ayuda a evitar o controlar los problemas ocasionados por la obecidad.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eternalhealth.github.io">
    <meta property="og:title" content="ETERNAL HEALTH">
    <meta property="og:description" content="Es una aplicación que ayuda a evitar o controlar los problemas ocasionados por la obecidad.">
    <meta property="og:image" content="https://eternalhealth.github.io/assets/img/meta.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eternalhealth.github.io">
    <meta property="twitter:title" content="ETERNAL HEALTH">
    <meta property="twitter:description" content="Es una aplicación que ayuda a evitar o controlar los problemas ocasionados por la obecidad.">
    <meta property="twitter:image" content="https://eternalhealth.github.io/assets/img/meta.jpg">
</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="logo">
                <h2 class="nav__titler">ETERNAL HEALTH</h2>
            </div>
               <ul class="nav__link nav__link-menu">
            <?php 
              if(isset($ban)){   
              
                echo '<p>HOLA</p>';      
                echo $nom;
                echo '<a href="./assets/php/cerrar_sesion_ac.php" class="nav__links">Cerrar Sesión</a>';
                
              }else
              {

                 echo '<li class="nav__items">';
                  echo '<a href="./iniciar.php" class="nav__links">Iniciar Sesión</a>';
                 echo '</li>';

              }?>
            
              
               
                <li class="nav__items">
                    <a href="./contacto.html" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="./blog.html" class="nav__links">Blog</a>
                </li>
                <li class="nav__items">
                    <a href="./IMC.html" class="nav__links">Calcular IMC</a>
                </li>

                <img src="assets/img/close.svg" alt="" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="assets/img/menu.svg" alt="" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Recorramos juntos esta aventura</h1>
            <p class="hero__paragraph">Cuando la alimentación es mala, la medicina no funciona. Cuando la alimentación es buena, la medicina no es necesaria </p>
            <a href="Iniciodesesion/index.php" class="cta">Comienza la aventura</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué es Eternal Health?</h2>
            <p class="about__paragraph">A continuacion los descubriras...</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./assets/img/software.svg" alt="" class="about__icon">
                    <h3 class="about__title">Software</h3>
                    <p class="about__paragraph1">El desarrollo de un software que intente a solventar un problema de la socieda el que se decidio
                        con un largo tiempo de estudio del entorno.</p>
                </article>

                <article class="about__icons">
                    <img src="./assets/img/heart.svg" alt="" class="about__icon">
                    <h3 class="about__title">Problematica</h3>
                    <p class="about__paragraph1">La problematica en el que el software va enfocada es en la obesidad y sus enfermedades que derivan de ella ya que no es un problema a nivel entidad si no que se trata de un problema de nivel mundial.</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledge__text">
                    <h2 class="subtitle">¿Qué es la obesidad?</h2>
                    <p class="knowledge__paragraph">La obesidad es una enfermedad compleja que consiste en tener una cantidad excesiva de grasa corporal. La obesidad no es solo un problema estético. Es un problema médico que aumenta el riesgo de enfermedades y problemas de salud, como enfermedades cardíacas, diabetes, presión arterial alta y determinados tipos de cáncer.</p>
                </div>
                <figure class="knowledge__picture">
                    <img src="./assets/img/img5.jpg" alt="" class="knowledge__img">
                </figure>
            </div>
        </section>
        <br><br><br><br><br>
        <center>
<h2 class="nav__titler">PRICIPALES ENFERMEDADES CAUSADAS POR LA OBECIDAD</h2>
</center><br>
        <section class="testimony">
            <div class="testimony__container container">
                <img src="./assets/img/leftarrow.svg" alt="" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body-show" data-id="1">
                    <div class="testimony__text">
                        <h2 class="subtitle">Hipertensión <span class="testimony__course">50,000 muertes al año en México</span></h2>
                         <p class="testimony__review">Tener más peso de lo normal va a provocar que la tensión suba mucho más de la cuenta. La hipertensión debe ser tratada rápidamente ya que de lo contrario puede causar problemas graves de salud tales como ataques al corazón o derrames cerebrales. 
                            Una buena alimentación es clave a la hora de poder bajar de peso de una manera gradual y mantener unos buenos niveles de tensión arterial.</p>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./assets/img/Hipertencion.jpg" alt="" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__text">
                        <h2 class="subtitle">Problemas del Corazón <span class="testimony__course"> 33,000 a 150,000 muertes al año en México</span></h2>
                        <p class="testimony__review">Tener más kilos de los deseados va a provocar que la persona tenga muchas más probabilidades de tener problemas de corazón. 
                            Los ataques al corazón y los derrames cerebrales son bastante comunes entre aquellas personas que padecen sobrepeso y tienen menos de 45 años. </p>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./assets/img/pcora.jpg" alt="" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__text">
                        <h2 class="subtitle">Diabetis <span class="testimony__course">80,000 muertes por año en México</span></h2>
                        <p class="testimony__review">Una de las consecuencias más habituales entre las personas que padecen obesidad es el desarrollo de la diabetes de tipo 2. 
                            Es rara la persona que tiene sobrepeso y no tiene problemas de azúcar en la sangre. Los expertos aconsejan por tanto el bajar de peso y tener unos niveles de azúcar en la sangre que sean óptimos. </p>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./assets/img/diabetes.jpg" alt="" class="testimony__img">
                    </figure>
                </section>

                
                <img src="./assets/img/rightarrow.svg" alt="" class="testimony__arrow" id="next">

            </div>
        </section><br><br><br>

        <section class="questions__offer">
            <h2 class="subtitle">¿Y tú estas tienes vida saludable?</h2>
            <p class="questions__copy">Si no que esperas para mejorar tu estado de vida saludable pero recuerda "La salud no lo es todo pero sin ella,
                todo lo demás es nada"
            </p>
            <a href="#" class="cta">ETERNAL HEALTH</a>
        </section><br><br>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">ETERNAL HEALTH</h2>
                <ul class="nav__link nav__link--footer">
                    
                    <li class="nav__items">
                        <a href="./index.php" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="./iniciar.php" class="nav__links">Inicio de Sesión</a>
                    </li>
                    <li class="nav__items">
                        <a href="./contacto.html" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="./blog.html" class="nav__links">Blog</a>
                    </li>
                    <li class="nav__items">
                    <a href="./IMC.html" class="nav__links">Calcular IMC</a>
                </li>
                </nav>

                  <!--  <form class="footer__form" action="https://formspree.io/f/myyvgedw"
                    method="POST">
                    <h2 class="footer__newsletter">Suscribete a esta familia</h2>
                    <div class="footer__inputs">
                        <input type="email" placeholder="Email" class="footer__input" name="email">
                        <input type="submit" value="Registrate" class="footer__submit">
                    </div>
                </ul>
            </form>-->
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./assets/img/facebook.svg" alt="" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos Reservados &copy; ETERNAL HEALTH</h3>
        </section>
    </footer>

    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/menu.js"></script>
</body>
</html>