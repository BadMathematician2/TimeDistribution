<?php


namespace App\Packages\TimeDistribution;


use Illuminate\Support\Facades\Facade;

class TimeDistributionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TimeDistribution';
    }
}
