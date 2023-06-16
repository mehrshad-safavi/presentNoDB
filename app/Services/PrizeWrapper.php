<?php

namespace App\Services;

use App\Services\Prizes\BurnScore;
use HaydenPierce\ClassFinder\ClassFinder;
use Illuminate\Support\Collection;

class PrizeWrapper
{
    /**
     * return an object of class located in App\Services\Prizes that matches the id
     * we could have made the class singleton and register the prize classes in serviceProvider!
     */
    function getClasses(): Collection
    {
        return collect(ClassFinder::getClassesInNamespace('App\Services\Prizes'));
    }
    function getInstance($prizeId): object
    {
        $classes = $this->getClasses();
        $class = $classes->filter(function ($className) use ($prizeId) {
            return $className::ID == (int)$prizeId;
        });
        throw_if($class->isEmpty(), new \Exception('id not found!', 403));

        return new ($class->first())();
    }

    function getAll(): array
    {
        $classes = $this->getClasses();
        foreach ($classes as $class) {
            $prizes[] = (new $class)->introduction();
        }
        return $prizes ?? [];
    }
}
