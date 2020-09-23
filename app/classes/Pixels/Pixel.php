<?php

namespace App\Pixels;

class Pixel
{
    private array $data;
    private array $properties = ['x', 'y', 'colour', 'user_name'];

    public function _getData(): ?array
    {
        return [
            'x' => $this->getX(),
            'y' => $this->getY(),
            'colour' => $this->getColor(),
            'user_name' => $this->getUserName()
        ];
    }

    public function _setData(array $data)
    {
        $this->setX($data['x']);
        $this->setY($data['y']);
        $this->setColor($data['colour']);
        $this->setUserName($data['user_name']);
    }

    public function getX(): ?int
    {
        return $this->data['x'] ?? null;
    }

    public function getY(): ?int
    {
        return $this->data['y'] ?? null;
    }

    public function getColor(): ?string
    {
        return $this->data['colour'] ?? null;
    }

    public function getUserName(): ?string
    {
        return $this->data['user_name'] ?? null;
    }

    public function setX(int $X)
    {
        $this->data['x'] = $X;
    }

    public function setY(int $X)
    {
        $this->data['y'] = $X;
    }

    public function setColor(string $color)
    {
        $this->data['colour'] = $color;
    }

    public function setUserName(string $user_name)
    {
        $this->data['user_name'] = $user_name;
    }

}