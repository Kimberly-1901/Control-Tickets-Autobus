<?php
session_start();
    
class Conectar{
	protected $dbh;
	protected function Conexion(){
		try{
			$mysqli = $this->dbh = new mysqli("localhost", "root", "root", "bus");
			$mysqli->set_charset("utf8");
			return $mysqli;
		}catch(Exception $e){
			print "Error BD!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	public static function ruta(){
		return "http://3.140.255.241/Examen1/";
	}
}
?>