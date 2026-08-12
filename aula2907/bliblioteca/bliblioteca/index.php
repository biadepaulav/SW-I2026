<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Aula 29-07</title>
</head>
<body>
    <?php
    require_once 'blibliotecalocal/autoload.php';
    $texto = new texto();
    $calc =  new calcular();

    echo $calc ->somar(10,20);
    echo "<br><br>";
    echo $texto->maiusculo("etec mcm");
    echo "<br><br>";
    echo $calc->multiplicar(10,20);
    ?>
</body>
</html>