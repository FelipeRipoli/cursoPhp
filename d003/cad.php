<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php
            $carteira = $_GET["moedas"];
            $cota = 5.00;
            $conversao = $carteira / $cota;
            echo "Seus R$$carteira equivalem a <strong>US$$conversao</strong><br><br>";
            echo "<strong>Cotação fixa é de R$$cota,</strong> informada diretamente no código.<br><br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>