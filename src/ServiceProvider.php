<?php
namespace Yjtec\CasClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        Auth::extend('cas',function($app,$name,array $config){
            return new CasGuard(
                Auth::createUserProvider($config['provider']),
                $this->app['request']
            );
        });
        Auth::provider('cas',function($app,array $config){
            return new CasProvider($config);
        });
    }

    public function register(){
        $this->app->singleton('cas',function($app){
            return new CasClient(config('casclient'));
        });
    }
}
