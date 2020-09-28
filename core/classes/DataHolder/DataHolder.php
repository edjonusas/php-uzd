<?php

namespace Core\DataHolder;

class DataHolder
{
    protected array $data = [];
    protected array $properties = [];

    public function __construct(?array $data = null)
    {
        if ($data) $this->_setData($data);
    }

    public function _getData(): ?array
    {
        $data = [];

        foreach ($this->properties as $property) {
            $method = 'get' . str_replace('_', '', $property);

            if (is_callable(array($this, $method))) {
                $data[$property] = $this->$method();
            } else {
                $data[$property] = $this->data[$property] ?? null;
            }
        }

        return $data;
    }

    public function _setData(?array $data)
    {
        foreach ($this->properties as $property) {
            $method = 'set' . str_replace('_', '', $property);

            if (is_callable(array($this, $method))) {
                $this->$method($data[$property] ?? null);
            } else {
                $this->data[$property] = $data[$property] ?? null;
            }
        }
    }
}