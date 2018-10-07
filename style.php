<?php
    header("Content-Type: text/css; charset: UTF-8");
?>

/* Color del cuerpo de la página */
body {
    background: #151619;
}

/* Color de fondo para la barra de navegación superior */
.navegacion {
    background-color: #272A31;
    overflow: hidden;
}

/* Estilar los enlaces dentro de la barra de navegacion */
.navegacion a {
    float: left;
    color: white;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
    font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
    font-size: 17px;
    font-weight: bold;
}

/* Coloreado de los enlaces una vez se pase el cursor encima de éstos */
.navegacion a:hover a:focus a:active {
    color: #999;
    text-decoration:none;
}

