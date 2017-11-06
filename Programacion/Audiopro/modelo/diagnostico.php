<?php

class diagnostico
{
var $numeroorden;
var $diagnostico;
var $costo;
var $fecha;




	
public function __construct($numeroorden,$diagnostico,$fecha,$costo)
{
$this->numeroorden=$numeroorden;
$this->diagnostico=$diagnostico;
$this->fecha=$fecha;
$this->costo=$costo;



}
//set  y get
public function getNumeroorden()
{
return($this->numeroorden);	
}
public function getDiagnostico()
{
return($this->diagnostico);	
}
public function getCosto()
{
return($this->costo);	
}

public function getFecha()
{
return($this->fecha);	
}


public function __destruct()
{
$this->numeroorden;
$this->diagnostico;
$this->fecha;
$this->costo;

}

}



?>