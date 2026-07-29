<?php
require_once 'blibliotecalocal/autoload.php';
$texto = new texto();
$calc = new calcular();
echo $calc->somar(10,20);
echo "<br><br>";
echo $texto->maiusculo("etec mcm");
echo "<br><br>";
echo $calc->multiplicar(10,20);
echo "<br><br>";
?>