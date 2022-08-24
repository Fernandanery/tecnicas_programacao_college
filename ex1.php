<?php 

$ano_nasc = $_GET["dtnasc"] ;
$ano_atual = $_GET["dtatual"] ; 

$idade = $ano_atual - $ano_nasc;

echo "A idade é {$idade}" ;

?>