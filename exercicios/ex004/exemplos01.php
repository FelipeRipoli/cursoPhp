<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de manipulações de Strings</title>
</head>
<body>
    <h1>Exemplos de manipulações de Strings</h1>
    <?php 
        $nome = 'Felipe \u{1F596}'; //(SINGLE QUOTED)Não interpreta os emojis
        $sobrenome = "Ripoli \u{1F596}"; //(DOUBLE QUOTED) interpreta os emojis

        echo "$nome $sobrenome <br><br>";
        echo '$nome $sobrenome \u{1F596} <br><br>';

        const ESTADO = "SP";
        echo "Moro no estado " . ESTADO . "<br><br>";

        echo "Estamos no ano de " . date('Y') . "<br><br>";

        $nom = "Rodrigo";
        $snom = "Nogueira";

        echo "$nom" . " Minotauro " . "$snom <br><br>";
    ?>
</body>
</html>