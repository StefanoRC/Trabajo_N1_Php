<?php
//http://localhost/php/Trabajo_n1_php/php/test/test_auto_nuevo.php

require_once "../entities/auto_nuevo.php";

echo "TEST AUTO NUEVO <br>";
$auto_nuevo = new Auto_Nuevo("Gris", "H250", "Fiat", 23234413);
echo $auto_nuevo . "<br><br>";


echo "<br>AUTO NUEVO CON RADIO CAMBIADA<br>";
$auto_nuevo->cambiarRadio("Rocoso", 12);
echo $auto_nuevo;
