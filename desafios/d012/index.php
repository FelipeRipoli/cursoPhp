<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 012</title>
</head>
<body>
    <?php 
        $total = $_POST['segs'] ?? 00;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="segs">Qual é o total de segundos?</label>
        <input type="number" name="segs" id="segs" min="0" step="1" required value="<?=$total?>">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
        $sobra = $total;
        // Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // Total de Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        // Total de Segundos
        $segundo = $sobra;

            echo "Analisando o valor que você digitou, <strong>" . number_format($total, 0, ",", ".") . "</strong> equivalem a um total de:";
            echo "<ul>
                <li>". $semana . " semanas</li>
                <li>" . $dia . " dias</li>
                <li>" . $hora . " horas</li>
                <li>" . $minuto . " minutos</li>
                <li>" . number_format($segundo, 0) . " segundos</li>
                </ul>";
        ?>
    </section>
</body>
</html>