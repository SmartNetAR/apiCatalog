<?php
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 21:01:42
 * @modify date 2019-03-11 21:01:42
 * @desc [description]
 */

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