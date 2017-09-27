<?php
include_once("../modelo/conexion.php");
include_once("../modelo/administrador.php");

class CRUDadmin
{

var $admin;
var $Conexion;

public function __construct($admin)
{
	
$this->admin=$admin;
$this->Conexion= new Conexion();
$this->Conexion->conectar();

}


public function consultar()
{
	
$Sql="Select usuario from administrador where usuario='".$this->admin->getUsuario()."'and contrasena='".$this->admin->getContrasena()."';";
$Registros=pg_exec($this->Conexion->getConexion(),$Sql);
return($Registros);
}


public function __destruct()
{
$this->admin;
}	
	
}

?>