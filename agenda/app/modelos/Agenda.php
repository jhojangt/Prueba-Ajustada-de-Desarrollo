<?php


	/**
	 * 
	 */
	class Agenda
	{

		private $db;
		
		function __construct()
		{
			$this->db = new Base;
		}

		public function obtenerTarea()
		{
			$this->db->query("SELECT * FROM datosAgenda");
			$resultados = $this->db->registros();
			return $resultados;
		}

		
		public function agregarTarea($datos)
		{
			$this->db->query("INSERT INTO datosAgenda (nombre_Tarea,fecha_Inicio_tarea,fecha_fin_tarea,comentarios) VALUES (:nombre_Tarea,:fecha_Inicio_tarea,:fecha_fin_tarea,:comentarios)");

			//vincular valores
			$this->db->bind(":nombre_Tarea" ,$datos['nombre_Tarea']);
			$this->db->bind(":fecha_Inicio_tarea" ,$datos['fecha_Inicio_tarea']);
			$this->db->bind(":fecha_fin_tarea" ,$datos['fecha_fin_tarea']);
			$this->db->bind(":comentarios" ,$datos['comentarios']);
			
			//ejecutar
			if ($this->db->execute() ) {
				return true;
			} else {
				return false;
			}
		}


		public function obtenerTareaId($id)
		{
			$this->db->query("SELECT * FROM datosAgenda WHERE id = :id");
			$this->db->bind(":id",$id);
			$fila = $this->db->registro();
			return $fila;
		}

		public function actualizarTarea($datos)
		{
			$this->db->query("UPDATE datosAgenda SET nombre_Tarea = :nombre_Tarea ,	fecha_Inicio_tarea = :fecha_Inicio_tarea , fecha_fin_tarea = :fecha_fin_tarea, comentarios = :comentarios WHERE id = :id");		

			//vincular valores
			$this->db->bind(":id" ,$datos['id']);
			$this->db->bind(":nombre_Tarea" ,$datos['nombre_Tarea']);
			$this->db->bind(":fecha_Inicio_tarea" ,$datos['fecha_Inicio_tarea']);
			$this->db->bind(":fecha_fin_tarea" ,$datos['fecha_fin_tarea']);
			$this->db->bind(":comentarios" ,$datos['comentarios']);

			//ejecutar
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function borrarTarea($datos)
		{
			$this->db->query("DELETE FROM datosAgenda where id = :id");		

			//vincular valores
			$this->db->bind(":id" ,$datos['id']);

			//ejecutar
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}
	}