<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            $valor = $_GET["valor"] ?? "não preenchido";
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            
                // var_dump($dados);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dia = $dados["value"][0]["dataHoraCotacao"];

            $conv = $valor / $cotacao;
            // $valor = number_format($valor, 2, ',','.');
            // $conv = number_format($conv, 2, ',','.');
            // echo "<p>Seus R$ <strong>$valor</strong> equivalem a <strong>US$ $conv</strong></p>"
            // $convdata = date_format()
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//para funcionar esta função é preciso ativa a extenssão INTL no php.ini
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conv, "USD") . ".</p>";
            echo "<h6><strong>* Cotação do dia $dia é de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no site do BC.</h6>"
        ?>
        <input type="button" value="&#11013; Voltar" onClick="history.go(-1)">
    </section>
</body>
</html>