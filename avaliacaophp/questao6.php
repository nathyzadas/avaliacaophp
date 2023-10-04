<!DOCTYPE html>
<html lang="en">

<body>
<h1>Tabuada</h1>
<h3>Insira um número</h3>

<form action="" method="get">
   <label for="valor">Número:</label>
   <input type="number" id="valor" name="valor"><p>
    <button name="enviado" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>

<?php

if(isset($_GET['enviado'])) {
$numero = $_GET["valor"];
for ($x = 0; $x <= 10; $x++) {
  echo "$numero x $x = " .$x*$numero. "<br>";
}
}
?>
