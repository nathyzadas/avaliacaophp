<!DOCTYPE html>
<html>
<head>
	<title>Salário Líquido</title>
	<meta charset="utf-8">
</head>
<body>

<h2>Cálcule o salário líquido</h2>
<h3>INSS = 11% ou 0.11</h3>

	<form action="" method="get">
		<label>Valor da hora/aula:</label>
		<input type="text" id="valor" name="valor" size="5"><br>
    	<label>Número de aulas no mês:</label>
		<input type="number" id="aula" name="aula" size="5"><br>
        <label>Desconto INSS(11%):</label>
		<input type="text" id="inss" name="inss" size="5"><br>
		<br>
		<button name="calcular" type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</form>
	</body>
</html>
<br>
<?php

if(isset($_GET['calcular'])) {

$hora = $_GET["valor"];
$aula = $_GET["aula"];

$inss = 0.11;
$salario = ($hora*$aula);

$saliquido = ($salario - ($inss*$salario));

echo "Salário Líquido = ".$saliquido;

}

?>