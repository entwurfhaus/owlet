<?php

namespace entwurfhaus\owlet;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {
    public function boot() {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'owlet');
    }

    public function register() {
        // insert if needed
    }
}
