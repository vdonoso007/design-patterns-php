<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\Builder;

class Usuario
{

    private string $nombre;
    private string $apellido;
    private string $email;
    private string $telefono;
    private string $direccion;

    private function __construct(
        string $nombre, 
        string $apellido
    )
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public static function Make(string $nombre, string $apellido): self
    {
        return new Usuario($nombre, $apellido);
    }


    public function nombre(): string
    {
        return $this->nombre;
    }

    public function apellido(): string
    {
        return $this->apellido;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function telefono(): string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function direccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function Build(): self
    {
        return $this;
    }

    public function __toString(): string
    {
        return " " .
                $this->nombre." ".
                $this->apellido." ".
                $this->email." ".
                $this->telefono." ".
                $this->direccion;
    }
}