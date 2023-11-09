<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 011</title>
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 0;
        $reajuste = $_POST['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $porc = $preco * $reajuste / 100;
            $conta = $preco + $porc;

            echo "O produto que custava R$" . number_format($preco, 2, ",", ".") . ", com <strong>" .  number_format($reajuste, 0) . "% de aumento</strong> vai passar a custar <strong>R$" . number_format($conta, 2, ",",".") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
        //DECLARACOES AUTOMATICAS
        mudaValor()

        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>