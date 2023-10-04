<!DOCTYPE html>
<html>
<head>
	<title>Área do Retângulo</title>
	<meta charset="utf-8">
</head>
<body>

<h3>Calcule a área do retângulo</h3>

	<form action="" method="get">
		<label>Base:</label>
		<input type="number" id="base" name="base" size="5"><br>
    	<label>Altura:</label>
		<input type="number" id="altura" name="altura" size="5"><br>
		<br>
		<button name="Calcular" type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</form>
	</body>
</html>

<br>
<?php
if(isset($_GET['Calcular'])){
$base = $_GET["base"];
$altura = $_GET["altura"];

$area = ($base*$altura);

echo "Área é igual a " .$area. " cm²";

}
 
?>