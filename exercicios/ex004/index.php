<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php 
    // 0x é = hexadecimal, 0b é = a binário e 0 = octal
/*         $num = 010;
        echo"O valor da variável é $num"; */

/*         $v = "Alexandre";
        var_dump($v); */

/*         $num = (int) 3e2; // 3 x 10^2
        var_dump($num);
 */
/*         $num = (float) 950;
        var_dump($num); */

/*         $casado = false;
        var_dump($casado);
        print "o valor para cado é $casado"; */

/*         $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet); */

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
        echo "PHP\u{1F418}";
        echo "Alexandre \u{1F499}";
        echo 'Alexandre \u{1F596}';

        const ESTADO = "RJ";
        echo "Moro no " , ESTADO;

        echo " Estamos no ano de " . date('Y');

        
    ?>
    
</body>
</html>