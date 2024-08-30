<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <!-- --------------------   CABECERA   -------------------- -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>
        <!-- --------------------   MENU   -------------------- -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categroia 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre Mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"/>
        </header>
        <!-- --------------------   BARRA LATERAL   -------------------- -->
        <div id="contenedor">
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form action="registro.php" method="post">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" />

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" />

                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Registrar" />
                    </form>
                </div>
            </aside>
        <!-- --------------------   CAJA PRINCIPAL   -------------------- -->
            <div id="principal">
                <h1>Ultimas Entradas</h1>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut est rutrum risus volutpat
                            elementum. Nullam ullamcorper blandit metus quis auctor. Integer finibus sodales pharetra. Aliquam
                            erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus at arcu id
                            hendrerit.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut est rutrum risus volutpat
                            elementum. Nullam ullamcorper blandit metus quis auctor. Integer finibus sodales pharetra. Aliquam
                            erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus at arcu id
                            hendrerit.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut est rutrum risus volutpat
                            elementum. Nullam ullamcorper blandit metus quis auctor. Integer finibus sodales pharetra. Aliquam
                            erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus at arcu id
                            hendrerit.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut est rutrum risus volutpat
                            elementum. Nullam ullamcorper blandit metus quis auctor. Integer finibus sodales pharetra. Aliquam
                            erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus at arcu id
                            hendrerit.
                        </p>
                    </a>
                </article>
                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div> <!-- FIN PRINCIPAL -->

            <div class="clearfix"/>
        </div>
    <!-- --------------------   PIE DE PAGINA   -------------------- -->
        <footer id="pie">
            <p>Desarrollado por Victor Robles &copy; 2018</p>
        </footer>

    </body>
</html>
