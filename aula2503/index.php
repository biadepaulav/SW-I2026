  <!DOCTYPE html>
 <html lang="pt_br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
 </head>
 <body>
     <main>

 <?php
 // $MSG = "Sua média é: ";
       // $nome = "User";

        $_m1 = $_POST["n1"];
        $_m2 = $_POST["n2"];
        $_m3 = $_POST["n3"];
        $_media= (($_m1+$_m2+$_m3)/3);

        $nome = $_POST["name"];
        $sobrenome = $_POST["sn"];
        echo "<p>É um prazer te conhecer $nome $sobrenome!</p>";
        echo "<p>Sua média é de: $_media</p>";


 ?>
  </main>
    
</body>
</html>
 