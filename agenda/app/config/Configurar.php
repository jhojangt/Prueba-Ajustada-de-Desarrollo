<?php

	//CONFIGURACION DE ACCESO A LA BASE DE DATOS
	define('BD_HOST', 'localhost');
	define('BD_USER', 'root');
	define('BD_PASS', '');
	define('BD_NAME', 'agenda');


	//ruta de la aplicacion
    define('RUTA_APP', dirname(dirname(__FILE__)));

    // ruta url ejemplo http://localhost/MVCFramework
    define('RUTA_URL', 'http://localhost/agenda');
    define('NOMBRESITIO', 'AGENDA');
	
	/* Google App Client Id */
	define('CLIENT_ID', '814352256853-jr5kdt3tenkcm1148lr1u433jvvv3hv4.apps.googleusercontent.com');

	/* Google App Client Secret */
	define('CLIENT_SECRET', '9gCzYPhsPNLzRNYjRfhkRcuY');

	/* Google App Redirect Url */
	define('CLIENT_REDIRECT_URL', 'http://localhost/agenda/paginas/agregar');
    
    define('LINKLOGIN', 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/calendar') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online');
