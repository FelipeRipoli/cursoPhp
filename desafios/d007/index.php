<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 007</title>
</head>
<body>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $sal = $_POST['sal'] ?? 0;
            $salM = 1380;
            $div = $sal / $salM;
            $rest = $sal % $salM;

            echo "<h2>Resultado Final</h2>";
            echo "Quem recebe um salário de " . number_format($sal, 2, ",",".") . " ganha <strong>" . number_format($div, 0) . " salários mínimos</strong> + R$" . number_format($rest, 2, ",", ".") . ".";
        ?>
    </section>
</body>
</html>