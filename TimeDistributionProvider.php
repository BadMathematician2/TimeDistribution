<?php


namespace App\Packages\TimeDistribution;


use Illuminate\Support\ServiceProvider;

class TimeDistributionProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('TimeDistribution',function (){
            return $this->app->make(TimeDistribution::class);
        });
    }
}
