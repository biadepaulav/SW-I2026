<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
        <main>

       <?php
    
        $nome2 = $_POST["nome"];
        $_salarioBruto = $_POST["salario"];
        $_faltas = $_POST["faltas"];
        $_valeTransporte = $_POST["vale"];

        $_INSS= 8475.55*0.14;

        if ($_salarioBruto <= 1621) {
                $_INSS = $_salarioBruto*0.075;
        } else if ($_salarioBruto <= 2902.84) {
                $_INSS = $_salarioBruto*0.09;
        } else if ($_salarioBruto <= 4354.27) {
                $_INSS = $_salarioBruto*0.12;
        } else if ($_salarioBruto <= 8475.55) {
                $_INSS = $_salarioBruto*0.14;
        }

         $salarioLiquido = $_salarioBruto - $_INSS - ($_faltas * ($_salarioBruto/30))- ($_valeTransporte == true ? $_salarioBruto*0.06 : 0);

         echo "<div class=\"container php\"><p> $nome, o seu salário líquido é de R$" . number_format($salarioLiquido, 2, ',', '.') . ".</p></div>";
    ?>
        </main>

</body>
</html>