<?php

namespace App\Pixels;

use Core\DataHolder\DataHolder;

class Pixel extends DataHolder
{
    protected array $properties = ['x', 'y', 'colour', 'pixel_size', 'user_name'];

    public function getX(): ?int
    {
        return $this->data['x'] ?? null;
    }

    public function getY(): ?int
    {
        return $this->data['y'] ?? null;
    }

    public function getUserName(): ?string
    {
        return $this->data['user_name'] ?? null;
    }

    public function getSize(): ?int
    {
        return $this->data['pixel_size'] ?? null;
    }

    public function getColour(): ?string
    {
        return $this->data['colour'] ?? null;
    }

    public function setX(?int $x)
    {
        $this->data['x'] = $x;
    }

    public function setSize(?int $size)
    {
        $this->data['pixel_size'] = $size;
    }

    public function setY(?int $y)
    {
        $this->data['y'] = $y;
    }

    public function setColour(?string $color)
    {
        $this->data['colour'] = $color;
    }

    public function setUserName(?string $user_name)
    {
        $this->data['user_name'] = $user_name;
    }
}