<?php

	//clase controlador principal
	// se encarga de poder cargar los modelos y las vistas

	class Controlador
	{
		
		//cargar modelo
		public function modelo($modelo){
				//cargar
				require_once '../app/modelos/' . $modelo . '.php';
				//instanciar el modelo
				return new $modelo();
		}		

		public function vista($vista,$datos = []){
				//chequear si el archivo vista sirve
			if(file_exists('../app/vistas/' . $vista . '.php')){
				require_once '../app/vistas/' . $vista . '.php';
			}else{
				// si el archivo no existe
				die('la vista no existe');
			}
		}
		
	}