<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
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

function mostrar(){

if (document.form.tipo[0].checked == true) {

document.getElementById('medida').style.display='block';
document.getElementById('color').style.display='none';
document.getElementById('sexo').style.display='none';

													}

if (document.form.tipo[1].checked == true) {

document.getElementById('medida').style.display='block';
document.getElementById('color').style.display='block';
document.getElementById('sexo').style.display='none';

													}
													
if (document.form.tipo[2].checked == true) {

document.getElementById('medida').style.display='block';
document.getElementById('color').style.display='block';
document.getElementById('sexo').style.display='none';

													}																										
													 
													 
if (document.form.tipo[3].checked == true) {

document.getElementById('medida').style.display='none';
document.getElementById('color').style.display='none';
document.getElementById('sexo').style.display='none';

													}
													
													
if (document.form.tipo[4].checked == true) {

document.getElementById('medida').style.display='block';
document.getElementById('color').style.display='block';
document.getElementById('sexo').style.display='block';

													}													
													
													
if (document.form.tipo[5].checked == true) {

document.getElementById('medida').style.display='none';
document.getElementById('color').style.display='block';
document.getElementById('sexo').style.display='none';

													}													

if (document.form.tipo[6].checked == true) {

document.getElementById('medida').style.display='block';
document.getElementById('color').style.display='block';
document.getElementById('sexo').style.display='none';

													} 
													 
													 
if (document.form.tipo[7].checked == true) {

document.getElementById('medida').style.display='none';
document.getElementById('color').style.display='none';
document.getElementById('sexo').style.display='none';

													}													 																								 
}


</script>
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
 <h1 class="w3-xxxlarge w3-text-teal"><span class="w3-text-white">MENÚ</span></h1>
  <a href="../index.php"><span class="w3-text-red"><strong>Plata o Plomo</strong></span></a>
  <a href="vender.php"><span class="w3-text-red"><strong>Vender</strong></span></a>
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
      <a href="<?=$_SERVER['PHP_SELF']?>"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">REGISTRAR</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
 <h4>Para <strong>Registrar</strong> un Producto sigue estos pasos:</h4><br>
  <ol class="d">
  <li>Introduce el nombre del Producto y su Referencia</li></ol>
  <form method="post" name="form" action="<?=$_SERVER['PHP_SELF']?>" id="form">
						<p><br>	<br>	
						 <label class="w3-label w3-validate" for="ref">Nombre del Producto</label>
    <div align="center"> <input type="text" name="nombre" style="text-align:center" required id="nombre" class="w3-inputregistrar" /></div>
						  <br><br>
                           <label class="w3-label w3-validate" for="ref">Referencia</label>
    <div align="center"> <input type="text" name="ref" style="text-align:center"  required id="ref" class="w3-inputregistrar" /></div>
						  <br><br><p>
                    			<br><p>		
</div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
  <h4>Selecciona el tipo de Producto:</h4><br>
						<p><br>
   	<table width="0%" border="0" cellspacing="0" cellpadding="10">
  <tr>
   
    <td><input id="tablas" class="w3-radio" type="radio"  name="tipo"  onClick="mostrar();changeTextpulgadas(this.Medida)" value="1" required>
    <label class="w3-validate">Tabla</label></td>
    
    <td> <input id="ejes" class="w3-radio" type="radio"  name="tipo"   onClick="mostrar();changeTextpulgadas(this.Medida)" value="2">
    <label class="w3-validate">Ejes</label></td>
    
    <td><input id="ruedas" class="w3-radio" type="radio"  name="tipo"   onClick="mostrar();changeTextmm(this.Medida)" value="3">
    <label class="w3-validate">Ruedas</label></td>
    
    <td>    <input id="rodamientos" class="w3-radio"  type="radio" name="tipo"   onClick="mostrar()" value="4">
    <label class="w3-validate">Rodamientos</label>
</td>
    
  </tr>
  <tr>
  
    <td>  <input id="camisetas" class="w3-radio" type="radio"  name="tipo"   onClick="mostrar();talla()" value="5">
    <label class="w3-validate">Camiseta</label></td>
    
    <td><input id="gorra" class="w3-radio" type="radio"   name="tipo"   onClick="mostrar()" value="6">
    <label class="w3-validate">Gorra</label>
</td>
    
    <td><input id="calcetines" class="w3-radio" type="radio"  name="tipo"   onClick="mostrar();changeText(this.Medida)" value="7">
    <label class="w3-validate">Calcetines</label>
</td>
   
    <td><input id="accesorios" class="w3-radio" type="radio"  name="tipo"   onClick="mostrar()" value="8">
    <label class="w3-validate">Accesorios</label></td>
    
    
    
  </tr>
</table>
<br><br>
<?PHP


	
	if (isset($_REQUEST['registrar']))
{

		/*ASIGNAMOS LOS DATOS DEL FORM A VARIABLES*/
		
		include ("../conectar.php");
		$db = conectaDb();
		
		$nombre = $_REQUEST['nombre'];
		$ref = $_REQUEST['ref'];
		$idarticulo = $_REQUEST['tipo'];
		$marca = $_REQUEST['marca'];
		$origen = $_REQUEST['origen'];
		$pvd = $_REQUEST['pvd'];
		$pvp = $_REQUEST['pvp'];
		$cantidad = $_REQUEST['cantidad'];
		$medida = $_REQUEST['medida'];
		$color = $_REQUEST['color'];
		$sexo = $_REQUEST['sexo'];
			
		
		
		/*COMPROBAMOS SI LA REF DEL PRODUCTO ESTA EN LA BASE DE DATOS TABLA PRODUCTOS*/
		
		$consulta="SELECT COUNT(ref) as cuenta FROM `productos` WHERE `ref`='$ref'";
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		
	

		if ($cuenta == 0){
			
			/*SI LA REFERENCIA NO EXISTE; ENTONCES REGISTRAMOS EL PRODUCTO*/
			
		$consulta="INSERT INTO `productos` (`idproducto`,`idarticulo`,`nombre`,`ref`) VALUES ('','$idarticulo','$nombre','$ref')";
			
			
					if ($result = $db->query($consulta)){} else {
					
					echo "El Producto \"<span class='rojo'><strong>$nombre</strong></span>\" no se registro con éxito. Inténtelo de nuevo más tarde.";
															}
						}
						
			else {
			echo "El Producto \"<span class='rojo'><strong>$nombre</strong></span>\" con REF: <strong>$ref</strong> ya estaba registrado.";	
				}
				
		/*OBTENEMOS EL ID DEL ÚLTIMO PRODUCTO REGISTRADO*/
		
		$consulta="SELECT `idproducto` FROM `productos` WHERE `ref`='$ref' order by `idproducto` DESC LIMIT 1";		
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		
		$idproducto=$valor["idproducto"]; 
		
		
		/*CON EL TIPO DE ARTICULO ASIGNAMOS A SU TABLA CORRESPONDIENTE*/
		/*FUNCIONES PARA CADA TIPO DE TABLA SEGUN EL TIPO*/
		
		
		switch ($idarticulo) {
			
    case "1":
        
		$sql="INSERT INTO `tablas`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `medida`, `origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$medida','$origen','$pvd','$pvp','$cantidad')";
		$tipo="tablas";
        break;
		
    case "2":
        
		$sql="INSERT INTO `ejes`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `medida`,`color`,`origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$medida','$color','$origen','$pvd','$pvp','$cantidad')";
		$tipo="ejes";
        break;
		
    case "3":
        
		$sql="INSERT INTO `ruedas`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `medida`,`color`,`origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$medida','$color','$origen','$pvd','$pvp','$cantidad')";
		$tipo="ruedas";
        break;
		
	case "4":
        
		$sql="INSERT INTO `rodamientos`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$origen','$pvd','$pvp','$cantidad')";
		$tipo="rodamientos";
        break;
		
    case "5":
        
		$sql="INSERT INTO `camisetas`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `talla`,`color`,`sexo`,`origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$medida','$color','$sexo','$origen','$pvd','$pvp','$cantidad')";
		$tipo="camisetas";
        break;
		
    case "6":
        
		$sql="INSERT INTO `gorras`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `color`,`origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$color','$origen','$pvd','$pvp','$cantidad')";
		$tipo="gorras";
        break;
		
	case "7":
        
		$sql="INSERT INTO `calcetines`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `medida`,`color`,`origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$medida','$color','$origen','$pvd','$pvp','$cantidad')";
		$tipo="calcetines";
        break;
		
    case "8":
        
		$sql="INSERT INTO `accesorios`(`idproducto`, `idarticulo`, `marca`, `ref`, `nombre`, `origen`, `pvd`, `pvp`, `cantidad`) VALUES ('$idproducto','$idarticulo','$marca','$ref','$nombre','$origen','$pvd','$pvp','$cantidad')";
		$tipo="accesorios";
        break;
		
}
		
		/*PARA QUE NO SE PUEDA REGISTRAR UNA MISMA REF EN DIFERENCES TABLAS DE ARTICULOS 			         COMPARAMOS LA REF Y EL ARTICULO DE LA BASE DE DATOS CON LOS QUE TENEMOS*/
		
		$consulta="SELECT `idarticulo` FROM `productos` WHERE `ref`='$ref'";
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		$idbd=$valor["idarticulo"]; 
		
		/*ASOCIAMOS EL ID DEL ARTICULO A SU REFERENCIA Y LO COMPARAMOS CON EL ID DEL         PRODUCTO QUE ESTAMOS REGISTRANDO*/
		
		if ($idbd==$idarticulo){
			
		/*COMPROBAMOS SI LA REF DEL ARTICULO ESTA EN LA BASE DE DATOS */
		
		$consulta="SELECT COUNT(ref) as cuenta FROM `$tipo` WHERE `ref`='$ref' AND `idarticulo`='$idarticulo' AND `nombre`='$nombre'";
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		$cuenta=$valor["cuenta"]; 
		
		
		/*SI NO EXISTE EL PRODUCTO EN LA TABLA DE SU ARTICULO PUES LO INSERTAMOS*/
		
		if ($cuenta==0){
			
			if ($result = $db->query($sql)){
				
				echo "<audio id='audio' style='display:none;' src='../img/plataplomo.mp3' controls autoplay  onloadeddata='setHalfVolume()'></audio>";
				echo"<br>El registro del Artículo \"<span class='rojo'><strong>$nombre</strong></span>\" con REF: <strong>$ref</strong> ha sido un éxito.";
												} 
			
								else {
										echo "<br>El Artículo no se registro con éxito. Inténtelo de nuevo más tarde.";
										}
						
						}
		
		/*EN CAMBIO SI EL ARTICULO EXISTE EN LA TABLA LO QUE HACEMOS ES UN UPDATE*/	
		
		
		else{
							
		/*LO PRIMERO ES SABER CUANTOS ARTICULOS DE ESA REFERENCIA TENEMOS*/
		
		
		$consulta = "SELECT SUM(cantidad) AS suma from `$tipo` WHERE `ref`='$ref' AND `idproducto`='$idproducto'";	
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		$sumabd=$valor["suma"]; 
		$total = $sumabd + $cantidad;
		
		
		/*PASAMOS AL UPDATE*/
		
		$consulta="UPDATE `$tipo` SET `cantidad`='$total' WHERE `ref`='$ref' AND `idproducto`='$idproducto'";
		
		if ($result = $db->query($consulta)){
			
				echo "<audio id='audio' style='display:none;' src='../img/plataplomo.mp3' controls autoplay  onloadeddata='setHalfVolume()'></audio>";
				echo"<br>Se ha actualizado la cantidad del Artículo \"<span class='rojo'><strong>$nombre</strong></span>\".";
												} 
			
								else {
										echo "<br>Parece ser que el registro ha fallado. Inténtelo de nuevo más tarde.";
										}			
																
							
							}
								}
								
							else{
									echo "<br>Parece ser que el registro ha fallado. Inténtelo de nuevo más tarde.";}
		
		
		
		
							
}

?>

<p><br><br>
<input type="submit" class="w3-btn w3-theme" name="registrar" value="Enviar">
  </div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
  <br><br><table width="100%" border="0" cellspacing="5" cellpadding="10">
  <tr>
    <td><label class="w3-label w3-validate" for="marca">Marca</label>
    <div align="center"> <input type="text" name="marca" style="text-align:center" required id="marca" class="w3-inputregistrar" /></div><br>
</td>
    <td><label class="w3-label w3-validate" for="ref">Origen</label>
    <div align="center"> <select name="origen" style="width:210px; height:30px; padding:2px; text-align-last:center" required id="origen" class="w3-inputregistrar" /><option value="Am&eacute;rica">Am&eacute;rica</option>
    				  <option value="Europa">Europa</option></select></div><br>    
</td>
  </tr>
  <tr>
    <td><label class="w3-label w3-validate" for="ref">P.V.D</label>
    <div align="center"> <input type="text" name="pvd" style="text-align:center" required id="pvd" class="w3-inputregistrar" /></div><br>
</td>
    <td><label class="w3-label w3-validate" for="pvp">P.V.P</label>
    <div align="center"> <input type="text" name="pvp" style="text-align:center" required id="pvp" class="w3-inputregistrar" /></div><br>
</td>
  </tr>
  <tr>
    <td><label class="w3-label w3-validate" for="cantidad">Cantidad</label>
    <div align="center"> <input type="number" min="0" style="text-align:center" name="cantidad"  required id="cantidad" class="w3-inputregistrar" /></div><br>
</td>
    <td><div id="medida" style="display:none;"><label class="w3-label w3-validate" name="medida1" id="talla1" for="medida">Medida</label>
    <div align="center"> <input type="text" name="medida" style="text-align:center" id="medida" class="w3-inputregistrar" /></div></div><br>
</td>
  </tr>
  <tr>
    <td><div id="color" style="display:none;"><label class="w3-label w3-validate" for="color">Color</label>
    <div align="center"> <input type="color" name="color"  style="width:206px; height:29px" id="color" class="w3-inputregistrar" /></div></div>
</td>
    <td><div id="sexo" style="display:none;"><label class="w3-label w3-validate" for="sexo">Sexo</label>
    <div align="center"> <select name="sexo" form="form" id="sexo" class="w3-input" style="width:210px; height:30px; padding:2px; text-align-last:center"><option value="Hombre" selected>Hombre</option>
    <option value="Mujer">Mujer</option></select></div></div>
</td>
  </tr>
</table>

  </div>
</div>
</div>

<script>

function talla(){document.getElementById('talla1').innerHTML= 'Talla';}

function changeText(value) {
                document.getElementById('talla1').innerHTML ='Medida';
            }
			
function changeTextmm(value) {
                document.getElementById('talla1').innerHTML ='Medida (mm)';
            }	
			
function changeTextpulgadas(value) {
                document.getElementById('talla1').innerHTML ='Medida (Pulgadas)';
            }						
</script>
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

