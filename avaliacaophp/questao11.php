<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cardápio</title>
</head>
<body>

   <form action="" method="get">
       <h1>Programa de Cálculo</h1>
       <h4>Código e Produto </h4>
        <h4>1 - Pão sofrido;          
            2 - Pão sem alma;     
            3 - Pão blackout;     
            4 - Pão australiano </h4>


       <label for="valor">Código do Produto:</label>
       <input type="number" id="valor" name="valor" size="10"><p>
       <label for="quantidade">Quantidade adquirida:</label>
       <input type="number" id="quantidade" name="quantidade" size="10"><p>
       <label for="cadastro">Cliente Cadastrado:</label>
       <input type="radio" name="cadastro" value="sim"> Sim
       <input type="radio" name="cadastro" value="nao"> Não
       <p><button name="cadastrar" type="submit">Enviar</button>
       <button type="reset">Limpar</button>
       
   </form>
</body>
</html>

<?php

if(isset($_GET['cadastrar'])) {

$codigo = $_GET["valor"];
$quant = $_GET["quantidade"];

$cadastro = "indefinido";
   if (isset($_GET["cadastro"])){
       $cadastro = $_GET["cadastro"];
       if ($cadastro != 'sim' && $cadastro != 'nao'){
           echo '<p class="error"> informe se é cliente cadastrado ou não  </p>';
           die();    
       } 
   }


if($codigo == 1) {

    echo "Pão sofrido<br>";
    $valor = 5.00;

}else if ($codigo == 2){

    echo "Pão sem alma<br>";
    $valor = 3.00;

}else if ($codigo == 3){

    echo "Pão blackout<br>";
    $valor = 10.00;

}else if ($codigo == 4){

    echo "Pão australiano<br>";
    $valor = 20.00;

}else{
    echo "ERROR: Informe o código.";
}

$compra = ($quant*$valor);

if ($cadastro == 'sim'){

    $desc = 0.3; 

} else{
}

$valorfinal = ($compra-($desc*$compra));

echo "Valor a ser pago é " .$valorfinal. "<br>";

}

?>