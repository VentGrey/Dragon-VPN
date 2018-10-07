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


/* Coloreado de los enlaces una vez se pase el cursor encima de éstos */
.navegacion a:hover a:focus a:active {
    color: #999;
    text-decoration:none;
}

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

.navegacion a::before {
    content: '';
    display: block;
    position: absolute;
    bottom: 3px;
    left: 0;
    height: 3px;
    width = 100%;
    background-color: #000;
    transform-origin: right top;
    transform: scale(0, 1);
    transition: color 0.1s, transform 0.2s ease out;
}


.navegacion a:active::before {
    background-color: #000;
}

.navegacion a:hover::before, a:focus::before {
    transform-origin: left top;
    transform: scale(1, 1);
}
