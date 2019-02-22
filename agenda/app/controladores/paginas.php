<?php

    class Paginas extends Controlador{

        public function __construct(){
            $this->usuarioModelo = $this->modelo('Agenda');
        }

		public function index(){

            //obtener los usuarios

            $usuario = $this->usuarioModelo->obtenerTarea();

			$datos = [
				'usuarios' => $usuario,
			];

            $this->vista('paginas/inicio', $datos);
        }

        public function agregar()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $fechaIni = trim(date("Y-m-d", strtotime($_POST['fecha_Inicio_tarea'])) . 'T' .str_replace('-',':',date("H-m-s", strtotime($_POST['fecha_Inicio_tarea']))).'-05:00');
                $fechaFin = trim(date("Y-m-d", strtotime($_POST['fecha_fin_tarea'])) . 'T' .str_replace('-',':',date("H-m-s", strtotime($_POST['fecha_fin_tarea']))).'-05:00');

                $datos =[
                    'nombre_Tarea' => trim($_POST['nombre_Tarea']),
                    'fecha_Inicio_tarea' => $fechaIni,
                    'fecha_fin_tarea' => $fechaFin,
                    'comentarios' => trim($_POST['comentarios'])
                ];

                if($this->usuarioModelo->agregarTarea($datos)){
                   

                       

                    try {
                         $eventTime = [
                            "start_time" => $datos['fecha_Inicio_tarea'],
                            "end_time" => $datos['fecha_fin_tarea'],
                            "event_date" => ''
                        ];
                            // Get event details
                        header('Content-type: application/json');
                            $capi = new GoogleCalendarApi();

                            // Get user calendar timezone
                            $user_timezone = $capi->GetUserCalendarTimezone($_SESSION['access_token']);

                            // Create event on primary calendar
                            $event_id = $capi->CreateCalendarEvent('primary', $datos['nombre_Tarea'], 0, $eventTime, $user_timezone, $_SESSION['access_token']);

                            print_r($event_id);
                            redireccionar('/paginas');
                        }
                        catch(Exception $e) {
                            header('Bad Request', true, 400);
                            echo json_encode(array( 'error' => 1, 'message' => $e->getMessage() ));
                        }
                }else{
                    die('algo salio mal');
                }
            }else{
                $datos = [
                    'nombre_Tarea' => '',
                    'fecha_Inicio_tarea' => '',
                    'fecha_fin_tarea' => '',
                    'comentarios' => ''
                ];

                $this->vista('paginas/agregar',$datos);
            }
        }

        public function editar($id)
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $datos =[
                    'id' => $id,
                    'nombre_Tarea' => trim($_POST['nombre_Tarea']),
                    'fecha_Inicio_tarea' => trim(date("Y-m-d H-m-s", strtotime($_POST['fecha_Inicio_tarea']))),
                    'fecha_fin_tarea' => trim(date("Y-m-d H-m-s", strtotime($_POST['fecha_fin_tarea']))),
                    'comentarios' => trim($_POST['comentarios']),
                ];
                
                if($this->usuarioModelo->actualizarTarea($datos)){
                    redireccionar('/paginas');
                }else{
                    die('algo salio mal');
                }

            }else{

                //obtener informacion de usuario desde el modelo

                $usuario = $this->usuarioModelo->obtenerTareaId($id);
                $datos = [
                    'id' => $usuario->id,
                    'nombre_Tarea' => $usuario->nombre_Tarea,
                    'fecha_Inicio_tarea' => date("Y-m-d H-m-s", strtotime($usuario->fecha_Inicio_tarea)),
                    'fecha_fin_tarea' => date("Y-m-d H-m-s", strtotime($usuario->fecha_fin_tarea)),
                    'comentarios' => $usuario->comentarios
                ];

                $this->vista('paginas/editar',$datos);
            }
        }

        public function borrar($id)
        {

            $usuario = $this->usuarioModelo->obtenerTareaId($id);

            $datos = [
                'id' => $usuario->id,
                'nombre_Tarea' => $usuario->nombre_Tarea,
                'fecha_Inicio_tarea' => date("Y-m-d H-m-s", strtotime($usuario->fecha_Inicio_tarea)),
                'fecha_fin_tarea' => date("Y-m-d H-m-s", strtotime($usuario->fecha_fin_tarea)),
                'comentarios' => $usuario->comentarios
            ];


            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $datos =[
                    'id' => $id,
                ];
                
                if($this->usuarioModelo->borrarTarea($datos)){
                    redireccionar('/paginas');
                }else{
                    die('algo salio mal');
                }

            }
            $this->vista('paginas/borrar',$datos);
        }
    }