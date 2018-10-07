<?php
    header("Content-Type: text/css; charset: UTF-8");
?>

/* Color del cuerpo de la página */
body {
    background: #FAFAFA;
}

/* Color de fondo para la barra de navegación */

.navegacion {
    background-color:#FFFFFF;
    overflow: hidden;
}

/* Colores bonitos a los links */

.navegacion a {
    float: left;
    display: block;
    color: #212121;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px;
    border-bottom: 3px solid transparent;
    font-family: Helvetica, Sans-Serif;
}

/* Decoración cuando se ponga el cursor sobre un link */

.navegacion a:hover {
    border-bottom: 3px solid #0F6EE3;
}

/* Decoración cuando un link sea seleccionado */
.navegacion a.activo {
    border-bottom: 3px solid #0F6EE3;
}

/* Estilado de la dirección IP */
.direccion td {
    text-align: center;
    color: white;
    background-color: #0F1011;
    font-weight: 900;
}

.vpn td {
    text-align: center;
    color: white;
    background-color: #0F1011;
    font-weight: 900;
}

.vpn iframe {
    text-align: center;
    color: white;
    background-color: #0F1011;
    font-weight: 900;
}
