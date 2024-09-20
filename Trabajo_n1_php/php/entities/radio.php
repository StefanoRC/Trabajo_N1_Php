<?php

class Radio
{

    public $marca;
    public $potencia;

    public function __construct(string $marca, int $potencia)
    {
        $this->marca = $marca;
        $this->potencia = $potencia;
    }

    public function __tostring(): string
    {
        return "Marca: " . $this->marca . " / " . "Potencia: " . $this->potencia . "";
    }
}
?>