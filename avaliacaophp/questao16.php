<!DOCTYPE html>
<html>
<head>
	<title>Comida</title>
	<meta charset="utf-8">
</head>
<body>

<h3>Quantidade de Grãos que uma galinha come por dia</h3>


	<form action="" method="get">
		<label>Quantidade de grãos:</label>
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

$grao = $_GET["valor"];

$um = $grao;
$trinta = ($grao*30);

echo "Em 30 dias, ela comerá " .$trinta. " grãos";


}

?>