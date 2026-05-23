<?php

if($_SERVER['HTTP_HOST'] == 'localhost') {

    // Configuração local (XAMPP)
    $conn = new mysqli(
        "localhost",
        "root",
        "",
        "carrinho_orientaldream"
    );

} else {

    // Configuração InfinityFree
    $conn = new mysqli(
        "sql301.infinityfree.com", // host do banco
        "if0_41632609",             // usuário
        "tPa9yE9WJQzS",
        "if0_41632609_carrinho_orientaldream"
    );

}

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