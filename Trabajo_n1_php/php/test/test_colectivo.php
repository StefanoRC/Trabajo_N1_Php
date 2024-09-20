<?php
//localhost/php/Trabajo_n1_php/php/test/test_colectivo.php
require_once "../entities/colectivo.php";

echo "TEST COLECTIVO <br>";
$colectivo = new Colectivo("Naranja", "Mercedes", "HF12", 200000000);
echo $colectivo . "<br><br>";


echo "<br>COLECTIVO CON RADIO AGREGADA<br>";
$colectivo->agregarRadio("Toshiba", 234);
echo $colectivo . "<br>";


echo "<br>COLECTIVO CON RADIO CAMBIADA<br>";
$colectivo->cambiarRadio("Samsung",100);
echo $colectivo . "<br>";