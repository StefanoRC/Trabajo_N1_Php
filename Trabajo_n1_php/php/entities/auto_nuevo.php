<?php

require_once "../entities/vehiculo.php";

class Auto_nuevo extends Vehiculo
{




    public function __construct(string $color, string $marca, string $modelo, int $precio = null)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->agregarRadio("Philps", 10);
    }
}
?>