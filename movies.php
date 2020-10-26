<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link rel="icon" href="assets/img/icon.png">

    <!--Estilos-->
    <link rel="stylesheet" href="assets/style/style.css">
    <!--Estilos-->

    <!--Estilos Fuentes-->
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <!--Estilos Fuentes-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body>
    
       <!--Inicio nav-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.php"> Club Movie</a></label>
        <ul>
            <li><a class="active" href="index.php">Inicio</a></li>
            <li><a href="movies.php">Películas</a></li>
            <li><a href="contact.php">Contacto</a></li>
        </ul>
    </nav>
    <!--Fin nav-->
   


    
    <!--Title-->
    <h1 class="title">Películas</h1>


    <!--Contenido Principal-->
    <main class="main-container">

        <!--Contenedro para Cards-->
        <section class="section-cards">

            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.infobae.com/new-resizer/y0oxs9w1cLczBSjHvheoj8_w0yw=/420x630/filters:format(jpg):quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/FYN3APKW4ZDBBIE4C56NQEVSYQ.jpg" alt="Enola Holmes ">
                        <h4>Enola Holmes</h4>
                        <h3>Género: Aventura | Drama</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>

            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://1.bp.blogspot.com/-ViJByDk81Qo/Xx9s-enBpNI/AAAAAAAAFB4/WkSRgrLktIUwzEmB0trsLUzucNftjVM5ACLcBGAsYHQ/s1975/The%2BRental%2BPoster.jpg" alt="The Rental">
                        <h4>The Rental</h4>
                        <h3>Género: Terror | Suspenso</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>
           

            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/10/reprisal.jpg" alt="Represalia">
                        <h4>Represalia </h4>
                        <h3>Género: Acción | Crimen</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>


            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/09/el-diablo-a-todas-horas.jpg" alt="El diablo a todas horas">
                        <h4>El diablo a todas horas </h4>
                        <h3>Género: Crimen | Drama </h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>

            
            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/09/pacto-de-fuga.jpg" alt="Pacto de Fuga">
                        <h4>Pacto de Fuga </h4>
                        <h3>Género: Acción | Suspenso</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>


            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/10/hooking-up.jpg" alt="Terapia del amor">
                        <h4>Terapia del amor</h4>
                        <h3>Género: Comedia | Drama</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>

            
            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/10/vampires-vs-the-bronx.jpg" alt="Vampiros vs. el Bronx">
                        <h4>Vampiros vs. el Bronx</h4>
                        <h3>Género: Comedia | Terror</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>

            <section class="cards-container">
                <a href="#">
                    <article class="card">
                        <img src="https://www.cinecalidad.is/wp-content/uploads/2020/10/sextuplets.jpg" alt=" Sextillizos">
                        <h4>Sextillizos </h4>
                        <h3>Género: Comedia</h3>
                        <a class="more" href="#">Ver más</a>
                    </article>
                </a>
            </section>

        </section>
        <!--Contenedro para Cards-->


        <!--Contenedor search-->
        <section class="container-search">
            <section class="search">
                <form action="">
                    <input type="text" placeholder="Buscar...">
                    <br>
                    <input type="button" value="Buscar">
                </form>
            </section>
        </section>
        <!--Contenedor search-->

    </main>
    <!--Contenido Principal-->


    <!--Footer-->
    <footer class="footer">
        <section class="container-footer">
            <h3>Derechos Reservados &copy; 2020</h3>
        </section>
    </footer>
    <!--Footer-->

</body>
</html>