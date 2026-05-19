<?php

namespace Joselyn\LabAutoload\Services;  

use Joselyn\LabAutoload\Models\Usuario;  
use Joselyn\LabAutoload\Models\Producto; 

class RegistroService
{
    /**
     * Registra un nuevo usuario en el sistema.
     */
    public function registrarUsuario(Usuario $usuario): void
    {
        echo "📋 Usuario registrado: " . $usuario->getNombre() . PHP_EOL;
    }

    /**
     * Registra un nuevo producto en el sistema.
     */
    public function registrarProducto(Producto $producto): void
    {
        echo "📦 Producto registrado: " . $producto . PHP_EOL;
    }
}