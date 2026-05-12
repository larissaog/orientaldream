<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "carrinho_orientaldream"
);

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];
$tamanho = $_POST['tamanho'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO carrinho
(nome, preco, imagem, tamanho, quantidade)

VALUES
('$nome', '$preco', '$imagem', '$tamanho', '$quantidade')";

$conn->query($sql);

header("Location: carrinho.php");

?>