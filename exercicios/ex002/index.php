<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/m/Y");
        echo " e a hora atual é " . date("G:i:s");
    ?>

    <h2>Exemplo de variáveis</h2>
    <?php 
        $nome ="Felipe";
        $sobrenome ="Ripoli";
        const PAIS = "Brasil";
        echo "Muito prazer, $nome $sobrenome, você mora no " . PAIS . "!";
    ?>
    <h2>Mais exemplos</h2>
    <?php 
        $nome1 = "Pedro";
        $salario = 3000.99;
        echo "È verdade que seu nome é $nome1, e seu Sálario é de R$$salario?"
    ?>
</body>
</html>