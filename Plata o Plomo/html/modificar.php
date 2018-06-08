<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<head>
<?PHP 
		session_start(); 
		ob_start();
		?>
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
  <a href="registrar.php"><span class="w3-text-red"><strong>Registrar</strong></span></a>
  <a href="vender.php"><span class="w3-text-red"><strong>Vender</strong></span></a>
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
      <a href="<?=$_SERVER['PHP_SELF']?>"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">MODIFICAR</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
 <h4>Para <strong>Modificar</strong> un Producto sigue estos pasos:</h4><br>
  <ol class="d">
  <li>Selecciona la Referencia del producto</li></ol>
  <form method="post" name="form" action="<?=$_SERVER['PHP_SELF']?>" id="form">
						<p><br>	<br>	
						
						
	<label class="w3-label w3-validate" for="ref">Referencia del Producto</label>
    
    
    <?PHP 
		
		include ("../conectar.php");
		$db = conectaDb();
		$consulta="SELECT `ref` AS ref FROM `productos`";
		$result = $db->query($consulta);
		
		
		
		if (isset($_REQUEST['enviar']))
{
			$ref = $_REQUEST['ref'];
			foreach ($result as $valor){}
	echo "<div align='center'> <input type='text' name='refe' class='w3-inputregistrar' placeholder='$ref' style='text-align-last:center'>";
			
			
} else {
	
		echo "<div align='center'> <select name='ref' class='w3-inputregistrar' style='width:150px; text-align-last:center; padding:3px'>";
	foreach ($result as $valor){	
		
			
			echo "<option>$valor[ref]</option>";
			
			}
	
	
}
			
			
		if (isset($_REQUEST['enviar']))
{

		/*ASIGNAMOS LOS DATOS DEL FORM A VARIABLES*/
		
		$ref = $_REQUEST['ref'];
		$idarticulo = $_REQUEST['tipo'];
		$medida="";
		$color="";
		$sexo="";
        $_SESSION['idarticulo']=$idarticulo;
		$_SESSION['ref']=$ref;

		

		/*CON EL TIPO DE ARTICULO ASIGNAMOS A SU TABLA CORRESPONDIENTE*/
		/*FUNCIONES PARA CADA TIPO DE TABLA SEGUN EL TIPO*/


		switch ($idarticulo) {
			
    case "1":$tipo="tablas";$color="";break;
	case "2":$tipo="ejes";break;
	case "3":$tipo="ruedas";break;
	case "4":$tipo="rodamientos";break;
	case "5":$tipo="camisetas";break;
	case "6":$tipo="gorras";break;
	case "7":$tipo="calcetines";break;
    case "8":$tipo="accesorios";break;
		
								}  
								
	$_SESSION['tipo']=$tipo;

}	
	?>
    </select></div>
<br>
						  <br><br> 
						  
						  <?PHP 
						  if (isset($_REQUEST['enviar']))
		
{	
						 $consulta="SELECT SUM(`nombre`) AS suma FROM `$tipo` WHERE `ref`= '$ref'";
		
						 $result = $db->query($consulta);
						 foreach ($result as $valor)
						 {}
						 $suma=$valor['suma'];
						 
						 
						 if (empty($nombre)) {
							 
							 $valor['nombre']='Desconocido';
						 }
							 
							
											
								
						 $consulta="SELECT `nombre` FROM `$tipo` WHERE `ref`= '$ref'";
		
						 $result = $db->query($consulta);
						 foreach ($result as $valor)
						 {}
						 $nombre=$valor['nombre'];
						 
						 
						  echo "<label class='w3-label w3-validate' for='nombre'>Nombre del Producto</label>
						  
<div align='center'> <input type='text' name='nombre' style='text-align:center' value='$nombre' id='nombre' class='w3-inputregistrar'></div>";}

?>
						  
						  <p>
                    			<br><p>		
</div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
  <h4>Selecciona el tipo de Producto:</h4><br>
						<p><br>
   	<table width="0%" border="0" cellspacing="0" cellpadding="10">
  <tr>
   
    <td><input id="tablas" class="w3-radio" type="radio"  name="tipo" <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '1'){echo "checked='checked'";} } ?> onClick="mostrar();changeTextpulgadas(this.Medida)" value="1" required>
    <label class="w3-validate">Tabla</label></td>
    
    <td> <input id="ejes" class="w3-radio" type="radio"  name="tipo"  <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '2'){echo "checked='checked'";} } ?> onClick="mostrar();changeTextpulgadas(this.Medida)" value="2">
    <label class="w3-validate">Ejes</label></td>
    
    <td><input id="ruedas" class="w3-radio" type="radio"  name="tipo"  <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '3'){echo "checked='checked'";} } ?> onClick="mostrar();changeTextmm(this.Medida)" value="3">
    <label class="w3-validate">Ruedas</label></td>
    
    <td>    <input id="rodamientos" class="w3-radio"  type="radio" name="tipo" <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '4'){echo "checked='checked'";} } ?>  onClick="mostrar()" value="4">
    <label class="w3-validate">Rodamientos</label>
</td>
    
  </tr>
  <tr>
  
    <td>  <input id="camisetas" class="w3-radio" type="radio"  name="tipo" <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '5'){echo "checked='checked'";} } ?> on onClick="mostrar();talla()" value="5">
    <label class="w3-validate">Camiseta</label></td>
    
    <td><input id="gorra" class="w3-radio" type="radio"   name="tipo"  <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '6'){echo "checked='checked'";} } ?> onClick="mostrar()" value="6">
    <label class="w3-validate">Gorra</label>
</td>
    
    <td><input id="calcetines" class="w3-radio" type="radio"  name="tipo" <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '7'){echo "checked='checked'";} } ?> onClick="mostrar();changeText(this.Medida)" value="7">
    <label class="w3-validate">Calcetines</label>
</td>
   
    <td><input id="accesorios" class="w3-radio" type="radio"  name="tipo"  <?PHP if (isset($_REQUEST['enviar']))
{ $idarticulo = $_REQUEST['tipo']; if ($idarticulo == '8'){echo "checked='checked'";} } ?> onClick="mostrar()" value="8">
    <label class="w3-validate">Accesorios</label></td>
    
    
    
  </tr>
</table>
<br><br>


<p><br><br>

	<?PHP if (isset($_REQUEST['enviar']))
		
{	echo "<input type='submit' class='w3-btn w3-theme-red' name='actualizar'  value='Actualizar'>";}  else
	
{ 	echo "<input type='submit' class='w3-btn w3-theme' name='enviar' value='Enviar'>"; }

	echo "</div></div>";



			if (isset($_REQUEST['enviar']))
{
	
			$consulta="SELECT SUM(cantidad) as suma FROM `$tipo` WHERE `ref`='$ref'";
			
			if ($result = $db->query($consulta)){
				foreach ($result as $valor)
				{}
				$sumabd=$valor["suma"]; 
				
												}
				
				
	/*SI NO HAY SUMA QUIERE DECIR QUE LA REFERENCIA NO CORRESPONDE AL ARTICULO/TABLA*/
												
				if (empty($sumabd)) {
					
				echo "<br><br><br><br><br><br><br><br><br>Parece ser que la REF: <span class='rojo'><strong>$ref</strong></span> no corresponde al Artículo: <strong>$tipo</strong>.";

					
									}else{
	
	
	
		$consulta="SELECT * FROM `$tipo` WHERE `ref`= '$ref'";
		
		if ($result = $db->query($consulta)){
		foreach ($result as $valor)
		{}
			
		$marca = $valor['marca'];
		$origen = $valor['origen'];
		$pvd = $valor['pvd'];
		$pvp = $valor['pvp'];
		$cantidad = $valor['cantidad'];  } else {$marca='';}
		
		
		if ($tipo=='ejes' || $tipo=='ruedas' || $tipo=='camisetas' || $tipo=='gorras' || $tipo=='calcetines'){
			$color = $valor['color'];}
		
		
		if ($tipo=='camisetas'){
		$medida = $valor['talla'];
		$sexo = $valor['sexo'];}
		
		if ($tipo=='tablas' || $tipo=='ejes' || $tipo=='ruedas' || $tipo=='calcetines'){
		$medida = $valor['medida'];}
		
		if ($tipo=='rodamientos' || $tipo=='accesorios'){
			$medida="";}
			
		
		echo "<div class='w3-third'>
  <div class='w3-card-2 w3-padding-top' style='min-height:424px'>
 <br> <br><table width='100%' border='0' cellspacing='5' cellpadding='10'>
  <tr>
    <td><label class='w3-label w3-validate' for='marca'>Marca</label>
    <div align='center'> <input type='text' name='marca' value='$marca' style='text-align:center' id='marca' class='w3-inputregistrar' /></div><br>
</td>
    <td><label class='w3-label w3-validate' for='ref'>Origen</label>
    <div align='center'> <select name='origen' style='width:210px; height:30px; padding:2px; text-align-last:center' id='origen' class='w3-inputregistrar' /><option value='Am&eacute;rica' selected>Am&eacute;rica</option>
    				  <option value='Europa'>Europa</option></select></div><br>    
</td>
  </tr>
  <tr>
    <td><label class='w3-label w3-validate' for='ref'>P.V.D</label>
    <div align='center'> <input type='text' name='pvd' style='text-align:center' value='$pvd'  id='pvd' class='w3-inputregistrar' /></div><br>
</td>
    <td><label class='w3-label w3-validate' for='pvp'>P.V.P</label>
    <div align='center'> <input type='text' name='pvp' style='text-align:center' id='pvp' value='$pvp' class='w3-inputregistrar' /></div><br>
</td>
  </tr>
  <tr>
    <td><label class='w3-label w3-validate' for='cantidad'>Cantidad</label>
    <div align='center'> <input type='number' min='0' style='text-align:center' name='cantidad' value='$cantidad'  id='cantidad' class='w3-inputregistrar' required/></div><br>
</td>
    <td><div id='medida' style='display:none;'><label class='w3-label w3-validate' id='talla1' for='medida'>Medida</label>
    <div align='center'> <input type='text' name='medida' value='$medida' style='text-align:center' id='medida' class='w3-inputregistrar' /></div></div><br>
</td>
  </tr>
  <tr>
    <td><div id='color' style='display:none;'><label class='w3-label w3-validate' for='color'>Color</label>
    <div align='center'> <input type='color' name='color' value='$color' style='width:206px; height:29px' id='color' class='w3-inputregistrar' /></div></div>
</td>
    <td><div id='sexo' style='display:none;'><label class='w3-label w3-validate' for='sexo'>Sexo</label>
    <div align='center'> <select name='sexo' form='form' id='sexo' class='w3-input' style='width:210px; height:30px; padding:2px; text-align-last:center'><option value='Hombre'"; if ($sexo=='Hombre'){echo "selected";} echo ">Hombre</option>
    <option value='Mujer'"; if ($sexo=='Mujer'){echo "selected";} echo ">Mujer</option></select></div></div>
</td>
  </tr>
</table>

  </div>";
		
									

			
	}								
									
													
						
}else{

?>




<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
 <br> <br><table width="100%" border="0" cellspacing="5" cellpadding="10">
  <tr>
    <td><label class="w3-label w3-validate" for="marca">Marca</label>
    <div align="center"> <input type="text" name="marca" style="text-align:center" id="marca" class="w3-inputregistrar" /></div><br>
</td>
    <td><label class="w3-label w3-validate" for="ref">Origen</label>
    <div align="center"> <select name="origen" style="width:210px; height:30px; padding:2px; text-align-last:center" id="origen" class="w3-inputregistrar" />
					  <option value="Am&eacute;rica">Am&eacute;rica</option>
    				  <option value="Europa">Europa</option></select></div><br>    
</td>
  </tr>
  <tr>
    <td><label class="w3-label w3-validate" for="ref">P.V.D</label>
    <div align="center"> <input type="text" name="pvd" style="text-align:center"  id="pvd" class="w3-inputregistrar" /></div><br>
</td>
    <td><label class="w3-label w3-validate" for="pvp">P.V.P</label>
    <div align="center"> <input type="text" name="pvp" style="text-align:center" id="pvp" class="w3-inputregistrar" /></div><br>
</td>
  </tr>
  <tr>
    <td><label class="w3-label w3-validate" for="cantidad">Cantidad</label>
    <div align="center"> <input type="number" min="0" style="text-align:center" name="cantidad"  id="cantidad" class="w3-inputregistrar" /></div><br>
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
  <?PHP } 
 
  if (isset($_REQUEST['actualizar']))
{
	$marca = $_REQUEST['marca'];
	$origen = $_REQUEST['origen'];
	$pvd = $_REQUEST['pvd'];
	$pvp = $_REQUEST['pvp'];
	$cantidad = $_REQUEST['cantidad'];
	$medida = $_REQUEST['medida'];
	$nombre = $_REQUEST['nombre'];
	$tipo = $_SESSION['tipo'];	
	$idarticulo = $_SESSION['idarticulo'];
	$color = $_REQUEST['color'];
	$sexo = $_REQUEST['sexo'];
	
	$ref=$_SESSION['ref'];
	
	switch ($idarticulo) {
			
    case "1":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`medida`='$medida',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad' WHERE `ref`='$ref'";
		
        break;
		
    case "2":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`medida`='$medida',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad', `color`='$color' WHERE `ref`='$ref'";
	
        break;
		
    case "3":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`medida`='$medida',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad', `color`='$color' WHERE `ref`='$ref'";
		
        break;
		
	case "4":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad' WHERE `ref`='$ref'";
		
        break;
		
    case "5":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`talla`='$medida',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad', `color`='$color', `sexo`='$sexo' WHERE `ref`='$ref'";
		
        break;
		
    case "6":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad', `color`='$color' WHERE `ref`='$ref'";
		
        break;
		
	case "7":
        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`medida`='$medida',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad', `color`='$color' WHERE `ref`='$ref'";
		
        break;
		
    case "8":
        	        
		$sql="UPDATE `$tipo` SET `marca`='$marca',`origen`='$origen',`pvd`='$pvd',`pvp`='$pvp',`cantidad`='$cantidad' WHERE `ref`='$ref'";
		
        break;
		
}

			

			if ($result = $db->query($sql)){
			
				echo "<audio id='audio' style='display:none;' src='../img/plataplomo.mp3' controls autoplay onloadeddata='setHalfVolume()'></audio>";
				
												} 
			
								else {
										
										}	}
  ?>
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
 <br> <br><h3><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h3><br>
  <p>Plata o Plomo &copy; Marc Salvador &nbsp; &nbsp; &nbsp; &nbsp; C/ Taulat 119, Barcelona &nbsp; &nbsp; &nbsp; &nbsp; Creado por Sergio Mart&iacute;nez</p>
  <div style="position:static;bottom:150px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Ir arriba</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>  
  </div>
</footer></div>

</body>
</html>

