<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;

class RandomIncreaseCredit extends Prize implements PrizeInterface
{
    public const ID = 7;

    public const TITLE = 'افزایش اعتبار تصادفی';

    function provideFields(): Fields
    {

        return new Fields([
            new Field([
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'minPrice',
                'label' => 'حداقل مبلغ',

            ]),
            new Field([
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'maxPrice',
                'label' => 'حداکثر مبلغ',

            ]),
            new Field([
                'type' => 'text',
                'valueType' => 'date',
                'name' => 'duedate',
                'label' => 'تاریخ انقصا',

            ]),

        ]);

        // return [
        //     [
        //         'type' => 'text',
        //         'valueType' => 'currency',
        //         'name' => 'minPrice',
        //         'label' => 'حداقل مبلغ',
        //     ],
        //     [
        //         'type' => 'text',
        //         'valueType' => 'currency',
        //         'name' => 'maxPrice',
        //         'label' => 'حداکثر مبلغ',
        //     ],
        //     [
        //         'type' => 'text',
        //         'valueType' => 'date',
        //         'name' => 'duedate',
        //         'label' => 'تاریخ انقصا',
        //     ],
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
