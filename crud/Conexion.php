<?php
class Conexion{
	public function conectar(){
		$conexion = new PDO("mysql:host=localhost;dbname=Proyecto_Comportamental","root","");
		return $conexion;
	}

	public function prepare($query)
    {
        return $this->link->prepare($query);
    }
}
?>