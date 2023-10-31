<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
             <label for="v1">Valor 1</label>
             <input type="number" name="v1" id="v1" value="<?=$valor1?>">
             <label for="v2">Valor 2</label>
             <input type="number" name="v2" id="v2" value="<?=$valor2?>">
             <input type="submit" value="Somar">
        </form>
    </main>
    <!-- < ?=$VARIAVEL?> Se trata de uma short tag-->

    <section id="result">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "O valor da soma entre <strong>".$valor1. "</strong> e <strong>" . $valor2 . "</strong> é igual a <strong>" . $soma . "</strong>.";
        ?>
    </section>
</body>
</html> 