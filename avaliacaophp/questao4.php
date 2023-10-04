<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Maioridade</title>

</head>
<body>
<h2>Verifique se fulano tem mais ou menos de 18 anos</h2>

   <form action="" method="get">
       <h3>Dados:</h3>
       <label for="nome">Nome:</label>
       <input type="text" id="nome" name="nome" size="30"><span class="error">*</span><p>
       <label for="idade">Idade:</label>
       <input type="number" id="idade" name="idade" size="5"><span class="error">*</span><p>

       <p><button name="cadastrar" type="submit">Enviar</button>
       <button type="reset">Limpar</button>
       
   </form>
</body>
</html>

<?php

if(isset($_GET['cadastrar'])) {

$idade = $_GET["idade"];

if($idade >= 18){
    echo "Fulano é maior de idade e tem ".$idade. " anos";
}else{
    echo "Fulano é menor de idade e tem ".$idade. " anos";
}
}

?>