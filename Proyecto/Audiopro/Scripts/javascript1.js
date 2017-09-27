// JavaScript Document
$(function() {

//funcion de ingreso administrador
$("#ingresoA").button().on("click", function(event){
	usuario=document.getElementById("administrador").value;
	contrasena=document.getElementById("contrasena").value;
	
	if(usuario!="" && contrasena!="")
	{
		$.post("controladora/controladora.php",{usuario:usuario,contrasena:contrasena,funcion:1},function(respuesta)
		{
			 if(respuesta=='0')
		  {  
			alert("No existe el Usuario o la contraseña");
			document.getElementById("administrador").value="";
	 		document.getElementById("contrasena").value="";
			 }
		  else
			{
			parent.window.location='vistas/perfilAdmin.php';
	
			}
						
			})
		
		}
	else
	{
		alert("Debe digitar el Usuario o la Contraseña");}
	
	});

//Cerrar Sesión 
$("#cerrar").button().on("click", function(event)
    {
	 
	$.post("../controladora/controladora.php",{funcion:2},function(respuesta)
	{
	
			
			if(respuesta=='1')
			{
			parent.window.location='../index.html';
			}
	}
	)
	
	
	
    });

/// Generar Orden de Servicio
$("#imprimir").button().on("click",function(event){
	
	
	nombre=document.getElementById("nom").value;
	telefono=document.getElementById("tel").value;
	articulo=document.getElementById("art").value;
	modelo=document.getElementById("mod").value;
	marca=document.getElementById("marca").value;
	serie=document.getElementById("serie").value;
	activofijo=document.getElementById("activofijo").value;
	ot=document.getElementById("ot").value;
	problemareportado=document.getElementById("reporte").value;
	notas=document.getElementById("notas").value;
	var d = new Date();
	var dia=d.getDate();
	var m=d.getMonth()+1;
	var ano=d.getFullYear();
	
var fecha=dia+'/'+m+'/'+ano;

	
	$.post("../controladora/controladora.php",{nombre:nombre,telefono:telefono,articulo:articulo,modelo:modelo,marca:marca,serie:serie,activofijo:activofijo,ot:ot,problemareportado:problemareportado,notas:notas,fecha:fecha,funcion:3},function(respuesta)
	{
		document.getElementById("nom").value="";
	document.getElementById("tel").value="";
	document.getElementById("art").value="";
	document.getElementById("mod").value="";
	document.getElementById("marca").value="";
	document.getElementById("serie").value="";
	document.getElementById("activofijo").value="";
	document.getElementById("ot").value="";
	document.getElementById("reporte").value="";
	document.getElementById("notas").value="";
		parent.window.location='OrdenServicio.php';
	})
	
	});
	
	
///// Buscar Artículo para diagnóstico

$("#busordend").button().on("click",function(event){
	
	numeroorden=document.getElementById("ordend").value;
	
	
	$.post("../controladora/controladora.php",{numeroorden:numeroorden,funcion:5},function(respuesta){
		
		var datos= jQuery.parseJSON(respuesta); 	
     for (var i in datos)
	 {
		 var elementotr=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].fecha);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj=document.getElementById("fechaD");
        obj.appendChild(elementotr);
		
		////
			
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].articulo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("articuloD");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].modelo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("modeloD");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].marca);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("marcaD");
        obj2.appendChild(elementotr2);
		
		///
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].serie);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("serieD");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].activofijo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("activofijoD");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].ot);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("otD");
        obj2.appendChild(elementotr2);
		
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].problemareportado);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("problemaD");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].notas);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("notasD");
        obj2.appendChild(elementotr2);
		
	 }
		
		})
	})
	
////// Registar diagnóstico
$("#registrarD").button().on("click",function(event){
	
	numeroorden=document.getElementById("ordend").value;
	diagnostico=document.getElementById("diagnostico").value;
	var d = new Date();
	var dia=d.getDate();
	var m=d.getMonth()+1;
	var ano=d.getFullYear();
	
var fecha=dia+'/'+m+'/'+ano;
    costo=document.getElementById("costo").value;
	
	$.post("../controladora/controladora.php",{numeroorden:numeroorden,diagnostico:diagnostico,fecha:fecha,costo:costo,funcion:6},function(respuesta){
		
		alert(respuesta);
		location.reload();
		})
	
	});
	
	
/////El cliente busca el artículo por número de orden
$("#botonbusqueda1").button().on("click",function(event){
	numeroorden=document.getElementById("busqueda").value;
	
	$.post("../controladora/controladora.php",{numeroorden:numeroorden,funcion:7},function(respuesta){
		document.getElementById("busqueda").value="";
		
		if(respuesta=='1'){
			 var elementotr1=document.createElement('tr');
	elementotr1.setAttribute("class","tablaarticulos1");
	 	elementotr1.setAttribute("height","80px");

		   /////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr1.appendChild(elementotd);
			
			
			var elementodiv=document.createElement('div');
			 elementodiv.setAttribute("class","col-xs-12");
			  elementotd.appendChild(elementodiv); 
				
				var elementoa=document.createElement('h4');
				elementoa.setAttribute("style","color:#039");
				 elementodiv.appendChild(elementoa);
	var titulo=document.createTextNode("Su artículo está en estado Recibido, aun no ha sido Diagnosticado ");		
	elementoa.appendChild(titulo);
	 
	 
	 var obj1=document.getElementById('vernom');
        obj1.appendChild(elementotr1);
			}
		else{
		var datos= jQuery.parseJSON(respuesta); 
			
     for (var i in datos)
	 {
		 
			 var elementotr1=document.createElement('tr');
	elementotr1.setAttribute("class","tablaarticulos1");
	 	elementotr1.setAttribute("height","80px");

		   /////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr1.appendChild(elementotd);
			
			
			var elementodiv=document.createElement('div');
			 elementodiv.setAttribute("class","col-xs-12");
			  elementotd.appendChild(elementodiv); 
				
				var elementoa=document.createElement('h4');
				elementoa.setAttribute("style","color:#039");
				 elementodiv.appendChild(elementoa);
	var titulo=document.createTextNode("NOMBRE DEL CLIENTE: ");		
	var texto=document.createTextNode(datos[i].nombre);
	 elementoa.appendChild(titulo);
	 elementodiv.appendChild(texto);
	 
	 var obj1=document.getElementById('vernom');
        obj1.appendChild(elementotr1);
	 
	 ////
	  var elementotr=document.createElement('tr');
	elementotr.setAttribute("class","tablaarticulos1");
	 	elementotr.setAttribute("height","80px");

		   /////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
	 
			   
			   	var elementodiv1=document.createElement('div');
			 elementodiv1.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv1);
				
				var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv1.appendChild(elementoa);
	var titulo1=document.createTextNode("ARTÍCULO ");			   
	var texto1=document.createTextNode(datos[i].articulo);
	elementoa.appendChild(titulo1);
	      elementodiv1.appendChild(texto1);
		  
		  //////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
			
		  	   	var elementodiv2=document.createElement('div');
			 elementodiv2.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv2);
				  
				var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv2.appendChild(elementoa);
	var titulo2=document.createTextNode("MODELO ");
		var texto2=document.createTextNode(datos[i].modelo);
		elementoa.appendChild(titulo2);
	              elementodiv2.appendChild(texto2);
				  
			///////	  
				   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv3=document.createElement('div');
			 elementodiv3.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv3);
				  
				  var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv3.appendChild(elementoa);
	var titulo3=document.createTextNode("MARCA ");
		var texto3=document.createTextNode(datos[i].marca);
		elementoa.appendChild(titulo3);
	              elementodiv3.appendChild(texto3);
				  
		////////
		var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv4=document.createElement('div');
			 elementodiv4.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv4);
				  
				  var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv4.appendChild(elementoa);
	var titulo4=document.createTextNode("SERIE ");
		var texto4=document.createTextNode(datos[i].serie);
		elementoa.appendChild(titulo4);
	              elementodiv4.appendChild(texto4);
				  
		////////
		var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv5=document.createElement('div');
			 elementodiv5.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv5);
				  
				  var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv5.appendChild(elementoa);
	var titulo5=document.createTextNode("ACTIVO FIJO ");
		var texto5=document.createTextNode(datos[i].activofijo);
		elementoa.appendChild(titulo5);
	              elementodiv5.appendChild(texto5);
				  
				  
	////////
		var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv6=document.createElement('div');
			 elementodiv6.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv6);
				  
				  var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv6.appendChild(elementoa);
	var titulo6=document.createTextNode("OT ");
		var texto6=document.createTextNode(datos[i].ot);
		elementoa.appendChild(titulo6);
	              elementodiv6.appendChild(texto6);
				  
				  
	////////
		var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv7=document.createElement('div');
			 elementodiv7.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv7);
				  
				  var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv7.appendChild(elementoa);
	var titulo7=document.createTextNode("ESTADO");
		var texto7=document.createTextNode(datos[i].estado);
		elementoa.appendChild(titulo7);
	              elementodiv7.appendChild(texto7);
				  
				  
//////
var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr.appendChild(elementotd);
				  
				    	var elementodiv8=document.createElement('div');
			 elementodiv8.setAttribute("class","col-xs-12");
			    elementotd.appendChild(elementodiv8);
				  
				  var elementoa=document.createElement('h5');
				  var elemtoa=document.createElement('button');
				  elemtoa.setAttribute("onClick","abrir_dialog();");
				 elementodiv8.appendChild(elementoa);
				 
				 
	
		var texto8=document.createTextNode("Ver Diagnostico");
		elemtoa.appendChild(texto8);
	              elementodiv8.appendChild(elemtoa);

				  
				  var obj=document.getElementById('contenido');
        obj.appendChild(elementotr);
				  
				  
 var elementotr2=document.createElement('tr');
	elementotr2.setAttribute("class","tablaarticulos1");
	 	elementotr2.setAttribute("height","80px");

		   /////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr2.appendChild(elementotd);
			
			
			var elementodiv11=document.createElement('div');
			 elementodiv11.setAttribute("class","col-xs-12");
			  elementotd.appendChild(elementodiv11); 
				
				var elementoa=document.createElement('h4');
				elementoa.setAttribute("style","color:#039");
				 elementodiv8.appendChild(elementoa);
			
	var texto11=document.createTextNode(datos[i].diagnostico);
	 	 elementodiv11.appendChild(texto11);
	 
	 var obj2=document.getElementById('diagnostico');
        obj2.appendChild(elementotr2);
   	  	 		 		
	/////
 var elementotr3=document.createElement('tr');
	elementotr3.setAttribute("class","tablaarticulos1");
	 	elementotr3.setAttribute("height","80px");

		   /////
		   var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr3.appendChild(elementotd);
			
			
			var elementodiv9=document.createElement('div');
			 elementodiv9.setAttribute("class","col-xs-12");
			  elementotd.appendChild(elementodiv9); 
				
				var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv9.appendChild(elementoa);
	var titulo9=document.createTextNode("COSTO: ");		
	var texto9=document.createTextNode(datos[i].costo);
	 elementoa.appendChild(titulo9);
	 elementodiv9.appendChild(texto9);
	 
	  var elementotd=document.createElement('td');
		elementotd.setAttribute("class","tablaarticulos1");
			elementotr3.appendChild(elementotd);
			
			
			var elementodiv10=document.createElement('div');
			 elementodiv10.setAttribute("class","col-xs-12");
			  elementotd.appendChild(elementodiv10); 
				
				var elementoa=document.createElement('h5');
				elementoa.setAttribute("style","color:#039");
				 elementodiv10.appendChild(elementoa);
	var titulo10=document.createTextNode("FECHA: ");		
	var texto10=document.createTextNode(datos[i].fecha);
	 elementoa.appendChild(titulo10);
	 elementodiv10.appendChild(texto10);
	 
	 var obj3=document.getElementById('costo');
        obj3.appendChild(elementotr3);	
	 }
	 }
		
		})
	});
	
	
});


/// abrir ventana modal para ver diagnostico
function abrir_dialog() {
      $( "#dialogo" ).dialog({
         width: 590,  <!-- -------------> ancho de la ventana -->
            height: 350,<!--  -------------> altura de la ventana -->
            show: "scale", <!-- -----------> animación de la ventana al aparecer -->
            hide: "scale", <!-- -----------> animación al cerrar la ventana -->
            resizable: "false", <!-- ------> fija o redimensionable si ponemos este valor a "true" -->
            position: "center",
		  modal: true,
		  
      });
    }
  

//// Imprimir Orden


function cargar(){
    $.post("../controladora/controladora.php",{funcion:4},function(respuesta){
		
		 var datos= jQuery.parseJSON(respuesta); 	
     for (var i in datos)
	 {
		 var elementotr=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].numeroorden);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj=document.getElementById("numeroOrden");
        obj.appendChild(elementotr);
		
		////
		var elementotr1=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr1.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].nombre);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj1=document.getElementById("nombreCli");
        obj1.appendChild(elementotr1);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].telefono);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("telC");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].articulo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("articuloC");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].modelo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("modeloC");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].marca);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("marcaC");
        obj2.appendChild(elementotr2);
		
		///
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].serie);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("serieC");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].activofijo);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("activofijoC");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].ot);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("otC");
        obj2.appendChild(elementotr2);
		
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].problemareportado);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("problema");
        obj2.appendChild(elementotr2);
		
		////
		var elementotr2=document.createElement('tr');
	
	 	   // creacion primer td y se lo asigno al padre tr
		   var elementotd=document.createElement('td');
			elementotr2.appendChild(elementotd); 
    	var texto=document.createTextNode(datos[i].notas);
	         elementotd.appendChild(texto);
			 		 
			 
			 var obj2=document.getElementById("notas");
        obj2.appendChild(elementotr2);
		
	 }
		});
}