<!DOCTYPE html>
<html>
<title>Plata o Plomo - SkateShop Poblenou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
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

		$todos = "SELECT count(*) as num from articulo";
		$result = $conexion->query($todos);
		$fila = $result->fetch_assoc();
		$numRegistros = $fila['num'];
		
		$numPags=ceil($numRegistros/$PagTam);
		
$Resultado=mysql_query("SELECT * FROM articulo ORDER BY `idarticulo` LIMIT $inicio, $PagTam",$con);


echo "<table class='w3-table w3-striped w3-bordered' align='center' width='50%'>";
while($MostrarFila=mysql_fetch_array($Resultado)){
 
	echo "<tr class='w3-white' align='center'>";
	echo "<td width='50%'>".$MostrarFila['idarticulo']."</td>";
	echo "<td width='50%'>".$MostrarFila['nombre']."</td>";
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