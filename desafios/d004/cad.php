<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php
            //Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=2&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //Puxando os valores do formulário HTML para o PHP
            $real = $_GET["moedas"] ?? 0;

            //Conta para conversão
            $dolar = $real/$cotacao;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . ".</strong><br><br>";

            echo "O valor da cota de conversão é <strong>" . number_format($cotacao, 2, ",", ".") . "</strong>, obtido diretamente do Banco Central do Brasil.";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>