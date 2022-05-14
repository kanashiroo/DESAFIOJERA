<?php

if(isset($_POST['submit']))
{
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['nome']);
    print_r($_POST['Id']);

    include_once('criarconta.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $id=$_POST['id'];

    $result=mysqli_query($mysqli, "INSERT INTO login(email,senha, nome, id)
    VALUES($email,$senha,$nome,$id)");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="inputBox">
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
            <label for="email" class="labelInput">E-mail</label>
            <input type="text" name="email" id="email" class="inputUser" require>
    </div>

    <br><br>

    <div class="inputBox">
        <label for="senha" class="labelInput">Senha</label>
        <input type="password" name="senha" id="senha" class="inputUser" require>
    <div>
    <p>
        <label>Nome</label>
        <input type="text" name="nome">
    </p>
    <p>
        <label>Id</label>
        <input type="number" name="id">
    </p>
    <br>

        <button type="create">Criar conta</button>
    </div>
</body>
</html>