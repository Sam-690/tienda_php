<?php require_once 'conexion.php'; ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href='./php-mysql/styles.css'>
    <title>Escan</title>
</head>

<style>
    /* fonts */
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

    * {
        margin: 0px;
        padding: 0px;
        font-family: sans-serif, Helvetica, Arial;
        text-decoration: none;
    }

    .clearfix {
        clear: both;
        float: none;
    }

    body {
        background: url(../img/cubes.png) #F4F4F4;
    }

    .alerta {
        padding: 5px;
        font-size: 14px;
        color: white;
        background: green;
        box-shadow: 0px 1px 3px #ccc;
        margin-bottom: 15px;
        border-radius: 2px;
    }

    .alerta-error {
        background: red;
    }

    .fecha {
        color: #4e4e4e;
        margin-top: 5px;
        font-size: 14px;
    }

    /*CABECERA*/
    #cabecera {
        width: 85%;
        height: auto;
        background: transparent;
        margin: 0px auto;
        /*border: 1px solid black;*/
    }


    /*LOGOTIPO*/
    #logo {
        float: left;
        width: 540px;
        height: 110px;
    }

    #logo a {
        font-family: "fajala", Helvetica;
        font-size: 40px;
        letter-spacing: 2px;
        color: #2979CD;
        text-shadow: 0px 0px 0px black, 1px 1px 0px black, 2px 2px 0px black;
        transition: all 500ms;
        line-height: 90px;
        margin-left: 10px;
    }

    #logo a:hover {
        cursor: pointer;
        text-shadow: 0px 0px 0px black, -1px -1px 0px black, -2px -2px 0px black;
    }

    /*MENU*/
    #menu {
        clear: both;
        width: 100%;
        height: 45px;
        background: linear-gradient(to bottom, #f9f9f9 0px, #e9e9e9 100%);
        border: 1px solid #C9C9C9;
        border-radius: 8px;
        box-shadow: 0px 1px 1px #ccc;
        overflow: hidden;
    }

    #menu ul {
        list-style: none;
    }

    #menu ul li {
        float: left;
        line-height: 44px;
        border-right: 1px solid #D6D6D6;
    }

    #menu ul li a {
        display: block;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 15px;
        color: #838282;
    }

    #menu ul li a:hover {
        background: linear-gradient(to bottom, #f2f2f2 0px, #dad9d4 100%);
    }

    /*CONTENIDO*/
    #contenedor {
        width: 85%;
        height: auto;
        /*    min-height: 600px;*/
        margin: 0px auto;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    /*BARRA LATERAL*/
    #sidebar {
        float: right;
        width: 27%;
        height: auto;
    }

    .bloque {
        display: block;
        width: 90%;
        margin: 0px auto;
        margin-bottom: 35px;
        background: white;
        padding: 15px;
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.3), 0px 3px 7px rgba(0, 0, 0, 0.3), 0px 0px 1px #FFFFFF inset, 0px -3px 2px rgba(0, 0, 0, 0.25) inset;
    }

    .bloque h3 {
        margin-bottom: 15px;
    }

    label,
    input[type="text"],
    input[type="email"],
    input[type="password"] {
        display: block;
        width: 95%;
        margin-top: 2px;
        margin-bottom: 2px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        padding: 5px;
        margin-bottom: 10px;
    }

    input[type="button"],
    input[type="submit"],
    .boton {
        margin-top: 5px;
        margin-bottom: 5px;
        display: block;
        border-radius: 2px;
        color: white;
        background: #007ee5;
        border: 1px solid #156785;
        cursor: pointer;
        padding: 7px;
    }

    .boton {
        color: white !important;
        text-align: center;
        width: 130px;
    }

    .boton-naranja {
        background: orange;
        border-color: #bd7d08;
    }

    .boton-verde {
        background: #21b921;
        border-color: green;
    }

    .boton-rojo {
        background: red;
        border-color: #444;
    }


    /*PRINCIPAL*/
    #principal {
        float: left;
        width: 65%;
        min-height: 572px;
        background: white;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #ccc;
        margin-left: 20px;
        padding: 20px;
        overflow: hidden;
    }

    #principal a {
        color: #333;
    }

    #principal h1 {
        font-size: 32px;
        color: #444;
        letter-spacing: 1px;
        text-shadow: 1px 1px 2px #ccc;
        font-family: "fajala";
    }

    #principal h2 {
        font-size: 20px;
        color: #2979CD;
        text-shadow: 1px 1px 2px #ccc;
        letter-spacing: 1px;
        font-family: "fajala";
        margin-top: 25px;
    }

    #principal p {
        margin-top: 8px;
    }

    #ver-todas a {
        display: block;
        border-radius: 2px;
        padding: 15px;
        color: white;
        background: #007ee5;
        border: 1px solid #156785;
        cursor: pointer;
        width: 160px;
        margin: 0px auto;
        margin-top: 50px;
    }

    /*PIE DE PAGINA*/
    #pie {
        clear: both;
        width: 85%;
        margin: 0px auto;
        background: linear-gradient(to bottom, #f9f9f9 0px, #e9e9e9 100%);
        border: 1px solid #c9c9c9;
        border-bottom: none;
        border-radius: 8px 8px 0px 0px;
        color: #666;
        height: auto;
        padding: 15px;
        text-align: center;
    }
</style>

<body>
    <!-- header -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Proyecto PHP
            </a>
        </div>
        <!-- menu -->
        <nav>
            <ul>
                <li><a href="index.php"></a>cosas</li>
                <li><a href="index.php"></a>cosas</li>
                <li><a href="index.php"></a>cosas</li>
                <li><a href="index.php"></a>cosas</li>
                <li><a href="index.php"></a>cosas</li>
                <li><a href="index.php"></a>Sobre mi</li>
                <li><a href="index.php"></a>Contacto</li>
            </ul>
        </nav>
    </header>