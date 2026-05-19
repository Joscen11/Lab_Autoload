<?php

namespace Joselyn\LabAutoload;

use Joselyn\LabAutoload\Services\AuthService;
use Joselyn\LabAutoload\Services\RegistroService;
use Joselyn\LabAutoload\Models\Usuario;
use Joselyn\LabAutoload\Models\Producto;

class Saludo
{
    public static function decirHola($email)
    {
        echo "Iniciando sesión para: " . $email . "\n";
    }

    public static function autenticar($nombre, $email)
    {
        $usuario = new Usuario($nombre, $email);
        $auth = new AuthService();
        $auth->login($usuario);
        // No retornar nada, porque AuthService ya imprime
    }

    public static function registrarUsuario($nombre, $email)
    {
        $usuario = new Usuario($nombre, $email);
        $registro = new RegistroService();
        $registro->registrarUsuario($usuario);
        // No retornar nada
    }

    public static function registrarProducto($nombre, $precio)
    {
        $producto = new Producto($nombre, (float)$precio);
        $registro = new RegistroService();
        $registro->registrarProducto($producto);
        // No retornar nada
    }
}