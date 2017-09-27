<?php

class orden
{
var $nombre;
var $telefono;
var $articulo;
var $modelo;
var $marca;
var $serie;
var $activofijo;
var $ot;
var $problemareportado;
var $notas;
var $fecha;



	
public function __construct($nombre,$telefono,$articulo,$modelo,$marca,$serie,$activofijo,$ot,$problemareportado,$notas,$fecha)
{
$this->nombre=$nombre;
$this->telefono=$telefono;
$this->articulo=$articulo;
$this->modelo=$modelo;
$this->marca=$marca;
$this->serie=$serie;
$this->activofijo=$activofijo;
$this->ot=$ot;
$this->problemareportado=$problemareportado;
$this->notas=$notas;
$this->fecha=$fecha;

}
//set  y get
public function getNombre()
{
return($this->nombre);	
}
public function getTelefono()
{
return($this->telefono);	
}
public function getArticulo()
{
return($this->articulo);	
}
public function getModelo()
{
return($this->modelo);	
}
public function getMarca()
{
return($this->marca);	
}
public function getSerie()
{
return($this->serie);	
}
public function getActivofijo()
{
return($this->activofijo);	
}
public function getOt()
{
return($this->ot);	
}
public function getProblemareportado()
{
return($this->problemareportado);	
}
public function getNotas()
{
return($this->notas);	
}
public function getFecha()
{
return($this->fecha);	
}


public function __destruct()
{
$this->nombre;
$this->telefono;
$this->articulo;
$this->modelo;
$this->marca;
$this->serie;
$this->activofijo;
$this->ot;
$this->problemareportado;
$this->notas;
$this->fecha;
}

}



?>