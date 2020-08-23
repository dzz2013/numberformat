<?php

namespace Kevin\NumberFormat;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    // 标记着提供器是延迟加载的
    protected $defer = true;

    //  注册服务提供者
    public function register()
    {
        $this->app->singleton(\NumberFormat::class, function () {
            return new \NumberFormat();
        });
        $this->app->alias(\NumberFormat::class, 'numberformat');
    }

    // 取得提供者提供的服务
    public function provides()
    {
        return [\NumberFormat::class, 'numberformat'];
    }
}