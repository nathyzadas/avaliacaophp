<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>

<h3>Calcule seu IMC</h3>

    <form action="" method="post">
        <label for="">Digite seu peso: </label>
        <input type="number" id= "peso" name="peso" size="5"><p>
        <label for="">Digite sua altura (Ex.: 1.60): </label>
        <input type="text" id= "altura" name="altura" size="10"><p>
        <button type="submit" name="Calcular">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
    </body>
</html>

<?php

if(isset($_POST['Calcular'])) {

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc= ($peso/(($altura*$altura)));


if($imc < 18.5){

    echo $imc. " Abaixo do peso";

}else if ($imc >= 18.5 & $imc <= 24.9){

    echo $imc. " Peso Normal";

}else if ($imc >= 25.0 & $imc <= 29.9){

    echo $imc. " Pré-Obesidade";

}else if ($imc >= 30.0 & $imc <= 34.9){

    echo $imc. " Obesidade Grau 1";

}else if ($imc >= 35.0 & $imc <= 39.9){

    echo $imc. " Obesidade Grau 2";

}else{
    echo $imc. " Obesidade Grau 3";
}
    
}

?>


