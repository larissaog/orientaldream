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

$resultado = $conn->query("SELECT * FROM carrinho");

$total = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            padding: 30px;
        }

        .carrinho{
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        .produto{
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        .produto img{
            width: 120px;
            border-radius: 10px;
        }

        .info{
            flex: 1;
        }

        .info h3{
            margin-bottom: 10px;
        }

        .total{
            text-align: right;
            margin-top: 20px;
            font-size: 22px;
            font-weight: bold;
        }

        .btn-finalizar{
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: black;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

    </style>

</head>
<body>

<div class="carrinho">

    <h1>Seu Carrinho</h1>

    <?php while($produto = $resultado->fetch_assoc()) { 
        
        $subtotal = $produto['preco'] * $produto['quantidade'];
        $total += $subtotal;

        

    ?>

        <div class="produto">

            <img src="/orientaldream/img/<?php echo trim($produto['imagem']); ?>">

            <div class="info">

                <h3><?php echo $produto['nome']; ?></h3>

                <p>
                    <strong>Tamanho:</strong>
                    <?php echo $produto['tamanho']; ?>
                </p>

                <p>
                    <strong>Quantidade:</strong>
                    <?php echo $produto['quantidade']; ?>
                </p>

                <p>
                    <strong>Preço:</strong>
                    R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                </p>

                <p>
                    <strong>Subtotal:</strong>
                    R$ <?php echo number_format($subtotal, 2, ',', '.'); ?>
                </p>

            </div>

        </div>

        <a href="remover.php?id=<?php echo $produto['id']; ?>">
    Remover
</a>

    <?php } ?>

    <div class="total">

        Total:
        R$ <?php echo number_format($total, 2, ',', '.'); ?>

    </div>

    <a href="finalizar.php" class="btn-finalizar">
    Finalizar Compra
</a>

<a href="index.php" class="btn-finalizar">Voltar ao menu</a>

</div>

</body>
</html>