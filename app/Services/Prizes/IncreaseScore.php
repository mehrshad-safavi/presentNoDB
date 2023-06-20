<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;

class IncreaseScore extends Prize implements PrizeInterface
{
    public const ID = 2;
    public const TITLE = 'افزایش امتیاز';

    function provideFields(): fields
    {
        return new Fields([new Field([
            'type' => 'text',
            'valueType' => 'numeric',
            'name' => 'value',
            'label' => 'مقدار',

        ])]);

        // return [
        //     [
        //         'type' => 'text',
        //         'valueType' => 'numeric',
        //         'name' => 'value',
        //         'label' => 'مقدار',
        //     ]
        // ];
    }
    function setId(): void
    {
        $this->id = self::ID;
    }
    function setTitle(): void
    {
        $this->title = self::TITLE;
    }
}
