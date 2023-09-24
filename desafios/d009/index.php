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
        $val1 = $_GET['val1'] ?? '';
        $val2 = $_GET['val2'] ?? '';
        $pes1 = $_GET['pes1'] ?? '';
        $pes2 = $_GET['pes2'] ?? '';
    ?>
    <main>
        <h1>Informe os dados solicitados</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="val1">1° Valor</label>
        <input type="number" name="val1" required id="val1" value="<?=$val1?>">
        <label for="pes1">1° Peso</label>
        <input type="number" name="pes1" id="pes1" min="1" required value="<?=$pes1?>">
        <label for="val2">2° Valor</label>
        <input type="number" name="val2" required id="val2" value="<?=$val2?>">
        <label for="pes2">2° Peso</label>
        <input type="number" name="pes2" id="pes2" min="1" required value="<?=$pes2?>">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php 
            $mediasim = ($val1 + $val2) / 2;
            $mediapon = ($val1 * $pes1 + $val2 * $pes2) / ($pes1 + $pes2);
            
            $mediasim = number_format($mediasim, 2, ',', '.');
            $mediapon = number_format($mediapon, 2, ',', '.');
            echo "<p>Analisando os valores $val1 e $val2:</br>
            <ul><li> A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediasim</li><li> A <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a $mediapon</li></ul></p>"
        ?>
    </section>
</body>
</html>