<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>AULA 02 - PHP E HTML</h1>
    <?php
        $nome = "Beatriz";
        echo "<p> Bem Vindo $nome </p>";
        echo "<p> Bem Vindo " . $nome . "</p>";

        $a = 10;
        $b= 5;
        $soma = $a + $b;
        echo "<p style='color:red;'> A soma é: $soma </p>";
    ?>
</body>
</html>