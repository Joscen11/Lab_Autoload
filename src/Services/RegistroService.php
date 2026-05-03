<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Producto;

/**
 * Clase RegistroService
 * 
 * Gestiona el registro de usuarios y productos.
 * Namespace App\Services → carpeta src/Services/
 */
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