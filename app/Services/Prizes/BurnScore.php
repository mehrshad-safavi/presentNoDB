<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;

class BurnScore extends Prize implements PrizeInterface
{
    public const ID = 3;
    public const TITLE = 'سوختن امتیاز';

    function provideFields(): Fields
    {
        return new Fields([new Field([
            'type' => 'text',
            'valueType' => 'percent',
            'name' => 'percent',
            'label' => 'درصد',

        ])]);

        // return [
        //     [
        //         'type' => 'text',
        //         'valueType' => 'percent',
        //         'name' => 'percent',
        //         'label' => 'درصد',
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
