<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            //var_dump($_REQUEST); // é uma junção de §_GET, $_POST e $_COOKIES.
            $numero = $_GET["numero"] ?? "não preenchido";
            echo "<p>O número escolhido foi <strong>$numero.</strong><br />
                O seu <em>antecessor</em> é " . $numero - 1 . ".<br />
                O seu <em>sucessor</em> é " . $numero + 1 . ".</p>"
        ?>
        <input type="button" value="&#11013; Voltar" onClick="history.go(-1)">
    </main>
</body>
</html>