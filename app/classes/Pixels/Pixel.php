<?php

class Pixel
{
    private array $data;

    public function setX(int $X)
    {
        $this->data['x'] = $X;
    }

    public function getX()
    {
        return $this->data['x'];
    }

    public function setY(int $X)
    {
        $this->data['y'] = $X;
    }

    public function getY()
    {
        return $this->data['y'];
    }

    public function setColor(string $color)
    {
        $this->data['colour'] = $color;
    }

    public function getColor()
    {
        return $this->data['colour'];
    }

    public function setUserName(string $user_name)
    {
        $this->data['user_name'] = $user_name;
    }

    public function getUserName()
    {
        return $this->data['user_name'];
    }

}