<?php
    session_start();
    //Cargamos librerias
    require_once 'config/Configurar.php';
    require_once 'helpers/url_helper.php';
    require_once 'helpers/google-calendar-api.php';

    //require_once 'librerias/Base.php';
    //require_once 'librerias/Controlador.php';
    //require_once 'librerias/Core.php';

    //AUTOLOAD php
    spl_autoload_register(function($nombreClase){
    	require_once 'librerias/' . $nombreClase . '.php';
    });
