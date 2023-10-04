<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Numérica</title>
</head>
<body>
<h3>Coloque o número em ordem crescente</h3>

    <form action="" method="get">
        <p class=error>* obrigatório</p>
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><span class="error">*</span><br><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><span class="error">*</span><br><br>
        
        <p><button name="calcular" type="submit">Enviar</button>
        <button type="reset">Limpar</button><br>
        
</body>
</html>


<?php

if(isset($_GET['calcular'])) {

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];

if($valor1 > $valor2){
    echo $valor2. " " .$valor1;
} else{
    echo $valor1. " " .$valor2;
}
}
?>

