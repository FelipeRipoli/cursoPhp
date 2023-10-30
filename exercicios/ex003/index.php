<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos em PHP</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variável é $num.\n";

        // $v = 300;
        // var_dump($v);

        // $num = 3e2;
        // echo "\nO valor é $num.\n";

        //É coersão, estamos declarando o tipo primitivo da Variável$, podendo alterar para qualquer outra, forçando-a. 
        // $teste = (integer) 3e2; 
        // echo "O valor é $teste."

        //mesmo esquema de forçar tipos primitivos
        // $teste2 = (float) "roberto";
        // var_dump($teste2);

        // $casado = true;
        // var_dump($casado);
        // print "O valor de casado é $casado.";

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>