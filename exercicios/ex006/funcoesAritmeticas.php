<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algumas funções Aritméticas</title>
</head>
<body>
    <h1>Exemplo prático de algumas funções Aritméticas</h1>
    <?php 
        $r = abs(6000);
        echo "$r <br><br>";

        $b = base_convert(254, 10, 2);
        echo "$b <br><br>";

        $d = 5 /2;
        $di = intdiv(5, 2);
        echo "A divisão com números reais é $d, e a divisão com números inteiros é $di. <br><br>";

        $min = min(9, 3, 4, 5, 7, 2, 323 ,5, 5345, 1);
        $max = max(9, 3, 4, 5, 7, 2, 323 ,5, 5345, 1);
        echo "o valor mínimo é $min, e o valor máximo é $max. <br><br>";

        $pi = pi();
        $pi2 = M_PI;
        echo "$pi ou $pi2 <br><br>";

        $pot = 5**2; // OU
        $pot2 = pow(5,2);
        echo "O valor da potencia 1 é de $pot, e o valor da potência 2 é de $pot2. <br><br>";

        $raiz2 = 144 ** (1/2);
        $raiz = sqrt(144);
        print "A raiz quadrada do número escrito é $raiz. /// Teste $raiz2. <br><br>";

        //RAIZ CUBICA

        $rcubica = 27 ** (1/3); //MACETE PARA CALCULAR RAIZ CUBICA
        echo "O valor da raiz cubica do número escrito é $rcubica.";
    ?>
</body>
</html>