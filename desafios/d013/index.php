<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 013 PHP</title>
    <style>
        img.nota{
            height: 65px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
    <?php 
            $resto = $saque;
            // Saque de 100
            $tot100 = (int)($resto / 100);
            $resto %= 100;

            // Saque de 50
            $tot50 = floor($resto / 50);
            $resto %= 50;

            // Saque de 10
            $tot10 = floor($resto / 10);
            $resto %= 10;

            // Saque de 5
            $tot5 = floor($resto / 5);
            $resto %= 5;
        ?>
        <h2>Saque de R$<?=number_format($saque, 2,",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="images/100-reais.jpg" alt="nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="images/50-reais.jpg" alt="nota de 50" class="nota">x<?=$tot50?></li>
            <li><img src="images/10-reais.jpg" alt="nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="images/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>