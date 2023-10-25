<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01 PHP</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $num = $_GET ["numero"];
            $suc = $num + 1;
            $ant = $num - 1;
            echo "O número escolhido foi <strong>$num</strong>.<br>O seu <i>antecessor</i> é $ant.<br>O seu <i>sucessor</i> é $suc. ";
        ?>
        <button><a href="index.html">&#x2B05; Voltar</a></button>
    </main>
</body>
</html>