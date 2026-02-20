<?php
    $nome = "João";
    $idade = 25;
    $altura = 1.75;
    $status =  false;

    //exibir valores na tela
    echo "O nome é: $nome"; // 1° forma
    echo "<br>";
    echo "O nome é: " . $nome; // 2° forma
    echo "<br>";
    echo "<br>";

    //exemplos
    echo 'O nome é: $nome'; // aspas simples
    echo "<br>";
    echo 'O nome é: ' . $nome; // aspas simples
    echo "<br>";
    echo $nome; // somente resposta
    echo "<br>";
    echo "<br>";

    //VERIFICAR TIPO E VALOR DE UMA VARIAVEL
    var_dump($altura); //tipo e valor
    echo "<br>";
    print_r($altura); // valor
    echo "<br>";
    echo "<br>";

    //laço de repetição
    for ($i=1; $i <6 ; $i++) { 
        echo $i . "<br>";
    }

    //CURIOSIDADE DO PHP A RESPEITO DE VALORES BOOLEANOS
    echo "O status é: $status";
    // verdadeiro é 1 e falso é zero(nada)

?>