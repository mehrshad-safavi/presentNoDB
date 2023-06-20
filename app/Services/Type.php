<?php

namespace App\Services;

use App\Exceptions\UserFriendlyException;

class Type extends PropertyObject
{
    public const validTypes = [
        'text',
        'list',
    ];

    public function validate($value, $items)
    {
        throw_if(
            $this->value  === 'list' && !in_array($value, array_keys($items)),
            new UserFriendlyException('undefined item!', 403)
        );
    }
}
