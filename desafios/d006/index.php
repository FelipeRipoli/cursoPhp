<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_POST['v1'] ?? 1;
        $valor2 = $_POST['v2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2> Estrututra da Divisão </h2>
        <?php 
            $conta = floor($valor1 / $valor2);
            $resto = $valor1 % $valor2;
            /* echo "O <i>dividendo</i> é <strong>" . $valor1 . "</strong>, o <i>divisor</i> é <strong>" . $valor2 . "</strong>, o <i>resultado/ quociente</i> da divisão é <strong>" . number_format($conta, 0) . "</strong>, e o <i>resto</i> da divisão é <strong>" . $resto . "</strong>."; */
        ?>
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$conta?></td>
            </tr>
        </table>
    </section>
</body>
</html>