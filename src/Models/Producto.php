<?php

namespace Joselyn\LabAutoload\Models;  

class Producto
{
    private string $nombre;
    private float  $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function __toString(): string
    {
        return "{$this->nombre} - $" . number_format($this->precio, 2);
    }
}