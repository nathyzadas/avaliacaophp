<!DOCTYPE html>
<html>
<head>
	<title>Juros</title>
	<meta charset="utf-8">
</head>
<body>

<h2>Juros a ser pago</h2>
<h4>Taxa de juros: 30% ao ano</h4>

	<form action="" method="get">
		<label>Valor Emprestado:</label>
		<input type="text" id="valor" name="valor" size="5"><br>
    	<label>Prazo, em anos, para pagamento:</label>
		<input type="number" id="anos" name="anos" size="5"><br>
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
$prazo = $_GET["anos"];

$taxa = 0.3;

$juros = ($valor*$prazo*$taxa);

echo "O juros a ser pago é de $juros";

}

?>