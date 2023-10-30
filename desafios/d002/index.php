<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerando números aleatórios</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $num = mt_rand(0, 100);
            echo "O valor gerado foi <strong>$num</strong>";
        ?>
        <button><a href="index.php">&#x1F504; Gerar outro</a></button>
    </main>
</body>
</html>