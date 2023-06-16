<?php

namespace App\Services;

class Type extends PropertyObject
{
    public const validTypes = [
        'text',
        'list',
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

    public function validate($value, $items)
    {
        throw_if(
            $this->value  === 'list' && !in_array($value, array_keys($items)),
            new \Exception('undefined item!', 403)
        );
    }
}
