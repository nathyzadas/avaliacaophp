<!DOCTYPE html>
<html>
<head>
	<title>Juros 2</title>
	<meta charset="utf-8">
</head>
<body>

<h2>Juros a ser pago</h2>
<h4>Taxa de juros: 1,2% ao mês</h4>

	<form action="" method="get">
		<label>Valor Investido:</label>
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

$valor = $_GET["valor"];

$prazo = 3;
$taxa = 0.012;

$juros = ($valor*$prazo*$taxa);
$montante = ($valor + $juros);

echo "O juros a ser pago é de $juros<br>";
echo "O montante final é $montante";

}

?>