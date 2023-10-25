<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
</head>
<body>
    <h1>Expressões Aritméticas</h1>
    <?php 
        $valor1 = 5;
        $valor2 = 10;
        $valor3 = 4.5;
        $res1 = $valor1 + $valor3 / $valor2;
        $res2 = ($valor1 + $valor3) / $valor2;
        echo "O resultado da conta 1 é $res1, e o resultado da conta 2 é $res2"
    ?>
</body>
</html>