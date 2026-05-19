<?php

namespace Joselyn\LabAutoload\Models;

class Usuario
{
    private string $nombre;
    private string $email;

    public function __construct(string $nombre, string $email)
    {
        $this->nombre = $nombre;
        $this->email  = $email;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getEmail(): string  { return $this->email; }

    public function setNombre(string $nombre): void { $this->nombre = $nombre; }
    public function setEmail(string $email): void   { $this->email = $email; }

}