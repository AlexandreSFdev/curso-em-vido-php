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
        $numero = $_GET['num'] ?? 0;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $raizq = $numero ** (1 / 2);
            $raizc = $numero ** (1 / 3);
            // Essas são outra forma de calcular a raiz quadrada e cúbica
            //$raizq = sqrt($numero);
            //$raizc = pow($numero, 1 / 3);
            $raizq = number_format($raizq, 3, ',','.');
            $raizc = number_format($raizc, 3, ',','.');
            //$valor2 = number_format($valor2, 0, ',','.');
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</br>
            <ul><li>A sua raiz quadrada é <strong>$raizq</strong></li>
            <li>A A raiz cúbica é <strong>$raizc</strong></li></ul>
            </p>";
        ?>
    </section>
    
</body>
</html>