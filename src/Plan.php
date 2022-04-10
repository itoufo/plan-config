<?php
namespace Itoufo\PlanConfig;

use Illuminate\Support\Facades\Facade;

class Plan extends Facade{

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'planconfig';
    }

}