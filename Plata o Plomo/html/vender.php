<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript">


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<head>
<!-- Script for Sidenav, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "100%";
    x.style.textAlign = "center";
    x.style.fontSize = "50px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}


function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
      document.getElementById("demoprgr").innerHTML = width * 1  + '%';
    }
  }
}


    function setHalfVolume() {
        var myAudio = document.getElementById("audio");
        myAudio.volume = 0.6;
    }

</script>
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
  <h1 class="w3-xxxlarge w3-text-teal"><span class="w3-text-white">MENÚ</span></h1>
  <a href="../index.php"><span class="w3-text-red"><strong>Plata o Plomo</strong></span></a>
  <a href="registrar.php"><span class="w3-text-red"><strong>Registrar</strong></span></a>
  <a href="modificar.php"><span class="w3-text-red"><strong>Modificar</strong></span></a>
  <a href="eliminar.php"><span class="w3-text-red"><strong>Eliminar</strong></span></a>
  <a href="estadisticas.php"><span class="w3-text-red"><strong>Estadísticas</strong></span></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme"><span class="w3-text-red"><strong>Cerrar</strong></span> <i class="fa fa-remove"></i></a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i>
  <div class="w3-center">
  <h4>SISTEMA DE CONTROL DE STOCK</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h1>
    <div class="w3-padding-32">
      <a href="<?=$_SERVER['PHP_SELF']?>"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">VENDER</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" style="position:static">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
 <h4>Si has <strong>Vendido</strong> un Producto sigue estos pasos:</h4><br>
  <ol class="d">
  <li>Introduce la Referencia del Producto y su Cantidad</li></ol>
  <form method="post" name="ventas" action="<?=$_SERVER['PHP_SELF']?>" id="ventas">
						<p><br>		<br>
						  <label class="w3-label w3-validate" for="ref">Referencia del Producto</label>
    <div align="center"> <select name="ref" class="w3-inputregistrar" style="width:150px; text-align-last:center; padding:3px;">
    
    <?PHP 
		include ("../conectar.php");
		$db = conectaDb();
		$consulta="SELECT `ref` AS ref FROM `productos`";
		$result = $db->query($consulta);
		foreach ($result as $valor){	
		
			
			echo "<option>$valor[ref]</option>";
			
			}
	?>
    </select></div>
						  <br><br>
                           <label class="w3-label w3-validate" for="cantidad">Cantidad</label>
    <div align="center"> <input type="number" style="text-align:center" name="cantidad"  required id="cantidad" class="w3-inputregistrar" /></div>
						  <br><br><p>
                    			<br><p>		
</div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px; background-image:url(../img/logo/plataplomo.gif); background-size:100% 100%; background-repeat:no-repeat;">
 <br><br><br>
  <input type="submit" name="ventas" value="Vender" style="opacity:0.0; height:121px; width:145px;">
  </div>
</div>


<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
  <h4>Selecciona el tipo de Producto:</h4><br>
  
  
						<p><br>
                        
   	<table width="0%" border="0" cellspacing="0" cellpadding="10">
  <tr>
   
    <td><input id="tabla" class="w3-radio" type="radio"  name="tipo" value="1" required>
    <label class="w3-validate">Tabla</label></td>
    
    <td> <input id="ejes" class="w3-radio" type="radio"  name="tipo" value="2">
    <label class="w3-validate">Ejes</label></td>
    
    <td><input id="ruedas" class="w3-radio" type="radio"  name="tipo" value="3">
    <label class="w3-validate">Ruedas</label></td>
    
    <td>    <input id="rodamientos" class="w3-radio"  type="radio" name="tipo" value="4">
    <label class="w3-validate">Rodamientos</label>
</td>
    
  </tr>
  <tr>
  
    <td>  <input id="camiseta" class="w3-radio" type="radio"  name="tipo" value="5">
    <label class="w3-validate">Camiseta</label></td>
    
    <td><input id="gorra" class="w3-radio" type="radio"   name="tipo" value="6">
    <label class="w3-validate">Gorra</label>
</td>
    
    <td><input id="calcetines" class="w3-radio" type="radio"  name="tipo" value="7">
    <label class="w3-validate">Calcetines</label>
</td>
   
    <td><input id="accesorios" class="w3-radio" type="radio"  name="tipo" value="8">
    <label class="w3-validate">Accesorios</label></td>
    
  </tr>
</table><br><br>
<?PHP 
				if (isset($_REQUEST['ventas']))
											{
				/*OBTENEMOS LAS VARIABLES DEL FORM*/
												
				$ref = $_REQUEST['ref'];
				$idarticulo = $_REQUEST['tipo'];
				$cantidad = $_REQUEST['cantidad'];
				
			
				/*PASAMOS EL TIPO DE ARTICULO A LETRAS*/
				
				switch ($idarticulo) {
		
			
    case "1":
        
		$tipo="tablas";
        break;
		
    case "2":
	
		$tipo="ejes";
        break;	
			
    case "3":
        
		$tipo="ruedas";
        break;
		
    case "4":
	
		$tipo="rodamientos";
        break;	
			
    case "5":
        
		$tipo="camisetas";
        break;
		
    case "6":
	
		$tipo="gorras";
        break;	
			
    case "7":
        
		$tipo="calcetines";
        break;
		
    case "8":
	
		$tipo="accesorios";
        break;
				}
				
				/*PRIMERO SUMAMOS LA CANTIDAD DE ARTICULOS QUE TENEMOS GRACIAS A LA REF*/
				
			$consulta="SELECT SUM(cantidad) as suma , `idproducto` FROM `$tipo` WHERE `ref`='$ref'";
			
			if ($result = $db->query($consulta)){
				foreach ($result as $valor)
				{}
				$sumabd=$valor["suma"]; 
				$idproducto=$valor["idproducto"]; 
												}
				
				
	/*SI NO HAY SUMA QUIERE DECIR QUE LA REFERENCIA NO CORRESPONDE AL ARTICULO/TABLA*/
												
				if (empty($sumabd)) {
					
				echo "<br>Parece ser que la REF: <span class='rojo'><strong>$ref</strong></span> no corresponde al Artículo: <strong>$tipo</strong>.";

					
									}
else{
			$total=$sumabd-$cantidad;
			
			/*COMPROBAMOS QUE EL TOTAL NO SEA MENOR A 0, QUIERE DECIR QUE NO PODEMOS VENDER MAS ARTICULOS DE LOS QUE TENEMOS*/
			
			if ($total<0){
				echo"<br>Estás intentando vender más Artículos (<strong>$cantidad</strong>) de los que tienes (<strong>$sumabd</strong>)";
				
						}
			/*FINALMENTE HACEMOS EL UPDATE CON LA NUEVA CANTIDAD*/
			
			else{
				
				$consulta="UPDATE `$tipo` SET `cantidad`='$total' WHERE `ref`='$ref'";
				
								
				if ($db->query($consulta)){
					
			echo "<audio id='audio' style='display:none;' src='../img/plataplomo.mp3' controls autoplay  onloadeddata='setHalfVolume()'></audio>";		
			echo"<br>La venta del Artículo con REF: <span class='rojo'><strong>$ref</strong></span> ha sido un éxito. ¡Sigue así!<br><br>Te quedan un total de <strong>$total</strong> Artículo(s)";
			
			
			
			
			/*SI TODO HA SALIDO BIEN REGISTRAMOS LA VENTA EN LA TABLA VENTAS*/
			
/*ANTES DE ESO OBTENEMOS LOS PRECIOS PVD Y PVP DEL ARTICULO PARA SABER CUANTO HEMOS GANADO (BENEFICIO)*/

			$consulta="SELECT `nombre`,`pvd` , `pvp` FROM `$tipo` WHERE `ref`='$ref'";
			
			if ($result = $db->query($consulta)){
				foreach ($result as $valor)
				{}
				$nombre=$valor["nombre"];
				$pvd=$valor["pvd"]; 
				$pvp=$valor["pvp"]; 
												}
												
			/*CALCULAMOS EL BENEFICIO*/
			
			$diferencia= $pvp-$pvd;
			$beneficio = $diferencia*$cantidad;
			$precio = $pvp*$cantidad;
			
			$consulta="INSERT INTO `ventas` (`idventa`,`idproducto`,`idarticulo`, `nombre`,`ref`, `cantidad`, `precio`,`beneficio`) VALUES ('','$idproducto','$idarticulo','$nombre','$ref','$cantidad','$precio','$beneficio')";
			
			
			/*INSERTAMOS LOS DATOS*/
			
			if ($result = $db->query($consulta)){} else {
					
					echo "La venta del Artículo con REF: <strong>$ref</strong></span>\" no se 	realizó con éxito. Inténtelo de nuevo más tarde.";
															}
						
			
			
			
			

		 }else{
			 echo"<br>Lo sentimos pero no se ha podido realizar la venta. Inténtelo de nuevo más tarde.";
			  }
				
				}
	}
			
		
											}

?>
  </div>
</div>
</div>


<!-- Footer -->
<div align="center"><footer class="w3-container w3-theme-dark w3-padding-16">
  <br><br><h3><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h3><br>
  <p>Plata o Plomo &copy; Marc Salvador &nbsp; &nbsp; &nbsp; &nbsp; C/ Taulat 119, Barcelona &nbsp; &nbsp; &nbsp; &nbsp; Creado por Sergio Mart&iacute;nez</p>
  <div style="position:static;bottom:150px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Ir arriba</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>  
  </div>
</footer></div>

</body>
</html>

