<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Usuario;
use App\Models\Producto;
use App\Services\AuthService;
use App\Services\RegistroService;

// ─── Crear objetos ────────────────────────────────────────────
$usuario  = new Usuario('Joselyn Cención', 'joselyn28c@gmail.com');
$producto = new Producto('Laptop Dell', 850.00);

// ─── Usar servicios ───────────────────────────────────────────
$auth     = new AuthService();
$registro = new RegistroService();

$auth->login($usuario);
$registro->registrarUsuario($usuario);
$registro->registrarProducto($producto);