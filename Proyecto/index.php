<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="shortcut icon" href="./archivos/pencil-on-a-notes-paper_icon-icons.com_56784.ico" />

    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
        include("./header.php");
    ?>
    <article>
        <h1>Bienvenid# a tus <span>Notas</span></h1>

            <section>

                <ul>
                    <li>
                        <div>
                            <i class="fa-regular fa-note-sticky fa-rotate-180"></i>
                        </div>
                        <span>Aquí encontrarás tus notas</span>
                    </li>

                    <ul class="sublista">
                        <li>
                            <div>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <span>Añade notas</span>
                        </li>
                        <li>
                            <div>
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <span>Elimina notas</span>
                        </li>
                    </ul>

                </ul>

            </section>

            <section>

                <ul>
                    <li>
                        <i class="fa-solid fa-folder-open"></i>
                        <span>Dentro de las carpetas puedes:</span>
                    </li>

                    <ul class="sublista">
                        <li>
                            <i class="fa-solid fa-plus"></i>
                            <span>Crear carpetas</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-xmark"></i>
                            <span>Eliminar carpetas</span>
                        </li>
                    </ul>

                </ul>

                <p>
                    Al mantener pulsado sobre una carpeta puedes anidar carpetas <i class="fa-solid fa-arrow-up"></i>
                    o meter las notas que hay dentro de una carpeta a otra tambien
                    puedes editar el nombre, la apariencia y el icono de las 
                    carpetas <i class="fa-solid fa-pen"></i>
                </p>

            </section>

            <section>

                <ul>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <span>Gestión de usuario</span>
                    </li>
                    <ul class="sublista">
                        <li>
                            <i class="fa-solid fa-pen"></i>
                            <span>Editar usuario</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-gear"></i>
                            <span>Configuración de la web</span>
                        </li>
                        <li>
                            <i class="icofont-duotone icofont-menu"></i>
                            <span>Apariencia</span>
                        </li>
                    </ul>
                </ul>
            </section>
    </article>

    <footer>
        <i class="fa-regular fa-copyright"></i>
        Desing and Created by Clementina
    </footer>

</body>
</html>