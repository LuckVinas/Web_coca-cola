<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="esta es una pequeña descripcion de lo que trata la web,
         es la misma que aparece cuando realizas una busqueda y aparece una breve descripcion de la misma ">
        <meta name="keywords" content="estas son las palabras clave para que mi pagina aparesca cuando alguien 
         busca en la web">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            the Coca Cola Company

        </title>
        <link rel="shortcut icon" href="imagenes/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="Styles.css">
        <script src="https://kit.fontawesome.com/5933f051b3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="index.html">
                    <img src="imagenes/logo.svg" class="logo">
                </a>
                <nav>
                    <a href="#inicio">inicio</a>
                    <a href="#nosotros">nosotros</a>
                    <a href="#servicios">servicios</a>
                    <a href="#galeria">galeria</a>
                    <a href="#contactenos">contactenos</a>

                </nav>
                <a href="#" class="hamb"><i class="fa-solid fa-bars"></i>></a>

            </div>

        </header>
        <main>
            <section id="inicio">
                <img src="imagenes/bannerprincipal.jpg">
                <div class="bloque-inicio">
                    <h1>
                        Bienvenidos a Coca Cola
                    </h1>
                    <p>
                        Satisfacer con excelencia a los consumidores de bebidas. Ser el mejor líder total de bebidas, que genere valor económico, social y ambiental sostenible, gestionando modelos de negocio innovadores y ganadores, con los mejores colaboradores en el mundo.
                    </p>
                    <a href="#nosotros" class="boton boton-rojo">ver más</a>
                </div>

            </section>
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p> Nuestro plan de trabajo comienza con nuestra misión, que es perdurable y expresa nuestro propósito como compañía. Sirve como el patrón sobre el cual ponderamos nuestras acciones y decisiones.</p>
                    
                </div>

            </section>
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servico cuadrado-perfecto">
                                    <img src="imagenes/servicio1.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>servicio1</h3>
                                    <p> Nuestro plan de trabajo comienza con nuestra misión, que es perdurable y expresa nuestro propósito como compañía.</p>
                                    <a href="#" class="boton boton-blanco">ver más</a>
                                </div>
                            </div>

                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servico cuadrado-perfecto">
                                    <img src="imagenes/servicio2.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>servicio2</h3>
                                    <p> Nuestro plan de trabajo comienza con nuestra misión, que es perdurable y expresa nuestro propósito como compañía.</p>
                                    <a href="#" class="boton boton-blanco">ver más</a>
                                </div>
                            </div>

                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servico cuadrado-perfecto">
                                    <img src="imagenes/servicio3.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>servicio3</h3>
                                    <p> Nuestro plan de trabajo comienza con nuestra misión, que es perdurable y expresa nuestro propósito como compañía.</p>
                                    <a href="#" class="boton boton-blanco">ver más</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <section id="galeria">
                <div class="container-fuid">
                    <div class="row">
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio1.jpg">
                                <h4>imagen1</h4>
                            </div>

                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio2.jpg">
                                <h4>imagen2</h4>
                            </div>
                            
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio3.jpg">
                                <h4>imagen3</h4>
                            </div>
                            
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio4.jpg">
                                <h4>imagen4</h4>
                            </div>  
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio5.jpg">
                                <h4>imagen5</h4>
                            </div>
                            
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio6.jpg">
                                <h4>imagen6</h4>
                            </div>
                            
                        </div>  
                    </div>
                </div>

            </section>
            <section id="contactenos" class="seccion">
                <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Xalapa+(herbart)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <div class="container">
                <div class="row">
                    <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                        <form action="index.php" method="post">
                            <div class="form-block">
                                <input type="text" name="nombre" class="form-control" placeholder="nombre">
                            </div>
                            <div class="form-block">
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-block">
                                <textarea name="mensaje" placeholder="mensaje"></textarea>
                            </div>
                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton boton-negro"value="enviar"> 
                            </div>
                            <?php
                              if($_SERVER["REQUEST_METHOD"]=="POST"){
                                $nombre=$_POST["nombre"];
                                $nombre=$_POST["email"];
                                $nombre=$_POST["mensaje"];

                                if(isset($nombre)){
                                    if(isset($email)){
                                        if(isset($mensaje)){
                                            $para="lucianosvinas@gmail.com";
                                            $asunto="correo de contacto";
                                            $cuerpo=$nombre."\n".$email."\n".$mensaje;
                                            $adicional="From: noreplay@lucianoviñas.com";
                                            mail($para,$asunto,$cuerpo,$adicional);
                                        ?>
                                            <p>Envio exitoso</p>
                                        <?php
                                        }
                                    }

                                }

                              }

                            ?>
                        </form>
                    </div>
                </div>

            </div>

            </section>
               
        </main>
        <footer class="seccion">
            <div class="container">
                <div class="row">
                    <div class="columna columna-25 columna-mobile-100">
                        <img src="imagenes/logo-blanco.png" class="logo-footer">
                        <p>aqui ponemos un parrafo chiquito</p>

                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>temas relacionados </h3>
                        <ul> 
                            <li><a href="#">elemento 1</a></li>
                            <li><a href="#">elemento 2</a></li>
                            <li><a href="#">elemento 3</a></li>
                        </ul>
                        
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>datos de contacto  </h3>
                        <ul> 
                            <li>lucianosvinas@gmail.com</li>
                            <li>+52 2283208975</li>
                            <li>direccion que no me la se <br>Xalapa,Ver</li>
                        </ul>
                        
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>redes sociales  </h3>
                        <ul class="redes"> 
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="barra-footer">
                &copy; Derechos Reservados - 2020
            </div>

        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/funciones.js"></script>

    </body>
</html>