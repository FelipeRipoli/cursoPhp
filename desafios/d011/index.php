<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 011</title>
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="reajuste">Qual será o percentual de reajuste?</label>
            <input type="number" name="reajuste" id="reajuste">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $preco = $_POST['preco'] ?? 00;
            $reajuste = $_POST['reajuste'] ?? 00;

            $porc = ($reajuste / 100) * $preco;
            $conta = $preco + $porc;

            echo "O produto que custava R$" . number_format($preco, 2, ",") . ", com <strong>" .  number_format($reajuste, 0) . "% de aumento</strong> vai passar a custar <strong>R$" . number_format($conta, 2, ",") . "</strong> a partir de agora.";
        ?>
    </section>
</body>
</html>