<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<script type="text/javascript" src="ventas.js"></script>
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

<body>
<!-- TABLA DE VENTAS -->
<div class="w3-container"">

<div id="Ventas" class="w3-container art w3-animate-opacity">
<h2>Ventas</h2><p>
<table class="w3-table w3-striped w3-bordered" align="center">
<tr class="w3-indigo" align="center">
<td width="7.5%">ID Venta</td>
<td width="7.5%">ID Producto</td>
<td width="7.5%">ID Articulo</td>
<td width="22%">Nombre</td>
<td width="13%">REF</td>
<td width="7.5%">Cantidad</td>
<td width="7.5%">Precio</td>
<td width="7.5%">Beneficio</td>
<td width="20%">Fecha</td></tr></table>
<div id="contenido">
<?PHP include('ventaspaginador.php')?>
</div></div></div>

<br>



</body>
</html>

