<?php

include "config/conexao.php";

$id_produto = $_GET['id'];

$sql = "DELETE FROM tb_produtos WHERE id = $id_produto";

if ($conexao->query($sql)) {
    echo "✅Produto excluído com sucesso!";
} else {
    echo "❌Erro ao excluir o produto!";
}
echo "<br><a href='listar.php'>Voltar</a>";
?>