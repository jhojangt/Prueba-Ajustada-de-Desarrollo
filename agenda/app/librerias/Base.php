<?php
	
	//clase para conectarse a la base de datos y ejecutar consultas
	class Base{
		private $host = BD_HOST;
		private $name_user = BD_USER;
		private $pass = BD_PASS;
		private $bd_Name = BD_NAME;

		private $dbh; 
		private $stmt;
		private $error;

		public function __construct(){
			//configurar conexion
			$dns = 'mysql:host='.$this->host.';dbname='.$this->bd_Name;
			$opciones = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			//Crear una instancia de pdo
			try {
				$this->dbh = new PDO($dns,$this->name_user, $this->pass, $opciones);
				$this->dbh->exec('set names utf8');
			} catch (PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}

		//se prerpara la consulta
		public function query($sql)
		{
			$this->stmt = $this->dbh->prepare($sql);
		}

		//Vinculamos la consulta
		public function bind($parametro, $valor, $tipo = null){
			if(is_null($tipo)){
				switch (true) {
					case is_int($valor):
						$tipo =  PDO::PARAM_INT;
						break;
					case is_bool($valor):
						$tipo =  PDO::PARAM_BOOL;
						break;
					case is_null($valor):
						$tipo =  PDO::PARAM_NULL;
						break;
					default:
						$tipo =  PDO::PARAM_STR;
						break;
				}
			}
				$this->stmt->bindValue($parametro,$valor,$tipo);
		}

		//se ejecuta la consulta
		public function execute()
		{
			return $this->stmt->execute();
		}

		//obtener los registros
		public function registros()
		{
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

		//obtener solo un registro
		public function registro()
		{
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}

		//obtener cantidad de filas con el metodo rowCount
		public function rowCount()
		{
			return $this->stmt->rowCount();
		}
	}

?>