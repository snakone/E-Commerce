<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
<h1 class="w3-xxxlarge w3-text-teal"><span class="w3-text-white">MENÚ</span></h1>
<a href="html/registrar.php"><span class="w3-text-red"><strong>Registrar</strong></span></a>
 <a href="html/vender.php"><span class="w3-text-red"><strong>Vender</strong></span></a>
 <a href="html/modificar.php"><span class="w3-text-red"><strong>Modificar</strong></span></a>
 <a href="html/eliminar.php"><span class="w3-text-red"><strong>Eliminar</strong></span></a>
 <a href="html/estadisticas.php"><span class="w3-text-red"><strong>Estadísticas</strong></span></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme"><span class="w3-text-red"><strong>Cerrar</strong></span> <i class="fa fa-remove"></i></a></nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i>
  <div class="w3-center">
  <h4>SISTEMA DE CONTROL DE STOCK</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h1>
    <div class="w3-padding-32">
      <a href="<?=$_SERVER['PHP_SELF']?>"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">SKATE SHOP POBLENOU</button></a>
    </div>
  </div>
</header>
			<?PHP include ("conectar.php");?>
<br>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-btn testbtn m2 w3-red" onclick="openArticulo(event, 'Tablas')">Tablas/Decks</a></li>
  <li><a class="w3-btn testbtn m2 w3-green" onclick="openArticulo(event, 'Ejes')">Ejes/Trucks</a></li>
  <li><a class="w3-btn testbtn m2 w3-orange" onclick="openArticulo(event, 'Ruedas')">Ruedas/Wheels</a></li>
  <li><a class="w3-btn testbtn m2 w3-teal" onclick="openArticulo(event, 'Rodamientos')">Rodamientos/Bearings</a></li>
  <li><a class="w3-btn testbtn m2 w3-blue" onclick="openArticulo(event, 'Camisetas')">Camisetas/T-Shirt</a></li>
  <li><a class="w3-btn testbtn m2 w3-yellow" onclick="openArticulo(event, 'Gorras')">Gorras/Caps</a></li>
  <li><a class="w3-btn testbtn m2 w3-black" onclick="openArticulo(event, 'Calcetines')">Calcetines/Socks</a></li>
  <li><a class="w3-btn testbtn m2 w3-pink" onclick="openArticulo(event, 'Accesorios')">Accesorios</a></li>
  
  <li class="espacio">&nbsp;</li>
  
  <li><a class="w3-btn testbtn m2 w3-brown" onclick="openArticulo(event, 'Articulos')">Art&iacute;culos</a></li>
  <li><a class="w3-btn testbtn m2 w3-aqua" onclick="openArticulo(event, 'Productos')">Productos</a></li>
  <li><a class="w3-btn testbtn m2 w3-indigo" onclick="openArticulo(event, 'Ventas')">Ventas</a></li>
</ul>



<div id="Tablas" class="w3-container art w3-animate-opacity">
<p><div></div></p></div>


<div id="Ejes" class="w3-container art w3-animate-opacity">
<p><div><iframe name="ejes" width="100%" height="550"  src="js/ejes.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>



<div id="Ruedas" class="w3-container art w3-animate-opacity">
<p><div><iframe name="ruedas" width="100%" height="550"  src="js/ruedas.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>



<div id="Rodamientos" class="w3-container art w3-animate-opacity">
<p><div><iframe name="rodamientos" width="100%" height="550"  src="js/rodamientos.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>


<div id="Camisetas" class="w3-container art w3-animate-opacity">
<p><div><iframe name="camisetas" width="100%" height="550"  src="js/camisetas.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>



<div id="Gorras" class="w3-container art w3-animate-opacity">
<p><div><iframe name="gorras" width="100%" height="550"  src="js/gorras.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>


<div id="Calcetines" class="w3-container art w3-animate-opacity">
<p><div><iframe name="calcetines" width="100%" height="550"  src="js/calcetines.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>


<div id="Accesorios" class="w3-container art w3-animate-opacity">
<p><div><iframe name="accesorios" width="100%" height="550"  src="js/accesorios.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>


<div id="Articulos" class="w3-container art w3-animate-opacity">
<p><div><iframe name="articulos" width="100%" height="550"  src="js/articulos.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>


<div id="Productos" class="w3-container art w3-animate-opacity">
<p><div><iframe name="productos" width="100%" height="550"  src="js/productos.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>



<div id="Ventas" class="w3-container art w3-animate-opacity">
<p><div><iframe name="ventas" width="100%" height="550"  src="js/ventas.php" scrolling="no" frameborder="0" allowfullscreen></iframe></div></p></div>



</div>
</div>
<br>
<!-- Footer -->
<div align="center"><footer class="w3-container w3-theme-dark w3-padding-16">
 <br><h3><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h3><br>
  <p>Plata o Plomo &copy; Marc Salvador &nbsp; &nbsp; &nbsp; &nbsp; C/ Taulat 119, Barcelona &nbsp; &nbsp; &nbsp; &nbsp; Creado por Sergio Martínez</p>
  <div style="position:static;bottom:150px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Ir arriba</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>  
  </div>
</footer></div>
<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
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

// Tabs
function openArticulo(evt, ArtName) {
  var i;
  var x = document.getElementsByClassName("art");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(ArtName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
  
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
	
    }
	
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
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

</script>
</body>
</html>

