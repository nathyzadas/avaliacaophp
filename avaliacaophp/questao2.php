<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title>Par ou Ímpar</title>
     <link rel="stylesheet" href="style.css">
   </head>

<body>

<h4>Verifique se é par ou ímpar</h4>

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
$num = $_GET["valor"];

    if(($num%2) == 0) {
        echo "Par";
    }else{
        echo "Ímpar";
    }
}
?>
