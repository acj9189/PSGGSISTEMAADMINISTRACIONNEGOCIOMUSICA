<?php
include_once("../modelo/CRUDadmin.php");
include_once("../modelo/administrador.php");
include_once("../modelo/CRUDorden.php");
include_once("../modelo/orden.php");
include_once("../modelo/CRUDdiagnostico.php");
include_once("../modelo/diagnostico.php");

$funcion=$_REQUEST['funcion'];

switch($funcion){
			case 1:{
				ingreso();}
				break;
			case 2:{
				cerrarsesion();
				}break;
			case 3:{
				generarOrden();
				}break;
			case 4:{
				imprimirOrden();
				}break;
			case 5:{
				buscarOrdenDiagnostico();
				}break;
			case 6:{
				registrarDiagnostico();
				}break;
			case 7:{
				consultaClienteOrden();
				}break;
				
}
//////
function ingreso(){
$usuario=$_REQUEST['usuario'];
$contrasena=$_REQUEST['contrasena'];

$A=new administrador($usuario,$contrasena,"");
$Cruda=new CRUDadmin($A);
$Registros=$Cruda->consultar();
//$datos=$Cruda->consultardatos();

$Filas=pg_numrows($Registros);

if($Filas>0)
{
session_start();
$_SESSION['usuario'] = $usuario;


echo json_encode($usuario);
}
else
{echo json_encode(0);}
}
///////
function cerrarsesion(){
	session_start();
	session_unset();
	session_destroy();
	echo json_encode(1);
	}
/////////
function generarOrden(){
	$nombre=$_REQUEST['nombre'];
	$telefono=$_REQUEST['telefono'];
	$articulo=$_REQUEST['articulo'];
	$modelo=$_REQUEST['modelo'];
	$marca=$_REQUEST['marca'];
	$serie=$_REQUEST['serie'];
	$activofijo=$_REQUEST['activofijo'];
	$ot=$_REQUEST['ot'];
	$problemareportado=$_REQUEST['problemareportado'];
	$notas=$_REQUEST['notas'];
	$fecha=$_REQUEST['fecha'];
	
	
	$o=new orden($nombre,$telefono,$articulo,$modelo,$marca,$serie,$activofijo,$ot,$problemareportado,$notas,$fecha);
	$Crudo=new CRUDorden($o);
	$Crudo->ingresar();
	
	}
///////
function imprimirOrden(){
	
$c=new orden("","","","","","","","","","","");
$CRUDc= new CRUDorden($c);
$Registros=$CRUDc->consultar();

$Filas=pg_numrows($Registros);

for($cont=0;$cont<$Filas;$cont++) 
	     {
          $vec=array("numeroorden"=>"".pg_result($Registros,$cont,0),
		  			"nombre"=>"".pg_result($Registros,$cont,1),
					"telefono"=>"".pg_result($Registros,$cont,2),
					"articulo"=>"".pg_result($Registros,$cont,3),
					"modelo"=>"".pg_result($Registros,$cont,4),
					"marca"=>"".pg_result($Registros,$cont,5),	
					"serie"=>"".pg_result($Registros,$cont,6),
					"activofijo"=>"".pg_result($Registros,$cont,7),
					"ot"=>"".pg_result($Registros,$cont,8),	
					"problemareportado"=>"".pg_result($Registros,$cont,9),
					"notas"=>"".pg_result($Registros,$cont,10), 			 
							);
						
			$M[$cont]=$vec;
	     }
		
    //pg_FreeResult($Registros);
$vec=$M;

echo json_encode($vec);
	}	
	
/////////
function buscarOrdenDiagnostico(){
$numeroorden=$_REQUEST['numeroorden'];
$c=new orden($numeroorden,"","","","","","","","","","");
$CRUDc= new CRUDorden($c);
$Registros=$CRUDc->consultarparaDiagnostico($numeroorden);

$Filas=pg_numrows($Registros);

for($cont=0;$cont<$Filas;$cont++) 
	     {
          $vec=array("fecha"=>"".pg_result($Registros,$cont,0),
		  			"articulo"=>"".pg_result($Registros,$cont,1),
					"modelo"=>"".pg_result($Registros,$cont,2),
					"marca"=>"".pg_result($Registros,$cont,3),	
					"serie"=>"".pg_result($Registros,$cont,4),
					"activofijo"=>"".pg_result($Registros,$cont,5),
					"ot"=>"".pg_result($Registros,$cont,6),	
					"problemareportado"=>"".pg_result($Registros,$cont,7),
					"notas"=>"".pg_result($Registros,$cont,8), 			 
							);
						
			$M[$cont]=$vec;
	     }
		
    //pg_FreeResult($Registros);
$vec=$M;

echo json_encode($vec);

	
	}
	

///////
function registrarDiagnostico(){
	$numeroorden=$_REQUEST['numeroorden'];
	$diagnostico=$_REQUEST['diagnostico'];
	$fecha=$_REQUEST['fecha'];
	$costo=$_REQUEST['costo'];
	
$o=new diagnostico($numeroorden,$diagnostico,$fecha,$costo);
	$Crudo=new CRUDdiagnostico($o);
	$Crudo->ingresar();
$estado="Revisado";	
$c=new orden($numeroorden,"","","","","","","","","","");
$CRUDc= new CRUDorden($c);
$CRUDc->modificarestado($estado,$numeroorden);

echo json_encode("Diagnostico Registrado");
	}
	
	
/////
function consultaClienteOrden(){
	$numeroorden=$_REQUEST['numeroorden'];
	
	$c=new orden("","","","","","","","","","","");
$CRUDc= new CRUDorden($c);
$Registros=$CRUDc->consultaCliente($numeroorden);

$Filas=pg_numrows($Registros);

if($Filas>0){

for($cont=0;$cont<$Filas;$cont++) 
	     {
          $vec=array("nombre"=>"".pg_result($Registros,$cont,0),
		  			"articulo"=>"".pg_result($Registros,$cont,1),
					"modelo"=>"".pg_result($Registros,$cont,2),
					"marca"=>"".pg_result($Registros,$cont,3),
					"serie"=>"".pg_result($Registros,$cont,4),
					"activofijo"=>"".pg_result($Registros,$cont,5),	
					"ot"=>"".pg_result($Registros,$cont,6),
					"estado"=>"".pg_result($Registros,$cont,7),
					"diagnostico"=>"".pg_result($Registros,$cont,8),
					"costo"=>"".pg_result($Registros,$cont,9),
					"fecha"=>"".pg_result($Registros,$cont,10),
					
					);
						
			$M[$cont]=$vec;
	     }
		
    //pg_FreeResult($Registros);
$vec=$M;

echo json_encode($vec);}

else{
	echo json_encode(1);
	}
	}
?>
