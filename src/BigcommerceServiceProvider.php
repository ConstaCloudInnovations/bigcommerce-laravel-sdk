<?php
namespace Bigcommerce;
use Illuminate\Support\ServiceProvider;

class BigcommerceServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}
?>