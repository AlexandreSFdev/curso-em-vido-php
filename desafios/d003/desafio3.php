<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $valor = $_GET["valor"] ?? "não preenchido";
        $conv = $valor / 4.98;
        $valor = number_format($valor, 2, ',','.');
        $conv = number_format($conv, 2, ',','.');
        echo "<p>Seus R$ <strong>$valor</strong> equivalem a <strong>US$ $conv</strong>
        </p>"
        ?>
        <h6><strong>* Cotação fixa de R$ 4,98</strong> informada diretamente no site do BC.</h6>
        <input type="button" value="&#11013; Voltar" onClick="history.go(-1)">
    </section>
</body>
</html>