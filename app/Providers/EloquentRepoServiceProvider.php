<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EloquentRepoServiceProvider extends ServiceProvider {
    
    public function register()
    {
        $this->app->bind(
            'App\Catalog\Object\ObjectRepo', 'App\Catalog\Object\EloquentObjectRepo'
            ) ;
    } 

}