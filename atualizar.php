<?php

include "config/conexao.php";

$id_produto = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qnt_produto = $_POST["quantidade"];

$sql = "UPDATE tb_produtos SET 
        nome = '$nome', 
        categoria = '$categoria', 
        preco = '$preco', 
        quantidade = '$qnt_produto' 
        WHERE id = $id_produto";
if ($conexao->query($sql)) {
    echo "✅Produto atualizado com sucesso!";
} else {
    echo "❌Erro ao atualizar o produto!";
}
echo "<br><a href='listar.php'>Voltar</a>";
