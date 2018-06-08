<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
     $( "#confirm" ).dialog({
  autoOpen: false,
  resizable: false,
  height:200,
  modal: true,
  buttons: {
   "Confirmar": function() {
    $('#formventas').submit();
   },
   'Cancelar': function() {
    $( this ).dialog( "close" );
   }
  }
 });
 $( "#ventas" ).click(function() {
  $( "#confirm" ).dialog( "open" );
 });
     });


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
  <a href="vender.php"><span class="w3-text-red"><strong>Vender</strong></span></a>
  <a href="modificar.php"><span class="w3-text-red"><strong>Modificar</strong></span></a>
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
      <a href="<?=$_SERVER['PHP_SELF']?>"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">Eliminar</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" style="position:static">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
 <h4>Si quieres <strong>Eliminar</strong> un Producto sigue estos pasos:</h4><br>
  <ol class="d">
  <li>Introduce la Referencia del Producto</li></ol>
  <form method="post" name="formventas" action="<?=$_SERVER['PHP_SELF']?>" id="ventas">
						<p><br>		<br>
						  <label class="w3-label w3-validate" for="ref" >Referencia del Producto </label>
    <div align="center"> <select name="ref" class="w3-inputregistrar" style="width:150px; text-align-last:center; padding:3px;">
    
    <?PHP 
		include ("../conectar.php");
		$db = conectaDb();
		$consulta="SELECT `ref`AS ref FROM `productos`";
		$result = $db->query($consulta);
		foreach ($result as $valor){	
		
			
			echo "<option>$valor[ref]</option>";
			
			}
	?>
    </select></div>
						  <br><br>
                         
    <div align="center"> Una vez eliminado el Producto no hay marcha atrás.<br>Tendrás que volver a registrar el Producto.</div>
						  <br><br><p>
                    			<br><p>		
</div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px; background-image:url(../img/logo/plataplomo.gif); background-size:100% 100%; background-repeat:no-repeat;">
 <br><br><br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  style="opacity:0.0; height:121px; width:145px;"></button>
 
  </div>
</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="padding-top:300px">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ATENCIÓN <i class="fa fa-warning" style="font-size:32px;color:red;"></i></h4>
        </div>
        <div class="modal-body">
          <p>Si eliminas este Producto también se eliminarán los Artículos relacionados.<br><br>¿Estás seguro de que quieres eliminar este Producto?</p>
        </div>
        <div class="modal-footer">
          <input type="submit" name="ventas" value="Sí" id="ventas"> <input type="submit" value="No" data-dismiss="modal">

        </div>
      </div>
      
    </div>
  </div>
  


<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:424px">
  <img src="../img/plataplomo1.jpg" width="300" height="270"><br><br>



<?PHP 
				if (isset($_REQUEST['ventas']))
											{
				/*OBTENEMOS LAS VARIABLES DEL FORM*/
												
				$ref = $_REQUEST['ref'];
				
				
				echo "<audio id='audio' style='display:none;' src='../img/plataplomo.mp3' controls autoplay  onloadeddata='setHalfVolume()'></audio>";
				
				
				/*COMPROBAMOS SI LA REF DEL PRODUCTO ESTA EN LA BASE DE DATOS TABLA PRODUCTOS*/
		
		$consulta="SELECT COUNT(idproducto) as cuenta FROM `productos` WHERE `ref`='$ref'";
		
		$result = $db->query($consulta);
		foreach ($result as $valor)
		{}
		$cuenta=$valor["cuenta"]; 
	

		if ($cuenta == 0){
			echo"<br><br>El Producto con REF: <strong>$ref</strong> ya no se encuentra en la Base de Datos.";

		}

else{
				
				/*PRIMERO OBTENEMOS EL ID DEL PRODUCTO GRACIAS A LA REF*/
				
			$consulta="SELECT `idproducto` FROM `productos` WHERE `ref`='$ref'";
			
			if ($result = $db->query($consulta)){
				foreach ($result as $valor)
				{}
				$idproducto=$valor["idproducto"]; 
			}
													
													
			
			
				
				$consulta="DELETE FROM `productos` WHERE `ref`='$ref' AND `idproducto`='$idproducto'";
				
								
				if ($db->query($consulta)){
					
				$consulta="SELECT COUNT(idproducto) as cuenta FROM `productos`";	
				if ($result = $db->query($consulta)){
				foreach ($result as $valor)
				{}
				$total=$valor["cuenta"]; 
					
			echo"<br>Se ha eliminado el Producto con REF: <span class='rojo'><strong>$ref</strong></span>. ¡Está bien!<br><br>Aún te quedan un total de <strong>$total</strong> Producto(s)";
			
			
			
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

