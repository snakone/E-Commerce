<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="ventas.js"></script>
<body>

<?php
require("conexion.php");


$PagTam = 10;

	if (isset($_GET['pag']))
		$pag = $_GET['pag'];
	else
		$pag = 1;
		$inicio= ($pag-1) * $PagTam;
	
		$conexion= new mysqli("localhost","root", "root", "plataplomo");

		$todos = "SELECT count(*) as num from ventas";
		$result = $conexion->query($todos);
		$fila = $result->fetch_assoc();
		$numRegistros = $fila['num'];
		
		$numPags=ceil($numRegistros/$PagTam);
		
$Resultado=mysql_query("SELECT * FROM ventas ORDER BY `idventa` LIMIT $inicio, $PagTam",$con);


echo "<table class='w3-table w3-striped w3-bordered ' align='center'>";
while($MostrarFila=mysql_fetch_array($Resultado)){
 
	echo "<tr class='w3-white' align='center'>";
	echo "<td width='7.5%'>".$MostrarFila['idventa']."</td>";
	echo "<td width='7.5%'>".$MostrarFila['idproducto']."</td>";
	echo "<td width='7.5%'>".$MostrarFila['idarticulo']."</td>";
	echo "<td width='22%'>".$MostrarFila['nombre']."</td>";
	echo "<td width='13%'><strong>".$MostrarFila['ref']."</strong></td>";
	echo "<td width='7.5%'>".$MostrarFila['cantidad']."</td>";
	echo "<td width='7.5%'>".$MostrarFila['precio']." &euro;</td>";
	echo "<td width='7.5%'>".$MostrarFila['beneficio']." &euro;</td>";
	echo "<td width='20%'>".$MostrarFila['fecha']."</td>";
	echo "</tr>";
}
echo "</table><br>";



if ($numPags > 1)
		{
			echo "<div  align='right'>P&aacute;gina: ";
			for ($x=1; $x <= $numPags; $x++)
				{
					if ($pag == ($x) )
						{
						echo "<a class='fa fa-diamond' onclick=\"Pagina('$x')\"></a> ";
						}
					else
						{
						echo " <a class='fa fa-diamond' onclick=\"Pagina('$x')\"></a> ";
						}
				}
				echo "</div>";
			}
		else
			echo '<div align="right">P&aacute;gina: 1/1';
?>
</body>
</html>