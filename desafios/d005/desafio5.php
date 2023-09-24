<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Númeo Real</h1>
        <?php
        $real = $_GET["real"] ?? "não preenchido";
        // $int = intdiv($real, 1);
        $int = (int) $real;
        $res = $real - $int;
        $res = number_format($res, 3, ',','.');
        $int = number_format($int, 0, ',','.');
        $real = number_format($real, 3, ',','.');
        echo "<p>Analisando o número <strong>$real</strong> informado pelo usuário:</br>
        <ul><li>A parte inteira do número é <strong>$int</strong></li>
        <li>A parte fracionária do número é <strong>$res</strong></li></ul>
        </p>"
        ?>
        <input type="button" value="&#11013; Voltar" onClick="history.go(-1)">
    </section>
</body>
</html>