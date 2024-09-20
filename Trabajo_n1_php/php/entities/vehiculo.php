<?php
require_once "../entities/radio.php";
abstract class Vehiculo
{
    public $color;
    public $marca;
    public $modelo;
    public $precio;
    public $radio;


    public function __tostring(): string
    {
        return "Color: " . $this->color . " / " . "Marca: " . $this->marca . " / " . "Modelo: " . $this->modelo . " / " .
            "Precio: " . $this->precio . " / " . "Radio: " . $this->radio;
    }

    public function agregarRadio(string $marca, int $potencia)
    {
        $this->radio = new Radio($marca, $potencia);
    }

    public function cambiarRadio(string $marca, int $potencia)
    {
        $this->radio = new Radio($marca, $potencia);
    }

    public function __construct(string $color, string $marca, string $modelo, int $precio = null)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }
}
?>