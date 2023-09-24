<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script>
    const value = document.querySelector("#value");
const input = document.querySelector("#reaj");
value.textContent = input.value;
input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});
</script>
    <?php
        $preco = $_GET['prec'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="prec">Preço do Produto (R$)</label>
        <input type="number" name="prec" id="prec" value = "<?=$preco?>">
        <label for="reaj">Qual será o percentual de reajuste?  <output id="value"></output></label>
        <input id="reaj" type="range" min="1" max="10" step="0.01" />
        </form>
    </main>
</body>
</html>