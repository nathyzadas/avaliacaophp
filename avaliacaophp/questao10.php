<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

    <form action="" method="get">
        <h2>Dados cadastrais</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" size="30"><span class="error">*</span><p>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" size="30"><span class="error">*</span><p>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" size="50"><span class="error">*</span><p>
        <label for="estadocivil">Estado Civil:
        <select name="estadocivil">
           <option>Solteiro(a)</option>
           <option>Casado(a)</option>
        </select>
        </label>
        <p><button name="cadastrar" type="submit">Enviar</button>
        <button type="reset">Limpar</button>
   </form>
   </body>
</html>


<?php

if(isset($_GET['cadastrar'])){

if (empty($_GET["nome"]) || strlen($_GET["nome"])<3) {
    echo '<p> nome inválido </p>';
    die();
}
if (empty($_GET["sobrenome"]) || strlen($_GET["sobrenome"])<3) {
    echo '<p class="error"> informe o sobrenome</p>';
    die();
}
if (empty($_GET["email"]) || !filter_var($_GET["email"],FILTER_VALIDATE_EMAIL)) {
    echo '<p class="error"> informe o email </p>';
    die();
}

$estcivil = "indefinido";
if (isset($_GET["estadocivil"])){
    $estcivil = $_GET["estadocivil"];
    if ($estcivil != 'Solteiro(a)' && $estcivil != 'Casado(a)'){
        echo '<p class="error"> informe o estado civil </p>';
        die();    
    }
}
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$email = $_GET["email"];
$estcivil = $_GET["estadocivil"];


echo("<h1>Dados inseridos</h1>
    Nome: $nome <p>
    Sobrenome: $sobrenome <p> 
    Email: $email <p>
    Estado Civil: $estcivil <p>
");   
}

?>