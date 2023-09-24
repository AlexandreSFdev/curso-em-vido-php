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
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divsao = $valor1 / $valor2;
            $divint = (int) $divsao;
            $resto =  $valor1 % $valor2;
            //$soma = number_format($soma, 0, ',','.');
            //$valor1 = number_format($valor1, 0, ',','.');
            //$valor2 = number_format($valor2, 0, ',','.');
            echo "<table class='divisao'>
            <tr>
              <td>$valor1</td>
              <td>$valor2</td>
            </tr>
            <tr>
              <td border-style: solid>$resto</td>
              <td>$divint</td>
            </tr>
          </table>";
        ?>
    </section>
    
</body>
</html>