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
    $datanasc = $_GET['nasc'] ?? 1990;
    $data2 = $_GET['dat2'] ?? 2023;
    $atual = date('Y');
    
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value=<?="$datanasc"?>>
            <label for="dat2"><?="Quer saber sua idade em que ano? (atualmente estamos em $atual"?></label>
            <input type="number" name="dat2" id="dat2" value=<?="$data2"?>>
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
        $idade = $data2 - $datanasc;
        echo "<p>Quem nasceu em $datanasc vai ter $idade anos em $data2.</p>";
        ?>
    </section>
</body>
</html>