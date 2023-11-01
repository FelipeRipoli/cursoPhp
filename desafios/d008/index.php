<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 008</title>
</head>
<body>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $num = $_POST['num'] ?? 0;
            $rq = sqrt($num);
            $rc = $num ** (1/3);

            echo "Analisando o <strong>número " . $num . "</strong>, temos:";
            echo "<ul>
                        <li>A sua raiz quadrada é <strong>" . number_format($rq, 3, ",") ."</strong></li>
                        <li>A sua raiz cúbica é <strong>" . number_format($rc, 3, ",") . "</strong></li>
                </ul>"
        ?>
    </section>
</body>
</html>