<?php

namespace App\Services;

abstract class PropertyObject
{
    // public const validTypes = [
    //     'text',
    //     'list',
    // ];

    protected string $value;
    public function __construct(string $value)
    {
        if (!in_array($value, static::validTypes)) {
            throw new \Exception("Unsupported value Type!", 1);
        }
        $this->value = $value;
    }
    public function get()
    {
        return $this->value;
    }
}
