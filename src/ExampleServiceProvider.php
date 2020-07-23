<?php

namespace entwurfhaus\owlet;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {
    /**
     * Provide publish declarations here. Optional.
     *
     * @return  void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'owlet');
    }

    /**
     * Provide register declarations here. Optional.
     *
     * @return  void
     */
    public function register() {
        // insert if needed
    }
}
