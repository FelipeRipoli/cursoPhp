<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 012</title>
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="segs">Qual é o total de segundos?</label>
        <input type="number" name="segs" id="segs">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
            $segs = $_POST['segs'] ?? 00;

            $semanas = floor($segs / 604800);
            $dias = floor($segs / 86400) % 7;
            $horas = floor($segs / 3600) % 24;
            $minutos = floor($segs / 60) % 60;
            $segundos = ($segs / 60);

            echo "Analisando o valor que você digitou, <strong>" . number_format($segs, 0, ".") . "</strong> equivalem a um total de:";
            echo "<ul>
                <li>". $semanas . " semanas</li>
                <li>" . $dias . " dias</li>
                <li>" . $horas . " horas</li>
                <li>" . $minutos . " minutos</li>
                <li>" . number_format($segundos, 0) . " segundos</li>
                </ul>";
        ?>
    </section>
</body>
</html>