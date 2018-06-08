<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Side Navigation -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
  <h1 class="w3-xxxlarge w3-text-teal">Menú</h1>
  <a href="../index.php">Stock Plata o Plomo</a>
  <a href="registrar.php">Registrar Producto</a>
  <a href="borrar.php">Borrar Producto</a>
  <a href="ventas.php">Ventas</a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme">Cerrar <i class="fa fa-remove"></i></a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i>
  <div class="w3-center">
  <h4>SISTEMA DE CONTROL DE STOCK</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h1>
    <div class="w3-padding-32">
      <a href="#"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">ESTADÍSTICAS</button></a>
    </div>
  </div>
</header>

<br>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-btn testbtn m2 w3-red" onclick="openArticulo(event, 'Tablas')">Tablas/Decks</a></li>
  <li><a class="w3-btn testbtn m2 w3-green" onclick="openArticulo(event, 'Ejes')">Ejes/Trucks</a></li>
  <li><a class="w3-btn testbtn m2 w3-orange" onclick="openArticulo(event, 'Ruedas')">Ruedas/Wheels</a></li>
  <li><a class="w3-btn testbtn m2 w3-teal" onclick="openArticulo(event, 'Cojinetes')">Cojinetes/Bearings</a></li>
  <li><a class="w3-btn testbtn m2 w3-blue" onclick="openArticulo(event, 'Camisetas')">Camisetas/T-Shirt</a></li>
  <li><a class="w3-btn testbtn m2 w3-yellow" onclick="openArticulo(event, 'Gorras')">Gorras/Caps</a></li>
  <li><a class="w3-btn testbtn m2 w3-black" onclick="openArticulo(event, 'Calcetines')">Calcetines/Socks</a></li>
  <li><a class="w3-btn testbtn m2 w3-pink" onclick="openArticulo(event, 'Accesorios')">Accesorios</a></li>
</ul>

<div id="Tablas" class="w3-container art w3-animate-opacity">
  <h2>Tablas</h2>
  <p><table class="w3-table w3-striped w3-bordered" align="center">
			<?PHP

				/*TABLA DE VUELOS*/
				
				include ("../conectar.php");
				$db = conectaDb();	
				$consulta= "select * FROM tablas";	
				$result = $db->query($consulta) or die(mysql_error());
			 echo " <thead><tr class='w3-red' align='center'><td width='120'>ID Producto</td><td width='120'>ID Artículo</td><td>Marca</td><td>REF</td><td>Nombre</td><td>Medida</td><td>Origen</td><td>P.V.D</td><td>P.V.P</td><td>Cantidad</td></tr></thead>";
		 if ($result){
			foreach ($result as $valor)
			{
				print "<tr class='w3-white' align='center'><td>$valor[idproducto]</td> <td>$valor[idarticulo]</td> <td>$valor[marca]</td>
				<td>$valor[ref]<p></td><td>$valor[nombre]</td><td>$valor[medida]<p></td><td>$valor[origen]</td><td>$valor[pvd] €</td><td width'200'>$valor[pvp] €</td><td>$valor[cantidad]</td></tr>";
			}
		 }
			else{
			 echo"Lo sentimos pero no se ha podido realizar la consulta, inténtelo de nuevo.";
			  }
		
		

?>		</table></p>	

</p>
</div>

<div id="Ejes" class="w3-container art w3-animate-opacity">
  <h2>Ejes</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Ruedas" class="w3-container art w3-animate-opacity">
  <h2>Ruedas</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>

<div id="Cojinetes" class="w3-container art w3-animate-opacity">
  <h2>Cojinetes</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Accesorios" class="w3-container art w3-animate-opacity">
  <h2>Accesorios</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Camisetas" class="w3-container art w3-animate-opacity">
  <h2>Camisetas</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Gorras" class="w3-container art w3-animate-opacity">
  <h2>Gorras</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Calcetines" class="w3-container art w3-animate-opacity">
  <h2>Calcetines</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

</div>
</div>

<hr>

<!-- Footer -->
<div align="center"><footer class="w3-container w3-theme-dark w3-padding-16">
  <h3><a class="fa fa-diamond"></a> PLATA O PLOMO <a class="fa fa-diamond"></a></h3><br>
  <p>Plata o Plomo &copy; Marc Salvador &nbsp; &nbsp; &nbsp; &nbsp; C/ Taulat 119, Barcelona &nbsp; &nbsp; &nbsp; &nbsp; Creado por Sergio Martínez</p>
  <div style="position:static;bottom:150px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Ir arriba</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>  
  </div>
</footer></div>

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

