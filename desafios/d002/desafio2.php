<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Números Aleatórios para a Mega</h1>
        <?php
        $ale = mt_rand(1, 60);
        // mt_rand é uma função de 1997, quatro vezes mais rápida que a rand
        // rand usa um algoritímo de 1951 - Linear Congrential Generator
        // A partir do PHP 7.1 a rand é um apontamento para mt_rand (segundo o manual)
        // random_int() gera números aleatórios criptograficamente seguros, porém é a mais lenta.
        echo "Gerando um núnero aleatório entre 0 e 100...</br>
        O valor gerado foi <strong>$ale</strong>"
        ?>
        </br>
        </br>
        </br>
        <input type="button" value="&#128260; Gerar outro" onClick="history.go(0)">
        </br>
        <input type="button" value="&#11013; Voltar" onClick="history.go(-1)">
    </section>
</body>
</html>