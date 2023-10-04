<!DOCTYPE html>
<html lang="en">

<body>

<h2>Verifique sua classe salarial</h2>

<form action="" method="post">
   <label for="valor">Salário:</label>
   <input type="namber" id="valor" name="valor" size="10"><p>
    <button name="enviado" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>

<?php

if(isset($_POST['enviado'])) {
$salario = $_POST["valor"];


if ($salario <= 1500) {

    echo "Classe A";
    
}else if ($salario >= 1501 & $salario <= 3000) {
    
    echo "Classe B";

}else if ($salario >= 3001 & $salario <= 5000) {
    
    echo "Classe C";
    
}else{
    echo "Classe D";
}

}

?>