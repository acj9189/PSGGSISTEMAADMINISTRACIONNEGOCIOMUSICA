<?php
include_once("../modelo/conexion.php");
include_once("../modelo/diagnostico.php");

class CRUDdiagnostico
{

var $diagnostico;
var $Conexion;

public function __construct($diagnostico)
{
	
$this->diagnostico=$diagnostico;
$this->Conexion= new Conexion();
$this->Conexion->conectar();

}

public function ingresar()
{
$Sql="insert into diagnostico values(default,'".$this->diagnostico->getNumeroorden()."','".$this->diagnostico->getDiagnostico()."','".$this->diagnostico->getFecha()."',".$this->diagnostico->getCosto().");";
pg_exec($this->Conexion->getConexion(),$Sql);
}



public function consultar()
{
$Sql="Select numeroorden,nombre,telefono,articulo,modelo,marca,serie,activofijo,ot,problemareportado,notas from orden where numeroorden=(select max(numeroorden) from orden)";
$Registros=pg_exec($this->Conexion->getConexion(),$Sql);
return($Registros);
}


public function consultarparaDiagnostico($num)
{
$Sql="Select fecha,articulo,modelo,marca,serie,activofijo,ot,problemareportado,notas from orden where numeroorden='".$num."';";
$Registros=pg_exec($this->Conexion->getConexion(),$Sql);
return($Registros);
}

public function __destruct()
{
$this->diagnostico;
}	
	
}

?>