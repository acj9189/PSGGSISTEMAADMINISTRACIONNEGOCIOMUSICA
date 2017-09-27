<?php

class administrador
{
var  $usuario;
var $contrasena;
var $nombre;


	
public function __construct($usuario,$contrasena,$nombre)
{
$this->usuario=$usuario;
$this->contrasena=$contrasena;
$this->nombre=$nombre;

}
//set  y get
public function getUsuario()
{
return($this->usuario);	
}
public function getContrasena()
{
return($this->contrasena);	
}
public function getNombre()
{
return($this->nombre);	
}


public function setUsuario($usuario)
{
$this->usuario=usuario;
}
public function setContrasena($contrasena)
{
$this->contrasena=contrasena;
}
public function setNombre($Nombre)
{
$this->nombre=nombre;
}

public function __destruct()
{
$this->usuario;
$this->contrasena;
$this->nombre;

}

}



?>