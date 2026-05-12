<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "carrinho_orientaldream"
);

$id = $_GET['id'];

$conn->query("DELETE FROM carrinho WHERE id = $id");

header("Location: carrinho.php");

?>