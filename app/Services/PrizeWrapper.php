<?php

namespace App\Services;

use App\Exceptions\UserFriendlyException;

class PrizeWrapper
{
    private static $classes;

    /**
     * return an object of class located in App\Services\Prizes that matches the id
     * we could have made the class singleton and register the prize classes in serviceProvider! Done :D
     */
    public static function getInstance($prizeId): object
    {
        throw_if(!isset(self::$classes[$prizeId]), new UserFriendlyException('id not found!', 403));

        return self::$classes[$prizeId];
    }

    public static function getAll(): array
    {
        foreach (self::$classes as $id => $class) {

            $prizes[] = ($class)->introduction();
        }
        return $prizes ?? [];
    }
    public static function setClasses($classes): void
    {
        self::$classes = $classes;
    }
}
