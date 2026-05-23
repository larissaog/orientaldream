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

$id = $_GET['id'];

$conn->query("DELETE FROM carrinho WHERE id = $id");

header("Location: carrinho.php");

?>