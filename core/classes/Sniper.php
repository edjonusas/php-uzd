<?php

namespace Core;

class Sniper
{
    private string $name;
    private int $accuracy = 90;
    private int $visibility = 10;
    private int $health = 100;
    private int $damage = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function spotted(): bool
    {
        return $this->visibility > rand(1, 100);
    }

    public function attack(): int
    {
        return $this->accuracy >= rand(1, 100) ? $this->damage : 0;
    }

    public function hit(int $damages)
    {
        $this->health -= $damages;
        //return $damages;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }
}