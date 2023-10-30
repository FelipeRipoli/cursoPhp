<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
<header>
        <h1>Analisador de Número Real</h1>
    </header>
    <section>
        <?php 
            $num = $_POST["n"] ?? 0;
            $int = (int) $num;
            $frac = $num - $int;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") . "</strong> informado pelo usuáro: </p>";

            echo "<ul>
            <li>A parte inteira do número $num, é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>
            <li>A parte fracionária do número $num, é <strong>" . number_format($frac, 3, ",", ".") . "</strong></li>
            </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>