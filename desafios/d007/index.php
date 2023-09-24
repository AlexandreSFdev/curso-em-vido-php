<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado.
        $salario = $_GET['salario'] ?? 0;
        $minimo = 1380;
        $salmin = number_format($minimo, 2, ',','.');
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <br>
            <?="<p>Considerando o salário mínimo de <strong>R\$ $salmin</strong></p>"?>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $divsao = $salario / $minimo;
            $divint = (int) $divsao;
            $resto =  $salario % $minimo;
            $divint = number_format($divint, 0, ',','.');
            $resto = number_format($resto, 2, ',','.');
            $salario = number_format($salario, 2, ',','.');
            echo "<p>Quem recebe um salário de R\$ $salario ganha <strong>$divint salários mínimos + R\$ $resto</strong></p>";
        ?>
    </section>
    
</body>
</html>