<?php



/* VERIFICA LOGIN */
session_start();

if (!isset($_SESSION['usuario_id'])) {

    $_SESSION['redirect_after_login'] = '/orientaldream/finalizar.php';

    header('Location: /orientaldream/loginOrientalDream/login/login.php');

    exit;
}




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

if($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


$resultado = $conn->query("SELECT * FROM carrinho");

if ($resultado->num_rows <= 0) {

    echo "
    <h1>Seu carrinho está vazio!</h1>

    <a href='index.php'>
        Voltar para a loja
    </a>
    ";

    exit;
}

$total = 0;

$produtos = [];


/* PEGAR PRODUTOS */

while($produto = $resultado->fetch_assoc()) {

    $subtotal = $produto['preco'] * $produto['quantidade'];

    $total += $subtotal;

    $produtos[] = $produto;
}


/* CRIAR PEDIDO */

$conn->query("
INSERT INTO pedidos(total)
VALUES('$total')
");

$id_pedido = $conn->insert_id;


/* SALVAR ITENS */

foreach($produtos as $produto){

    $nome = $produto['nome'];

    $preco = $produto['preco'];

    $quantidade = $produto['quantidade'];

    $tamanho = $produto['tamanho'];

    $imagem = $produto['imagem'];

    $conn->query("
    
    INSERT INTO itens_pedido
    (pedido_id, nome, preco, quantidade, tamanho, imagem)

    VALUES
    ('$id_pedido', '$nome', '$preco', '$quantidade', '$tamanho', '$imagem')

    ");
}


/* LIMPAR CARRINHO */

$conn->query("DELETE FROM carrinho");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido Finalizado</title>
    <link rel="stylesheet" href="finalizar.css">
</head>
<body>
<div class="pai">
<h2>
    Obrigado pela compra,
    <?php echo $_SESSION['usuario_nome']; ?>! 🎉
</h2>

<p class="finalizarpedido">
    Seu pedido foi finalizado com sucesso.
</p>


<p>
    Total:
    <strong>
        R$ <?php echo number_format($total, 2, ',', '.'); ?>
    </strong>
</p>

<a href="index.php">
    Voltar para loja
</a>
</div>
</body>
</html>