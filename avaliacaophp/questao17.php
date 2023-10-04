<!DOCTYPE html>
<html>
<head>
	<title>Tempo</title>
	<meta charset="utf-8">
</head>
<body>

<h3>60km/h é percorrido em 2h, logo:</h3>


	<form action="" method="get">
		<label>Velocidade:</label>
		<input type="text" id="valor" name="valor" size="5"><br>
		<br>
		<button name="calcular" type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</form>
	</body>
</html>

<br>
<?php

if(isset($_GET['calcular'])) {

$velocidade = $_GET["valor"];

$hora = 2;
$vel = 60;

$novavel = (($velocidade*$hora)/$vel);

echo $velocidade. "km/h será percorrido em " .$novavel. "h";

}

?>