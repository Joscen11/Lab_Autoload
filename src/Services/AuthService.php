<?php

namespace App\Services;

use App\Models\Usuario;

class AuthService
{
    private ?Usuario $usuarioActual = null;

    public function login(Usuario $usuario): bool
    {
        if (empty($usuario->getEmail())) {
            echo "❌ Error: el email no puede estar vacío." . PHP_EOL;
            return false;
        }

        $this->usuarioActual = $usuario;
        echo "🔐 Iniciando sesión para: " . $usuario->getEmail() . PHP_EOL;
        echo "✅ Autenticación exitosa. Bienvenido, " . $usuario->getNombre() . "." . PHP_EOL;

        return true;
    }

    public function logout(): void
    {
        if ($this->usuarioActual === null) {
            echo "⚠️  No hay ningún usuario autenticado." . PHP_EOL;
            return;
        }

        echo "👋 Cerrando sesión de: " . $this->usuarioActual->getNombre() . PHP_EOL;
        $this->usuarioActual = null;
    }

    public function estaAutenticado(): bool
    {
        return $this->usuarioActual !== null;
    }

    public function getUsuarioActual(): ?Usuario
    {
        return $this->usuarioActual;
    }
}