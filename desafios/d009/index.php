<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 009</title>
</head>
<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="nota1">1° Valor</label>
        <input type="number" name="nota1" id="nota1">
        <label for="peso1">1° Peso</label>
        <input type="number" name="peso1" id="peso1">

        <label for="nota2">2° Valor</label>
        <input type="number" name="nota2" id="nota2">
        <label for="peso2">2° Peso</label>
        <input type="number" name="peso2" id="peso2">

        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $nota1 = $_POST['nota1'] ?? 0;
            $nota2 = $_POST['nota2'] ?? 0;
            $peso1 = $_POST['peso1'] ?? 1;
            $peso2 = $_POST['peso2'] ?? 1;
            
            $medS = ($nota1 + $nota2) / 2;

            $medP = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
            
            echo "Analisando os valores " . $nota1 . " e " . $nota2 . ":";
            echo "<ul>
                    <li>A <strong>Médita Aritmética Simples</strong> entre os valores é igual a " . number_format($medS, 2, ",") . ".</li>
                    <li>A <strong>Médita Aritmética Ponderada</strong> com pesos " . $peso1 . " e " . $peso2 . " é igual a " . number_format($medP, 2, ",") . ".</li>    
                </ul>";
        ?>
    </section>
</body>
</html>