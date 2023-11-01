<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 010</title>
</head>
<body>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc">

            <label for="fut">Quer saber sua idade em qual ano? (Estamos em <strong>2023</strong>)</label>
            <input type="number" name="fut" id="fut">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
            <h2>Resultado</h2>
            <?php 
                $nasc = $_GET['nasc'] ?? 0000;
                $fut = $_GET['fut'] ?? 0000;
                $anoatt = 2023;

                $vctem = $anoatt - $nasc;
                $vctera = $fut - $nasc;

                echo "Quem nasceu em " . $nasc . ", atualmente com  " . $vctem . " anos, em " . $fut , " <strong>terá " . $vctera . " anos.</strong>";
            ?>
        </section>
</body>
</html>