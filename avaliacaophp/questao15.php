<!DOCTYPE html>
<html>
<head>
	<title>Salário</title>
	<meta charset="utf-8">
</head>
<body>

<h2>Salário líquido</h2>
<h3>Salário Mínimo: 1212</h3>

	<form action="" method="get">
		<label>Salário Mínimo:</label>
		<input type="number" id="valor" name="valor" size="5"><br>
    	<label>Digite seu salário:</label>
		<input type="text" id="salario" name="salario" size="5"><br>
		<br>
		<button name="calcular" type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</form>
	</body>
</html>
<br>

<?php

if(isset($_GET['calcular'])) {

$salminimo = $_GET["valor"];
$salario = $_GET["salario"];

for($x = 1; $x <= $salminimo; $x++);

$salario = ($salario/$salminimo);

echo "Seu salário equivale a ".$salario. " vezes o salário mínimo";

}

?>