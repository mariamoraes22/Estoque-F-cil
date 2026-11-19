<?php

include "config/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM usuario
WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->rowCount() > 0) {
    echo "❌Erro: E-mail já cadastrado!";
} else {
    $sql = "INSERT INTO usuario(nome, email, senha)
            VALUES ('$nome', '$email', '$senha')";
    if ($conexao->query($sql)) {
        echo "✅Usuário cadastrado com sucesso!";
        echo "<br><a href='login.html'>Fazer Login</a>";
    } else {
        echo "❌Erro ao cadastrar o usuário!";
    }
}