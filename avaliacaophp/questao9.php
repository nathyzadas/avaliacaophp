<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13o Salário</title>
</head>
<body>
    
<h2>Calcule o 13° salário</h2>
    <h3>Digite: </h3>

    <form action="" method="post">
        <label for="">Salário Mensal: </label>
        <input type="number" id= "salario" name="salario" size="10"><p>
        <label for="">Quantidade de meses, no ano, em que recebeu este salário:</label>
        <input type="number" id= "meses" name="meses" size="10"><p>
        <button type="submit" name="calcular">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>


<?php

if(isset($_POST['calcular'])) {

$salario = $_POST["salario"];
$meses = $_POST["meses"];

$result = (($salario/12)*$meses);

echo "13° a receber: " .$result;
}

?>