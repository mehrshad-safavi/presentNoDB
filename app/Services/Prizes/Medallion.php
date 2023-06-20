<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;


class Medallion extends Prize implements PrizeInterface
{
    public const ID = 8;
    public const TITLE = 'مدال';

    function provideFields(): Fields
    {
        return new Fields([new Field([
            'type' => 'list',
            'valueType' => 'numeric',
            'name' => 'id',
            'label' => 'شناسه',
            'items' => [
                '1' => 'طلایی',
                '2' => 'نقره ای',
                '3' => 'برنزی',
            ],

        ])]);

        // return [
        //     [
        //         'type' => 'list',
        //         'valueType' => 'numeric',
        //         'name' => 'id',
        //         'label' => 'شناسه',
        //         'items' => [
        //             '1' => 'طلایی',
        //             '2' => 'نقره ای',
        //             '3' => 'برنزی',
        //         ],
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
