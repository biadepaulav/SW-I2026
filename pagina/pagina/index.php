<?php
$_MENU = [
        'Home' => '<h1>Pagina inicial</h1>',
        'Sobre' => '<h1>Sobre page aqui</h1>',
        'Contato' => '<h1>Contato page aqui</h1>',
        'Experiencias' => '<h1>Experiencias page aqui</h1>',
        'Projetos' => '<h1>Projetos page aqui</h1>',
        ]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<header class="helena">

    <?php
      //echo'<a class="logo"><img src="img/logo.jpg" alt="logo"></a> | ';//

        foreach ($_MENU as $key => $value) {
            echo'<a href="?page='.$key.'">'.$key.'</a> | ';
}
           
    ?>

</header>

<body>

    <?php

        $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

         if(array_key_exists($_pagina, $_MENU)){
              echo $_MENU[$_pagina];

        } else {

            echo '<h1>Página não encontrada</h1>';
        }


    ?>
</body>
</html>