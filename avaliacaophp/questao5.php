<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Triângulo</title>
     
   </head>
   <body>

   <h3>Verifique se é um triângulo</h3>

     <form method="get">
       <label>Número 1: <input type="number" name="valor1" required/></label><br>
       <label>Número 2: <input type="number" name="valor2" required/></label><br>
       <label>Número 3: <input type="number" name="valor3" required/></label><br>
  <br>
       <button type="submit" name="calcular">Calcular</button>
       <button type="reset">Limpar</button>

    </body>
</html>

<?php

if(isset($_GET['calcular'])) {

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$valor3 = $_GET["valor3"];

if($valor3 > ($valor2 + $valor1)){
    echo "Não é triângulo";

}else if ($valor1 == $valor2 & $valor1==$valor3 & $valor3 == $valor2){
    echo "Triângulo Equilátero";

}else if ($valor1 <> $valor2 & $valor1 <> $valor3 & $valor2 <> $valor3){
    echo "Triângulo Escaleno";

}else {
    echo "Triângulo Isósceles";
}
}
?>