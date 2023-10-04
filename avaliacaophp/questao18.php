<!DOCTYPE html>
<html>
<head>
	<title>Ciclista</title>
	<meta charset="utf-8">
</head>
<body>

<h4>1 volta com percurso de 500m é realizada em 2 minutos, logo:</h4>


	<form action="" method="get">
		<label>Voltas:</label>
		<input type="number" id="valor" name="valor" size="5"><br>
		<br>
		<button name="calcular" type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</form>
	</body>
</html>

<br>
<?php

if(isset($_GET['calcular'])) {

$volta = $_GET["valor"];

$min = 2;
$tempotl = ($volta*$min);

echo $volta." voltas serão realizadas em " .$tempotl. "min";

}

?>