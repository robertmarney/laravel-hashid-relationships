<?php

namespace Robertmarney\LaravelHashidRelationships;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Robertmarney\LaravelHashidRelationships\Skeleton\SkeletonClass
 */
class LaravelHashidRelationshipsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-hashid-relationships';
    }
}
