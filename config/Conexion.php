<?php
session_start();
	class Conectar {
	protected $dbh;

		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public function ruta(){
			//Local
			return "https://trackingpcl.azurewebsites.net/";
			//QA

		}
	}
?>
