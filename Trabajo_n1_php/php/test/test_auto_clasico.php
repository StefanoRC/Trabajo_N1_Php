<?php
//http://localhost/php/Trabajo_n1_php/php/test/test_auto_clasico.php


require_once "../entities/auto_clasico.php";


echo "TEST AUTO CLASICO <br>";
$auto_clasico = new Auto_clasico("Rojo", "Toyota", "K55");
echo $auto_clasico . "<br>";


echo "<br>AUTO CLASICO CON RADIO<br>";
$auto_clasico->agregarRadio("Osborn", 23);
echo $auto_clasico . "<br>";


echo "<br>AUTO CLASICO CON RADIO CAMBIADA<br>";
$auto_clasico->cambiarRadio("Philips", 120);
echo $auto_clasico;

?>