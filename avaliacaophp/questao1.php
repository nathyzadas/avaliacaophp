<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
</head>
<body>

<h4>Insira um número e verifique se é:<br>
  1. Positivo<br>
  2. Negativo<br>
  3. Igual a zero
</h4>

<form action="" method="get">
   <label for="valor">Número:</label>
   <input type="number" id="valor" name="valor"><p>
    <button name="calcular" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>


<?php
if(isset($_GET['calcular'])) {

$valor = $_GET["valor"];


if($valor > 0){

  echo "Valor Positivo";

}else if ($valor < 0){

  echo "Valor Negativo";

}else{

  echo "Igual a zero";
  
}
}
?>

