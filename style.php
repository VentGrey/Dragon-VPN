<?php
    header("Content-Type: text/css; charset: UTF-8");
?>

/* Color de fondo para la barra de navegación superior */
.navegacion {
    background-color: #C8252C;
    overflow: hidden;
}

/* Estilar los enlaces dentro de la barra de navegacion */
.navegacion a {
    float: left;
    color: white;
    padding: 14px 16px;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
    text-decoration: none;
}

/* Coloreado de los enlaces una vez se pase el cursor encima de éstos */
.navegacion a:hover {
    background-color: white;
    color: red; /* por mientras */
}

/* Colorear los enlaces cuando estos se encuentren activos */

.navegacion a.activo {
    background-color: white;
    color: white;
}
