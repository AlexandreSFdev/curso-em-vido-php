<?php
    $nome = "Alexandre";
    $Nome = "Maria";
    $sobrenome = "Fernandes";
    const PAIS = "Brasil";
    $idade = 46;
    $peso = 118.5;
    $casado = false;
    const CURSO = "TI";
    $salário = 2500.75;
    const _TX = 850;

    //case
    $nomeCompletoCliente = "Camel Case";
    $telefone_contatu_fornecedor = "Snake Case";


    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    echo " É verdade que seu nome é $Nome?";
    echo " O seu salário é de R$ $salário.";
    echo " O valor da multa é " . _TX;
?>