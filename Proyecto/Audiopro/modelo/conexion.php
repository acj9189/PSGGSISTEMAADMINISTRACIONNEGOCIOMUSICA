<?php
 class Conexion 
{ 
private $Conexion;

//funcion para realizar la conexion
  public function __construct ()
	{
	 $this->Conexion='';
	
	}
public function getConexion()
{
return($this->Conexion);
}
public function setConexion($Conexion)
{
$this->Conexion=$Conexion;
}


  public function conectar()
	    {   
		$Mensaje="Exito";
		$this->Conexion =pg_connect('dbname=audiopro user=admin password=adaudiopro');
	    if(!$this->Conexion)
		$Mensaje="<table width'195' border='0' align='center' cellpadding'0' cellspacing='0'> <tr><TD><font color='font color='#990000'>ERROR AL ABRIR LA BASE DE DATOS </font></TD></tr></table>";
		return($Mensaje);
	    }
		
	  
  public function __destruct ()
	{
	 $this->Conexion;
	}
}

?>