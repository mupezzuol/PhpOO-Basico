<?php include 'modelo/calculo.php';?>

<?php

//COntroladora de Dados

$obj = new calculo();

$obj->setValor1($_GET["valor1"]);

$obj->setValor2($_GET["valor2"]);

$obj->somar();

echo utf8_decode($obj->getRetorno());



?>
