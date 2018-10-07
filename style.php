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
    font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
    text-decoration: none;
    transition: color 0.1s, background-color 0.1s;
}

.navegacion a {
    position: relative;
    display: block;
    padding: 16px 0;
    margin: 0 12px;
    letter-spacing: 1px;
    font-size: 12px;
    line-height: 16px;
    font-weight: 900;
    text-transform: uppercase;
    transition: color 0.1s, background-color 0.1s, padding 0.2s ease-in;
    color: #000;
}

/* Coloreado de los enlaces una vez se pase el cursor encima de éstos */
.navegacion a:hover a:focus a:active {
    color: #999;
    text-decoration:none;
}

