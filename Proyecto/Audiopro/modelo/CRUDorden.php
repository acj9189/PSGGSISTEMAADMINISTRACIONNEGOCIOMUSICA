<?php
include_once("../modelo/conexion.php");
include_once("../modelo/orden.php");

class CRUDorden
{

var $orden;
var $Conexion;

public function __construct($orden)
{
	
$this->orden=$orden;
$this->Conexion= new Conexion();
$this->Conexion->conectar();

}

public function ingresar()
{
$Sql="insert into orden values(default,'".$this->orden->getNombre()."','".$this->orden->getTelefono()."','".$this->orden->getArticulo()."','".$this->orden->getModelo()."','".$this->orden->getMarca()."','".$this->orden->getSerie()."','".$this->orden->getActivofijo()."','".$this->orden->getOt()."','".$this->orden->getProblemareportado()."','".$this->orden->getNotas()."','".$this->orden->getFecha()."');";
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

public function modificarestado($estado,$num){
	$Sql="Update orden set estado='".$estado."' where numeroorden='".$num."';";
pg_exec($this->Conexion->getConexion(),$Sql);
	}
	
public function consultaCliente($numa)
{
$Sql="Select o.nombre,o.articulo,o.modelo,o.marca,o.serie,o.activofijo,o.ot,o.estado,d.diagnostico,d.costo,d.fecha from orden o, diagnostico d where o.numeroorden=d.numeroorden and o.numeroorden='".$numa."';";
$Registros=pg_exec($this->Conexion->getConexion(),$Sql);
return($Registros);
}	

public function __destruct()
{
$this->orden;
}	
	
}

?>