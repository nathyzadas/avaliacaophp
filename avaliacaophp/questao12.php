<!DOCTYPE html>
<html lang="en">

<body>
<h2>Digite seu setor e seu salário</h2>

<h3>Setores:</h3>
<h4>1. INF <br>
    2. SEC <br>
    3. ADM
</h4>

<form action="" method="get">
   <label for="nome">Setor:</label>
   <input type="text" id="nome" name="nome" size="10"><span class="error">*</span><p>
   <label for="valor">Salário:</label>
   <input type="text" id="valor" name="valor" size="10"><p>
    <button name="enviado" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>

<?php

if(isset($_GET['enviado'])) {
$cargo = $_GET["nome"];
$salario = $_GET["valor"];


if ($cargo == "INF" || "inf") {
    $porc = 0.15;
    echo "Setor ".$cargo."<br>";
    
}else if ($cargo == "SEC" || "sec") {
    $porc = 0.12;
    echo "Setor ".$cargo."<br>";

}else if ($cargo == "ADM" || "adm") {
    $porc = 0.10;
    echo "Setor".$cargo."<br>";
    
}else{
    echo "Não é permitido a entrada de outro setor.";
}

echo "Novo Salário: " .$novosalario = ($salario + ($salario*$porc));

}

?>