<?php

namespace App\Providers;

use App\Services\Prize;
use App\Services\Prizes\Gift;
use App\Services\PrizeWrapper;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Collection;
use HaydenPierce\ClassFinder\ClassFinder;

class PrizeServiceProvider extends ServiceProvider
{
    /**
     * all the new prize classes should be registered here.
     */
    private static $prizeClasses = [];
    /**
     * the path used to look for prize classes
     */
    private static $discoveryPath = 'App\Services\Prizes';

    /**
     * Register services.
     */
    public function register(): void
    {

        $this->shouldDiscoverPrizes() ? self::$prizeClasses = array_merge(self::$prizeClasses, $this->discoverClasses()) : self::$prizeClasses;
        foreach (self::$prizeClasses as $prize) {
            $prizeObject = new $prize;
            $classData[$prizeObject->id] = $prizeObject;
        }
        PrizeWrapper::setClasses($classData);


        $this->app->singleton(Prize::class, function (Application $app) {
            return PrizeWrapper::getInstance($app->request->route('prizeId'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }

    public function shouldDiscoverPrizes(): bool
    {
        return true;
    }

    private static function discoverClasses(): array
    {
        return ClassFinder::getClassesInNamespace(self::$discoveryPath);
    }
}
