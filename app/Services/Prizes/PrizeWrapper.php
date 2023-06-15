<?php

namespace App\Services\Prizes;

class PrizeWrapper
{

    // function index() : array {
    //     return [];

    // }
    // public function __construct()
    // {

    // }

    function getInstance($prizeId): Prize
    {
        $config = collect(config('prizes'))->where('id', $prizeId)->first();
        return new Prize($config);
    }

    function getAll(): array
    {
        $configs = config('prizes');
        foreach ($configs as $config) {
            $prizes[] = (new Prize($config))->introduction();
        }
        return $prizes;
    }
}
