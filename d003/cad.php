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
            $carteira = number_format($_GET["moedas"], 2,) ?? 0;
            $cota = 4.99;
            $conversao = $carteira / $cota;
            echo "Seus R$" . $carteira ." equivalem a US$" . number_format($conversao, 2, ",", ".") . ".<br><br>";
            //OU

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $carteira, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD") . ".<br><br>";

            echo "<strong>Cotação fixa é de R$$cota,</strong> informada diretamente no código.<br><br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>