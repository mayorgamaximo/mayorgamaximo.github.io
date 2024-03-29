<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxi cafeteria</title>
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://www.shareicon.net/data/256x256/2015/09/21/644139_pin_512x512.png">
</head>

<body class="contariner">


    <header>
        <img class="logo" src="https://img.freepik.com/vector-gratis/insignia-cafeteria-estilo-vintage_1176-95.jpg">
        <span class="visitas">

            <img src="https://cdn-icons-png.flaticon.com/256/38/38553.png" >
            
            <?php
                $servername = "localhost";
                $username = "phpmyadmin";
                $password = "RedesInformaticas";
                $dbname = "db_mayorga";
                $conexion = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT contador FROM visitas WHERE visitas.id = 1";
                $resultado = mysqli_query($conexion, $sql)  ;
                $contador = mysqli_fetch_assoc($resultado)['contador'];
                $contador = $contador + 1;

                $fechavisita = date("y/m/d");
                $sql = "UPDATE visitas SET contador = '$contador' WHERE visitas.id = 1";
                $sql = "UPDATE visitas SET fecha = '$fechavisita' WHERE visitas.id = 1";

                if (mysqli_query($conexion, $sql)) {
                $success = "El ingreso ha sido satisfactorio";
                } else {
                echo "Error de ingreso: " . mysqli_error($conexion);
                }
                
                echo $contador;
            ?>

        </span>

        <nav>
            <ul>
                <li class="zoom"><a href="#inicio">Productos destacados</a></li>
                <li class="zoom"><a href="#menu">Menu</a></li>
                <li class="zoom"><a href="#cursos">Cursos</a></l>
                <li class="zoom"><a href="#contactos">Contactos</a></li>
                
                <?php
                if($_SESSION["infosesion"] == "exito" ){
                    echo "<li class=\"zoom\"><a href=\"comentarios.php\">comentarios</a></li>";
                    echo "<li class=\"zoom\"><a href=\"logout.php\">cerrar sesion</a></li>";
                }else{
                    echo "<li class=\"zoom\"><a href=\"logins.php\">log in</a></li>";
                }
                ?>

            </ul>
        </nav>
    </header>

    <main>

        <div class="div-index">
            <h1 id="inicio" class="titulo"> Productos destacados </h1>

            <article class="articulos">

                <article>
                    <h2>Medialunas </h2>
                    <img class="imagen"
                        src="https://alicante.com.ar/uploads/recetas/2663_receta.jpg">

            </article>
                <article> 

                    <h2>Expresso</h2>
                    <img class="imagen"
                        src="https://www.mokasol.es/wp-content/uploads/2021/07/cafe-expreso-con-espuma-en-forma-de-corazon-800x530.jpg"
                        alt="">

                </article>

                <article>

                    <h2>frapuccino</h2>
                    <img class="imagen"
                        src="https://img-global.cpcdn.com/recipes/6f880ce00b6270cf/680x482cq70/frapuccino-light-o-no-foto-principal.jpg"
                        alt="">

                </article>

                <article>

                    <h2>Tostados</h2>
                    <img class="imagen"
                        src="https://cloudfront-us-east-1.images.arcpublishing.com/radiomitre/J3Q4RDR2HFCFFMWLNWR4CZSLIQ.jpg"
                        alt="">
                </article>

            </article>

        </div>


        <div class="div-index">
            <h1 id="menu" class="titulo">Menu</h1>
            <article class="menu">
                <img src="https://img.restaurantguru.com/r4ae-Cafe-Martinez-menu-2021-09-1.jpg">
            </article>
        </div>

        <div class="curso div-index">
            <h1 id="cursos" class="titulo">Cursos</h1>
            <iframe class="curso" width="560" height="315" src="https://www.youtube.com/embed/68HQXBw557k"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

       

    </main>

    <footer>

        <div class="contactos div-index">
        <h1 id="contactos" class="contacto">Contactos</h1>
        <h2 class="relleno-contacto">Numero de telefono: 11 xxxx xxxx</h2>
        <h2 class="relleno-contacto">Instagram: @maxi_mayorga</h2>
        <h2 class="relleno-contacto">Email: xxxxxxx@gmail.com</h2>
        </div>
        

        <div class="musica">

            <iframe src="https://open.spotify.com/embed/playlist/6P75RG9yKcgxUBeHUcccrv?utm_source=generator&theme=0" width="1000px" height="200px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

        </div>


    </footer>

</body>

</html>