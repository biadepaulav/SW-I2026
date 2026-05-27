<?php
//conta a quantidade de caracteres de uma variavel//

$numero = "123678888";
$digitos = str_split($numero) ;

//$total = cont($difitos);
$total = strlen($numero);
echo $total;

?>


<?php
//refatoração de uma variavel no caso da preg_replace//
//remove a parte não numerica de um documento//

$form1 = "R$ 1.234,56 ABC" ;
$numeros = preg_replace ('/[^0-9]', '', $form1) ;

echo $numeros;
?>


<?php
//quebra itens a cada caractere

$numero = "123678888";

$digitos = str_split($numero);

print_r($digitos[1]);

?>
