<?php
    header("Content-Type: text/css; charset: UTF-8");
?>

/* Color del cuerpo de la página */
body {
    background: #E7E8EB;
}

/* Color de fondo para la barra de navegación */

.navegacion {
    background-color: #E7E8EB;
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
    border-bottom: 3px solid #E2525D;
}

/* Decoración cuando un link sea seleccionado */
.navegacion a.activo {
    border-bottom: 3px solid #E2525D;
}

/* Estilo del primer tbody */
tbody {
	border-width: 0px 0px 0px 0px;
	border-spacing: 0px;
	border-style: hidden hidden hidden hidden;
	border-collapse: collapse;
}

/* Estilos de las tablas */
.navegacion td {
    border-collapse: separate;
    border: 0px solid #E7E8EB;
    border-radius: 6px;
    -moz-border-radius: 6px; /* Para FireFox */
}

/* FIN DE LOS MENÚS */

/* Estilo de la dirección IP */

.direccion td {
    text-align: left;
    color: #E2525D;
    background-color: #E7E8EB;
    font-weight: 900;
}

.vpn td {
    text-align: center;
    color: #E2525D;
    background-color: #E7E8EB;
    font-weight: 900;
}

.vpn iframe {
    text-align: center;
    color: #E2525D;
    background-color: #E7E8EB;
    font-weight: 900;
}
