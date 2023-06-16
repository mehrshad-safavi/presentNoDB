<?php

namespace App\Services;

class ValueType extends PropertyObject
{
    public const validTypes = [
        'currency',
        'date',
        'numeric',
        'percent'
    ];

    // private string $value;
    // public function __construct(string $value)
    // {
    //     if (!in_array($value, self::validTypes)) {
    //         throw new \Exception("Unsupported value Type!", 1);
    //     }
    //     $this->value = $value;
    // }
    // public function get()
    // {
    //     return $this->value;
    // }

    public function validate($value)
    {
        // $this->{"{$this->value}Validator"}($value);
        Validator::{"{$this->value}Validator"}($value);
    }
}
